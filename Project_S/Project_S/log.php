
<?php
session_start();
if(!isset($_SESSION["age"]))
 header("Refresh: 0; url=home.php");
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
mPoll
<div id="pulkit">Don't be a LOL! Just Poll.</div>
<div id="options"><div class="card">
    <div class="side"><img src="x1.png">
	</div>
    
</header>
<div id="mainbody">
<body id="log">
<form action="error.php" method="POST">
<CENTER>
<BR><BR>
<h2 style="color:grey">QUESTION : WHO DO YOU THINK COULD SERVE THE COUNTRY THE BEST ?</h2>
<div style="color:grey">
<table align = "center">
<tr><td><input type="radio" name="option" value="namo"><td><td><h3 style="color:grey">NARENRDA DAMODAR DAS MODI</h3></td></tr>

<tr><td><input type="radio" name="option" value="rahul" ><td><td><h3 style="color:grey">RAHUL GANDHI</h3></td></tr>

<tr><td><input type="radio" name="option" value="arvind" ><td><td><h3 style="color:grey">ARVIND KEJRIWAL</h3></td></tr>

<tr><td><input type="radio" name="option" value="priyanka" ><td><td><h3 style="color:grey">PRIYANKA GANDHI</h3></td></tr>

<tr><td><input type="radio" name="option" value="akhilesh" ><td><td><h3 style="color:grey">AKHILESH YADAV</h3></td></tr>
</table>
</div>


<BR>

<INPUT TYPE ="SUBMIT" VALUE="SUBMIT" id="b2">



</CENTER>
</form>
</BODY>

</body>
</div>


<footer>
mPoll is a registered trademark of DEEK<SUP>&reg;<SUP>S
</footer>
</body>



</html>