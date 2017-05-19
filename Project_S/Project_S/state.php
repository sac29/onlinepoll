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
  <h2>Statewise</h2>
  <p>This shows the number of votes in a particular state for particular person</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>State</th><th>Narendra Modi</th><th>Rahul Gandhi</th><th>Arvind Kejriwal</th><th>Priyanka Gandhi</th><th>Akhilesh Yadav</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Andhra Pradesh</th><td><?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                   $sql2="SELECT Andhra_Pradesh,Arunachal_Pradesh,Assam,Bihar,Chhattisgarh,Goa,Gujrat,Haryana,Himachal_Pradesh,Jammu_and_Kashmir,Jharkhand,Karnataka,Kerala,Madhya_Pradesh,Maharashtra,Manipur,Meghalaya,Mizoram,Nagaland,Orissa,Punjab,Rajasthan,Sikkam,Tamil_Nadu,Telangana,Tripura,Uttar_Pradesh,Uttarakhand,West_Bengal  FROM `result` WHERE Person='Narendra Modi'";
			
				             $res=mysqli_query($conn,$sql2);
				              $row=mysqli_fetch_array($res);
				              echo $row[0]; ?></td><td><?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Andhra_Pradesh,Arunachal_Pradesh,Assam,Bihar,Chhattisgarh,Goa,Gujrat,Haryana,Himachal_Pradesh,Jammu_and_Kashmir,Jharkhand,Karnataka,Kerala,Madhya_Pradesh,Maharashtra,Manipur,Meghalaya,Mizoram,Nagaland,Orissa,Punjab,Rajasthan,Sikkam,Tamil_Nadu,Telangana,Tripura,Uttar_Pradesh,Uttarakhand,West_Bengal  FROM `result` WHERE Person='Rahul Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row1=mysqli_fetch_array($res);
				              echo $row1[0];?></td><th><?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Andhra_Pradesh,Arunachal_Pradesh,Assam,Bihar,Chhattisgarh,Goa,Gujrat,Haryana,Himachal_Pradesh,Jammu_and_Kashmir,Jharkhand,Karnataka,Kerala,Madhya_Pradesh,Maharashtra,Manipur,Meghalaya,Mizoram,Nagaland,Orissa,Punjab,Rajasthan,Sikkam,Tamil_Nadu,Telangana,Tripura,Uttar_Pradesh,Uttarakhand,West_Bengal  FROM `result` WHERE Person='Arvind Kejriwal'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row2=mysqli_fetch_array($res);
				              echo $row2[0];?></th><th><?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Andhra_Pradesh,Arunachal_Pradesh,Assam,Bihar,Chhattisgarh,Goa,Gujrat,Haryana,Himachal_Pradesh,Jammu_and_Kashmir,Jharkhand,Karnataka,Kerala,Madhya_Pradesh,Maharashtra,Manipur,Meghalaya,Mizoram,Nagaland,Orissa,Punjab,Rajasthan,Sikkam,Tamil_Nadu,Telangana,Tripura,Uttar_Pradesh,Uttarakhand,West_Bengal  FROM `result` WHERE Person='Priyanka Gandhi'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row3=mysqli_fetch_array($res);
				              echo $row3[0];?></th><th><?php $conn=mysqli_connect("localhost","root","","poll") or die("Not connected");
			                  $sql2="SELECT Andhra_Pradesh,Arunachal_Pradesh,Assam,Bihar,Chhattisgarh,Goa,Gujrat,Haryana,Himachal_Pradesh,Jammu_and_Kashmir,Jharkhand,Karnataka,Kerala,Madhya_Pradesh,Maharashtra,Manipur,Meghalaya,Mizoram,Nagaland,Orissa,Punjab,Rajasthan,Sikkam,Tamil_Nadu,Telangana,Tripura,Uttar_Pradesh,Uttarakhand,West_Bengal  FROM `result` WHERE Person='Akhilesh Yadav'";
			
				              $res=mysqli_query($conn,$sql2);
				              $row4=mysqli_fetch_array($res);
				              echo $row4[0];?></th>
      </tr>
      <tr>
         <th>Arunachal Pradesh</th><td><?php echo $row[1];?></td><td><?php echo $row1[1];?></td><td><?php echo $row2[1];?></td><td><?php echo $row3[1];?></td><td><?php echo $row4[1];?></td>
      </tr>
      <tr>
         <th>Assam</th><td><?php echo $row[2];?></td><td><?php echo $row1[2];?></td><td><?php echo $row2[2];?></td><td><?php echo $row3[2];?></td><td><?php echo $row4[2];?></td>
      </tr>
	  <tr>
         <th>Bihar</th><td><?php echo $row[3];?></td><td><?php echo $row1[3];?></td><td><?php echo $row2[3];?></td><td><?php echo $row3[3];?></td><td><?php echo $row4[3];?></td>
      </tr>
	  <tr>
         <th>Chhattisgarh</th><td><?php echo $row[4];?></td><td><?php echo $row1[4];?></td><td><?php echo $row2[4];?></td><td><?php echo $row3[4];?></td><td><?php echo $row4[4];?></td>
      </tr>
	  <tr>
         <th>Goa</th><td><?php echo $row[5];?></td><td><?php echo $row1[5];?></td><td><?php echo $row2[5];?></td><td><?php echo $row3[5];?></td><td><?php echo $row4[5];?></td>
      </tr>
	  <tr>
         <th>Gujrat</th><td><?php echo $row[6];?></td><td><?php echo $row1[6];?></td><td><?php echo $row2[6];?></td><td><?php echo $row3[6];?></td><td><?php echo $row4[6];?></td>
      </tr>
	  <tr>
         <th>Haryana</th><td><?php echo $row[7];?></td><td><?php echo $row1[7];?></td><td><?php echo $row2[7];?></td><td><?php echo $row3[7];?></td><td><?php echo $row4[7];?></td>
      </tr>
	  <tr>
         <th>Himachal Pradesh</th><td><?php echo $row[8];?></td><td><?php echo $row1[8];?></td><td><?php echo $row2[8];?></td><td><?php echo $row3[8];?></td><td><?php echo $row4[8];?></td>
      </tr>
	  <tr>
         <th>Jammu and Kashmir</th><td><?php echo $row[9];?></td><td><?php echo $row1[9];?></td><td><?php echo $row2[9];?></td><td><?php echo $row3[9];?></td><td><?php echo $row4[9];?></td>
      </tr>
	  <tr>
         <th>Jharkhand</th><td><?php echo $row[10];?></td><td><?php echo $row1[10];?></td><td><?php echo $row2[10];?></td><td><?php echo $row3[10];?></td><td><?php echo $row4[10];?></td>
      </tr>
	  <tr>
         <th>Karnataka</th><td><?php echo $row[11];?></td><td><?php echo $row1[11];?></td><td><?php echo $row2[11];?></td><td><?php echo $row3[11];?></td><td><?php echo $row4[11];?></td>
      </tr>
	  <tr>
         <th>Kerala</th><td><?php echo $row[12];?></td><td><?php echo $row1[12];?></td><td><?php echo $row2[12];?></td><td><?php echo $row3[12];?></td><td><?php echo $row4[12];?></td>
      </tr>
	  <tr>
         <th>Madhya Pradesh</th><td><?php echo $row[13];?></td><td><?php echo $row1[13];?></td><td><?php echo $row2[13];?></td><td><?php echo $row3[13];?></td><td><?php echo $row4[13];?></td>
      </tr>
	  <tr>
         <th>Maharashtra</th><td><?php echo $row[14];?></td><td><?php echo $row1[14];?></td><td><?php echo $row2[14];?></td><td><?php echo $row3[14];?></td><td><?php echo $row4[14];?></td>
      </tr>
	  <tr>
         <th>Manipur</th><td><?php echo $row[15];?></td><td><?php echo $row1[15];?></td><td><?php echo $row2[15];?></td><td><?php echo $row3[15];?></td><td><?php echo $row4[15];?></td>
      </tr>
	  <tr>
         <th>Meghalaya</th><td><?php echo $row[16];?></td><td><?php echo $row1[16];?></td><td><?php echo $row2[16];?></td><td><?php echo $row3[16];?></td><td><?php echo $row4[16];?></td>
      </tr>
	  <tr>
         <th>Mizoram</th><td><?php echo $row[17];?></td><td><?php echo $row1[17];?></td><td><?php echo $row2[17];?></td><td><?php echo $row3[17];?></td><td><?php echo $row4[17];?></td>
      </tr>
	  <tr>
         <th>Nagaland</th><td><?php echo $row[18];?></td><td><?php echo $row1[18];?></td><td><?php echo $row2[18];?></td><td><?php echo $row3[18];?></td><td><?php echo $row4[18];?></td>
      </tr>
	  <tr>
         <th>Orissa</th><td><?php echo $row[19];?></td><td><?php echo $row1[19];?></td><td><?php echo $row2[19];?></td><td><?php echo $row3[19];?></td><td><?php echo $row4[19];?></td>
      </tr>
	  <tr>
         <th>Punjab</th><td><?php echo $row[20];?></td><td><?php echo $row1[20];?></td><td><?php echo $row2[20];?></td><td><?php echo $row3[20];?></td><td><?php echo $row4[20];?></td>
      </tr>
	  <tr>
         <th>Rajasthan</th><td><?php echo $row[21];?></td><td><?php echo $row1[21];?></td><td><?php echo $row2[21];?></td><td><?php echo $row3[21];?></td><td><?php echo $row4[21];?></td>
      </tr>
	  <tr>
         <th>Sikkim</th><td><?php echo $row[22];?></td><td><?php echo $row1[22];?></td><td><?php echo $row2[22];?></td><td><?php echo $row3[22];?></td><td><?php echo $row4[22];?></td>
      </tr>
	  <tr>
         <th>Tamil Nadu</th><td><?php echo $row[23];?></td><td><?php echo $row1[23];?></td><td><?php echo $row2[23];?></td><td><?php echo $row3[23];?></td><td><?php echo $row4[23];?></td>
      </tr>
	  <tr>
         <th>Telangana</th><td><?php echo $row[24];?></td><td><?php echo $row1[24];?></td><td><?php echo $row2[24];?></td><td><?php echo $row3[24];?></td><td><?php echo $row4[24];?></td>
      </tr>
	  <tr>
         <th>Tripura</th><td><?php echo $row[25];?></td><td><?php echo $row1[25];?></td><td><?php echo $row2[25];?></td><td><?php echo $row3[25];?></td><td><?php echo $row4[25];?></td>
      </tr>
	  <tr>
         <th>Uttar Pradesh</th><td><?php echo $row[26];?></td><td><?php echo $row1[26];?></td><td><?php echo $row2[26];?></td><td><?php echo $row3[26];?></td><td><?php echo $row4[26];?></td>
      </tr>
	  <tr>
         <th>Uttarakhand</th><td><?php echo $row[27];?></td><td><?php echo $row1[27];?></td><td><?php echo $row2[27];?></td><td><?php echo $row3[27];?></td><td><?php echo $row4[27];?></td>
      </tr>
	  <tr>
         <th>West Bengal</th><td><?php echo $row[28];?></td><td><?php echo $row1[28];?></td><td><?php echo $row2[28];?></td><td><?php echo $row3[28];?></td><td><?php echo $row4[28];?></td>
      </tr>
    </tbody>
  </table>
</div>

 
<center>
<form method="link" action="agewise.php">
<input type="submit" value="Agewise" id="b2">
</form>
<br>
<form method="link" action="genderwise.php">
<input type="submit" value="Genderwise" id="b2">
</form>
<br>
<form method="link" action="adminlog.php">
<input type="submit" value="Total Voting" id="b2">

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