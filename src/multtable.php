<!DOCTYPE HTML>
<html>
<head>
  <meta charset = "utf-8">
</head>
<body>
<?php
//Multtable.php
//Woo Choi
/*
** accept 4 parameters passed via URL in a GET request
**min-multiplicand, max-multiplicand, min-multiplier, max-multiplier
** Numbers come from set of whole numbers
** creates a multiplication table.
*/

//multiplication function that multiplies rows and columns
function multiply($row, $col){
  echo $row * $col;
}
//input check
// good bye 5%

//set variable
$minR = $_GET['min-multiplier'];
$maxR = $_GET['max-multiplier'];
$minD = $_GET['min-multiplicand'];
$maxD = $_GET['max-multiplicand'];


//table and stufffff
echo '
<table border =1>
<thead>
<th></th>';
//top row min-multiplier -> max-multiplier
for($i = $minR; $i <= $maxR; $i++){
  echo '<th>' . $i . '</th>';
}

echo '</thead> <tbody>';
//set column min-multiplicand -> max-multiplicand
for($j = $minD; $j <= $maxD; $j++){
  echo '<tr> <td>' . $j;
  //multiply multiplier and multiplicand
  for ($k = $minR; $k <= $maxR; $k++){
    echo '<td>' . $j*$k . '</td>';
  }
}
echo '</tbody> </table>';

?>
</body>
</html>
