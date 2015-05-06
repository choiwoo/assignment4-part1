<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors',"ON");
//if session is set
if(isset($_SESSION['username'])){
  echo 'click <a href = "content1.php">here </a> for content1.php';
}
?>
<?php 
  header("Location: login.php"); //else to login.php
?>
