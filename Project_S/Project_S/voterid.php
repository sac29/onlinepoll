<html>
<head>
<link rel="stylesheet" type="text/css" href="a.css"/>
</head>
<body>
<header>
mPoll
<div id="pulkit">Don't be a LOL! Just Poll.</div>
<div id="options"><div class="card">
    <div class="side"><img src="x1.png"></div>
    <div class="side back">

	<div>
    <p><a id="i" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Admin Login</a></p>
   
   <div id="light" class="white_content">

<div  class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>	
	
	<div class="group">      
      <input type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>
	<input type="submit" value="Login" id="b3">

	
	<br><a id="i" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Back</a></div>
    <div id="fade" class="black_overlay"></div>
</div>
	
	<br>
	<a id="i" href="#">Contacts</a><br><br>
	<a id="i" href="#">About us</a></div>
  </div></div>
</header>
<div id="mainbody">
<body id="log">
<form action="error.php" method="POST">

</form>
<div id="style">
<BR><BR><br><br><br><br><br>
<h2 style="color:grey" align = "center">SAME VOTER ID ENTERED<BR>Please enter a valid voterID ..<h2>
<BR><BR>
<br>
<BR>
<br><br><br><br>



</div>

</BODY>

</body>
</div>


<footer>
mPoll is a registered trademark of DEEK<SUP>&reg;<SUP>S
</footer>
</body>
<?php
session_destroy();
header("Refresh: 2; url=home.php");
?>
</html>
