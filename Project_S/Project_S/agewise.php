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
 </div>
<body>
 <div class="container">
  <h2>Agewise Result</h2>
  <p>The agewise breakup of result </p> 
  Narendra Modi
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[0]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
     18-35:<?php echo $row[0];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[1]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
     36-60:<?php echo $row[1];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[2]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
     60+:<?php echo $row[2];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
  </div>Rahul Gandhi
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[0]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      18-35:<?php echo $row[0];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[1]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
     36-60:<?php echo $row[1];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[2]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
     60+:<?php echo $row[2];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
  </div>Arvind Kejriwal
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[0]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      18-35:<?php echo $row[0];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[1]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      36-60:<?php echo $row[1];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[2]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
     60+:<?php echo $row[2];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
  </div>Priyanka Gandhi
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[0]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      18-35:<?php echo $row[0];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[1]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      36-60:<?php echo $row[1];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[2]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      60+:<?php echo $row[2];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
  </div>Akhilesh Yadav
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[0]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      18-35:<?php echo $row[0];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[1]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
      36-60:<?php echo $row[1];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
								$sql2="SELECT A18_35,A36_60,60_above  FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $agep=($row[2]/($row[0]+$row[1]+$row[2]))*100;
							  echo $agep;
							  ?>%">
     60+:<?php echo $row[2];?>(<?php echo round($agep,2,PHP_ROUND_HALF_UP);?>)
    </div>
  </div>
</div>

<center>

<br>
<form method="link" action="genderwise.php">
<input type="submit" value="Genderwise" id="b2">
</form>
<br>
<form method="link" action="state.php">
<input type="submit" value="Statewise" id="b2">
</form>
<br>
<form method="link" action="adminlog.php">
<input type="submit" value="Total Voting" id="b2">
</form>
<br>
</center>

<br>
 
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