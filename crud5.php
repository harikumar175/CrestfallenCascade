<?php

if(isset($_GET['delete']))
{
  include_once'dbh.inc.php';
$id=$_GET['delete'];
$mysqli="DELETE FROM memory where si_no=$id";
mysqli_query($conn,$mysqli);
header("location:memory.php");

}
?>
