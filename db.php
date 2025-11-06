<?php
$server="localhost";
$user="root";
$pass="";
$db="dynamic_project";

$conn=mysqli_connect($server,$user,$pass,$db);

if(!$conn){
  die("Database not connected");
}
?>
