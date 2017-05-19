<?php
$answer=$_POST["option"];
session_start();
$gen=$_SESSION["gen"];
if($_SESSION["age"]>=18 and $_SESSION["age"]<=35)
$age="A18_35";
else if($_SESSION["age"]>=36 and $_SESSION["age"]<=60)
$age="A36_60";
 else if($_SESSION["age"]>=61 )
$age="60_above";
$state=$_SESSION["stat"];

$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
// gender
$sql1="SELECT $age FROM `result` WHERE Person='$answer'";
 if($res1=mysqli_query($conn,$sql1)){
 echo "success<br>";
 $row1=mysqli_fetch_array($res1);
 $abc=$row1[0]+1;
 $sql2="UPDATE result SET $age=$abc WHERE Person='$answer'";
 if(mysqli_query($conn,$sql2)){
 echo "success gender <br>";
 $a=1;
 }
 }

//age
$sql3="SELECT $age FROM `result` WHERE Person='$answer'";
 if($res2=mysqli_query($conn,$sql3)){
 echo "success 3<br>";
 $row2=mysqli_fetch_array($res2);
 $abc=$row2[0]+1;
 $sql4="UPDATE result SET $age=$abc WHERE Person='$answer'";
 if($res1=mysqli_query($conn,$sql4)){
 echo "success age<br>";
 $b=1;
 }
 }
 
 
 //state
 
 $sql5="SELECT $state FROM `result` WHERE Person='$answer'";
 if($res=mysqli_query($conn,$sql5)){
 echo "success5<br>";
 $row3=mysqli_fetch_array($res);
 $abc=$row3[0]+1;
 $sql6="UPDATE result SET $state=$abc WHERE Person='$answer'";
 if($res1=mysqli_query($conn,$sql6)){
 echo "success state<br>";
 $c=1;
 }
 }
 if($a==1 and $b==1 and $c==1){
 echo "THANKS FOR VOTING";
 header("Refresh: 10; url=home.php");
 }
 else 
 echo "SOMEHING WEN WRONG";
 
?>