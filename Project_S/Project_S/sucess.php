<?php
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$state=$_POST["state"];
$city=$_POST["city"];
$pincode=$_POST["pin"];
$mobile=$_POST["phone"];
session_start();
$_SESSION["age"]=$age;
$_SESSION["gen"]=$gender;
$_SESSION["stat"]=$state;
$conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
$sql="INSERT INTO `registration_tab` (`Name`,`Age`,`Gender`,`State`,`City`,`Pincode`,`Phone`) VALUES('$name','$age','$gender','$state','$city','$pincode','$mobile')";
if(mysqli_query($conn,$sql)){
header("Refresh: 0; url=log.php");
}
else
echo "You have entered a duplicate voterid"."<br>".mysqli_error($conn);
mysqli_close($conn);

?>


