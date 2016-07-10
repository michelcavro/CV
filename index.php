<?php
$sites = array(
    "en" => "en/",
    "fr" => "fr/",
    );
 
// Get 2 char lang code
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// Set default language if a '$lang' version of site is not available
if (!isset($sites[$lang])) {
$lang = "en";
    }
// Finally redirect to desired location
header('Location: ' . $sites[$lang]);
exit ;
?>