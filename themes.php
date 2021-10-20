<?php
session_start();

if(isset($_GET["theme"]))
{
    $theme = $_GET["theme"];

    if($theme == "master" || $theme == "dark")
    {
   	 $_SESSION["theme"] = $theme;
    }
}
?>