<?php
$connect = mysqli_connect("localhost","root","","restaurant") or die($connect);
if($connect)
{
	//echo "sucess";
}
else
{
	echo "error";
}
// Set charset to utf8mb4
mysqli_set_charset($connect, 'utf8mb4');
?>
