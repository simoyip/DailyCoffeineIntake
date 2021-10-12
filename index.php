<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/styles.css">
<script src="./js/jquery.js"></script>
<script src="./js/script.js"></script>
<?php
include_once("config/config.php");
include_once("controller/Controller.php");
  
$controller = new Controller();
$controller->invoke();

?>

