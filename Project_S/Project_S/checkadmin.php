<?php
session_start();
$user=$_POST["username"];
$pass=$_POST["psw"];
$_SESSION["Qq"]=$user;
$_SESSION["Wq"]=$pass;

$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
$sql="SELECT `pass` FROM `admin` WHERE `admin`='$user'";
$pas=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($pas,MYSQLI_NUM);
if($pass==$row[0])
  header("Refresh: 0; url=adminlog.php");
  else{
 echo 'Password is incorrect';
 header("Refresh: 0; url=home.php");
 }
  mysqli_close($conn);
?>