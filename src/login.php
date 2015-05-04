<?php
  session_start();
  //if session is active, redirect to content1.php
  //from lecture on sessions little modified.
  if(isset($_SESSION['username'])){
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filePath = implode('/', $filePath);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
    header("Location: {$redirect}/content1.php", true);
    die();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
</head>
<body>
  <form action= "content1.php" method= "post">
    <p>username: <input type="text" name="username"> </p>
    <p><input type="submit" value="Login"></p>
  </form>
</body>
</html>  
