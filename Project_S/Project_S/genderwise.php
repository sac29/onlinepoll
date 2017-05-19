<!doctype>
<?php
session_start();

if(isset($_SESSION["Qq"])  and isset($_SESSION["Wq"]))
   {
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="x.css"/>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>

<header>
<h1 id="heading">mPoll</h1>
<div id="pulkit">Don't be a LOL! Just Poll.</div>
<div id="options"><div class="card">
    <div class="side"><img src="x1.png"></div>
    <div class="side back">
    <form action="logout.php">
	<input type="submit" value="Admin logout" id="b4" >
	</form>
 </header>
 
<div class="container">
  <h2>Gender Basis</h2>
  <p>Result on the basis of gender</p> 
  Nrendra Modi
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[0]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  
							  
				              ?>%">
      Male:<?php echo $row1[0];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[1]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  ?>%">
      Female:<?php echo $row1[1];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    
  </div>
  Rahul Gandhi
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[0]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  
							  
				              ?>%">
      Male:<?php echo $row1[0];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[1]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  ?>%">
      Female:<?php echo $row1[1];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    
  </div>
  
  Arvind Kejriwal
   <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[0]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  
							  
				              ?>%">
      Male:<?php echo $row1[0];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[1]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  ?>%">
      Female:<?php echo $row1[1];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    
  </div>
  Priyanka Gandhi
   <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[0]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  
							  
				              ?>%">
      Male:<?php echo $row1[0];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[1]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  ?>%">
      Female:<?php echo $row1[1];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    
  </div>
  Akhilesh Yadav
   <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[0]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  
							  
				              ?>%">
      Male:<?php echo $row1[0];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Male,Female  FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              $mal=($row1[1]/($row1[0]+$row1[1]))*100;
							  echo $mal;
							  ?>%">
      Female:<?php echo $row1[1];?>(<?php echo round($mal,2,PHP_ROUND_HALF_UP);?>)
    </div>
    
  </div>
  
</div>


<center>
<form method="link" action="agewise.php">
<input type="submit" value="Agewise" id="b2">
</form>
<br>

<form method="link" action="state.php">
<input type="submit" value="Statewise" id="b2">

<br>
<form method="link" action="adminlog.php">
<input type="submit" value="Total Voting" id="b2">
</form>
<br>
</center>
 
 <footer>
mPoll is a registered trademark of DEEK<SUP>&reg;<SUP>
</footer>
</body>



</html>
<?php
}
else
header("Refresh: 0; url=home.php");
?>