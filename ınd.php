<?php

ob_start();
include("partials/nav.php");
ob_clean();
$nav = ob_get_clean();  

$nav = str_replace("About", "About Us", $nav);