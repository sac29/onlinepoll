<?php
session_start();

   if(isset($_SESSION["Qq"]))
   {
   ?>
   
   
   
<!doctype html>

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
  <h2>The Result of the POLL</h2>
  <p>The contextual classes colors the progress bars:</p> 
  Narendra modi
  <div class="progress"> 
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Male,Female FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc1=$row[0]+$row[1];
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc2=$row[0]+$row[1];
							 
							  
							   $sql2="SELECT Male,Female FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc3=$row[0]+$row[1];
							 
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc4=$row[0]+$row[1];
							 
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc5=$row[0]+$row[1];
							   $per=($abc1/($abc1+$abc2+$abc3+$abc4+$abc5))*100;
							   echo round( $per, 1, PHP_ROUND_HALF_UP);
				              ?>%">
      <?php echo $abc1;?> (<?php echo round( $per, 2, PHP_ROUND_HALF_UP);?>%) 
    </div>
  </div>Rahul Gandhi
  <div class="progress">
    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Male,Female FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc1=$row[0]+$row[1];
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc2=$row[0]+$row[1];
							 
							  
							   $sql2="SELECT Male,Female FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc3=$row[0]+$row[1];
							 
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc4=$row[0]+$row[1];
							 
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc5=$row[0]+$row[1];
							   $per=($abc2/($abc1+$abc2+$abc3+$abc4+$abc5))*100;
							   echo round( $per, 1, PHP_ROUND_HALF_UP);
				              ?>%">
                            <?php echo $abc2;?> (<?php echo round( $per, 2, PHP_ROUND_HALF_UP);?>%)
    </div>
  </div>Arvind Kejriwal
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Male,Female FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc1=$row[0]+$row[1];
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc2=$row[0]+$row[1];
							 
							  
							   $sql2="SELECT Male,Female FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc3=$row[0]+$row[1];
							 
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc4=$row[0]+$row[1];
							 
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc5=$row[0]+$row[1];
							   $per=($abc3/($abc1+$abc2+$abc3+$abc4+$abc5))*100;
							   echo round( $per, 1, PHP_ROUND_HALF_UP);
				              ?>%">
                                <?php echo $abc3;?>(<?php echo round( $per, 2, PHP_ROUND_HALF_UP);?>%)
    </div>
  </div>Priyanka Gandhi
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Male,Female FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc1=$row[0]+$row[1];
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc2=$row[0]+$row[1];
							 
							  
							   $sql2="SELECT Male,Female FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc3=$row[0]+$row[1];
							 
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc4=$row[0]+$row[1];
							 
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc5=$row[0]+$row[1];
							   $per=($abc4/($abc1+$abc2+$abc3+$abc4+$abc5))*100;
							   echo round( $per, 1, PHP_ROUND_HALF_UP);
				              ?>%">
                              <?php echo $abc4;?> (<?php echo round( $per, 2, PHP_ROUND_HALF_UP);?>%)
    </div>
  </div>Akhilesh Yadav
    <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Male,Female FROM `result` WHERE Person='Narendra Modi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc1=$row[0]+$row[1];
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc2=$row[0]+$row[1];
							 
							  
							   $sql2="SELECT Male,Female FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc3=$row[0]+$row[1];
							 
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc4=$row[0]+$row[1];
							 
							  
							  $sql2="SELECT Male,Female FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              $abc5=$row[0]+$row[1];
							   $per=($abc5/($abc1+$abc2+$abc3+$abc4+$abc5))*100;
							   echo round( $per, 1, PHP_ROUND_HALF_UP);
				              ?>%">
                         <?php echo $abc5;?> (<?php echo round( $per, 2, PHP_ROUND_HALF_UP);?>%)
  </div>
</div>
</div>
</body>
<div id="sac">
<center>
<form method="link" action="agewise.php">
<input type="submit" value="Agewise" id="b2">
</form>
<br>
<form method="link" action="genderwise.php">
<input type="submit" value="Genderwise" id="b2">
</form>
<br>
<form method="link" action="state.php">
<input type="submit" value="Statewise" id="b2">

<br>
</center>
</div>

<footer>
mPoll is a registered trademark of DEEK<SUP>&reg;<SUP>
</footer>



</html>

<?php
}
else
header("Refresh: 0; url=home.php");
?>