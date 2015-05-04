<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors',"On");
//GET or POST
//{"TYPE":"[GET|POST]", "parameters": {"key1":"values1", ...,"keyn":"valuen"}}
//if no value, undefined
//if no key:
//{"TYPE":"[GET|POST]", "parameters":null}

//$_REQUEST
$form = $_SERVER['REQUEST_METHOD'];
$param = 0;
//test
//$param = json_encode($_GET);
//echo $param;
//for GET
if($form == 'GET')
  $param = json_encode($_GET);
//set json_encode to param if POST
if($form == 'POST')
  $param = json_encode($_POST);
//if POST or GET are empty, then set param to null
if(empty($_GET) || empty($_POST))
  $param = 'null';
//printing
echo '["Type":"' . $form . '", "parameters": ' . $param . '}';
?>
</body>
</html>
