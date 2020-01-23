<?php

require (__DIR__ . '/RepoAbstract.php');

/**
 * Description of TranslationsClass
 *
 * @author samy
 */
class TranslationsRepo extends RepoAbstract {

    private $target='en';

    private $response;

    /**
     * Retrieve Json Data.
     *
     * @return array
     */
    public function RetrieveData() {
        $file='json/sample.json';
        $section = file($file);


        for ($i =0 ; $i < count($file); $i+=20) {
            $section = file_get_contents($file, FALSE, NULL, $i, 20);
            $json = json_decode($section, true);
            $nameToBeTransleted=$json['names'][0];
            $this->response=$this->translate($nameToBeTransleted,$this->target);
        }


        return $total;
    }

    /**
     * Create Json Data.
     *
     * @param  $result array
     *
     * @return boolean
     */
    public function SaveData() {
        $obj=$this->response;
        if($obj != null)
        {
            if(isset($obj['error']))
            {
                echo "Error is : ".$obj['error']['message'];
            }
            else {
                $targetTransleted = $obj['data']['translations'][0]['translatedText'];
                $calculate = $this->custom_connection->prepare("update `contacts` set `hits` =contacts.hits+1  where names=" . $targetTransleted);
                $calculate->execute();
            }

        }
    }

    private function translate($text,$target,$source=false)
    {
        $url = 'https://www.googleapis.com/language/translate/v2?key=' . API_KEY . '&q=' . rawurlencode($text);
        $url .= '&target='.$target;
        if($source)
            $url .= '&source='.$source;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $obj =json_decode($response,true); //true converts stdClass to associative array.
        return $obj;
    }

}
