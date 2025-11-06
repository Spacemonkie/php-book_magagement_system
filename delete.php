<?php
include("db.php");
$id=$_GET['id'];
$stmt=$conn->prepare("delete from books where id=?");
$stmt->bind_param("i",$id);
$stmt->execute();
header("location:index.php");
?>
