<?php
session_start();

if(isset($_POST['note'])){
 if(!isset($_SESSION['notes'])) $_SESSION['notes'] = array();
 
 $_SESSION['notes'][] = $_POST['note'];
}

header("location: /GoogleKeep/index.php");

?>
