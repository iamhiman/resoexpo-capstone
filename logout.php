<?php
session_start();
if(!empty($_SESSION['email']))
{
$_SESSION['email']='';
}
header("Location:index.php");

session_destroy();
header("location:index.php?msg1=Succesfully logout")

?>


