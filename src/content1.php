<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',"ON");
//lecture on session
//this is to log out
if(isset($_GET['action']) && $_GET['action'] = 'end'){
  $_SESSION = array(); // clean array
  session_destroy(); //destroy session
  $filePatch = explode('/', $_SERVER['PHP_SELF'], -1);
  $filePatch = implode('/',$filePatch);
  $redirect = "Http://" . $_SERVER['HTTP_HOST'] . $filePatch;
  header("Location: {$redirect}/login.php", true);
}

//no username
if (empty($_POST['username'])) {
  if (!isset($_SESSION['username'])){
  echo 'A username must be entered. Click <a href= login.php >here</a> to return to the login screen.';
  exit();
  }
}

if(isset($_POST['username'])){
  $_SESSION['username']= $_POST['username'];
}

if(isset($_SESSION['username'])){
  if(isset($_SESSION['visits'])){
    $_SESSION['visits']++;
 // echo 'session is st';
  }else{ 
    $_SESSION['visits']= 0;
  //  echo 'session is not set';
  }
  echo 'Hello ' . $_SESSION['username'] . ' you have visited this page ' . $_SESSION['visits'] . ' times before.';
  echo 'Click <a href = "?action=end"> here </a> to log out.';
  echo '   Click <a href = content2.php> here </a> to see content2.php';
}
?>
