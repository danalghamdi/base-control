<?php

$mysqli = new mysqli('localhost', 'root', '', 'test')or die(mysqli_error($mysqli));

$sql =mysqli_query($mysqli, "SELECT * FROM directions ORDER BY ID DESC LIMIT 1");
$print_data = mysqli_fetch_row($sql);

echo "LAST DATA RECORDED..";
echo "<hr>";

echo "ID =  ".$print_data[0];
echo "<br>";
echo "direction =  ".$print_data[1];
echo "<br>";

$mysql =mysqli_query($mysqli, "SELECT * FROM dta ORDER BY id DESC LIMIT 1");
$print_data = mysqli_fetch_row($mysql);

echo "<hr>";

echo "ID =  ".$print_data[0];
echo "<br>";
echo "s1 =  ".$print_data[1];
echo "<br>";
echo "s2 =  ".$print_data[2];
echo "<br>";
echo "s3 =  ".$print_data[3];
echo "<br>";
echo "s4 =  ".$print_data[4];
echo "<br>";
echo "s5 =  ".$print_data[5];
echo "<br>";
echo "s6 =  ".$print_data[6];
echo"<br>";



?>