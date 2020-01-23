<!DOCTYPE html>
<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("routes/web.php");
if($currentPagePath != 'Home')
{
require("Repo/".$currentPagePath."Repo.php");
$class_name =$currentPagePath."Repo";
$obj = new $class_name();
//$search = new $class_name;
$result=$obj->RetrieveData();
}
?>
<html lang="en">
  <?php include 'Layout/Header.php' ; ?>
  <body>
      
       

        <!-- Nav-->
        <nav>
            <div class="container">
                <div class="row-fluid">
                    <div class="span3 logo">
                        <a href="index.html"><h1 style="color:white;">Translations System</h1></a>
                    </div>
                    <!-- Menu-->
                    <ul id="menu" class="span9 sf-menu">
                        <li><a href="?pageUrl=Translations">Translations</a></a>
                          
                        </li>

                        
                    </ul>
                    <!-- End Menu-->
                </div>
            </div>
        </nav>
       

        <!-- Header-->
        <header> 
            
            
            <!-- Slide -->           
            
            <!-- End Slide -->   
        </header>
        <!-- End Header-->

 <?php
          // load the views
          include_once("views/".$currentPagePath."/show.php");
          ?>
        <!-- End content info -->
        
        <!-- End content info-->

        <!-- Sponsors-->
        <div class="sponsors">
              <div class="container">
                  <div class="row-fluid">
                      <div class="span2">
                          <a href="#"></a>
                      </div>
                      <div class="span2">
                            <a href="#"></a>
                      </div>
                      <div class="span2">
                            <a href="#"></a>
                        </div>
                        <div class="span2">
                            <a href="#"></a>
                        </div>
                        <div class="span2">
                            <a href="#"></a>
                        </div>
                        <div class="span2">
                            <a href="#"></a>
                        </div>
                  </div>
            </div>
        </div>
        <!-- End Sponsors-->

       


       <!-- Footer area - footer_medium -->
        <?php include 'Layout/Footer.php' ; ?>
        <!-- End Footer area - footer_medium -->

        
   
      <!-- ======================= JQuery libs =========================== -->
        <!-- Always latest version of jQuery-->
       <?php include 'Layout/Scripts.php' ; ?>
        </i></i></i>
     <!-- ======================= End JQuery libs =========================== -->

  </body>
</html>
<?php
ob_flush();
?>