<?php
switch (@$_GET['pageUrl']) {

    case 'Translations':
        $currentPagePath = "Translations";
        break;
    default;
        $currentPagePath = "Home";
};
?>
