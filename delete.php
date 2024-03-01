<?php
error_reporting(0);
include("connection.php");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM `student`where id = $id");
header('location:create.php');
?>