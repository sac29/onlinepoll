<!doctype html>

<?php
session_start();
?><html>
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
     <form action="checkadmin.php" method="POST">
<div  class="group">      
      <input type="text" name="username" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Username</label>
    </div>	
	
	<div class="group">      
      <input type="password" name="psw" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>
	<input type="submit" value="Login" id="b3">
</form>
	
	<br><a id="i" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Back</a></div>
    <div id="fade" class="black_overlay"></div>
</div>
	
	<br>
	<a id="i" href="contact.html">Contacts</a><br><br>
	<a id="i" href="about.html">About us</a></div>
  </div></div>
</header>
<h1 id="regtext">Registration Form<h1>

<div class="contain">
<form action="sucess.php" method="POST">

<div class="group">      
      <input type="text" name="name" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>
	<div class="group">      
      <input type="text"  name="age" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Age(18-above)</label>
    </div>
	
	<div class="group">      
      <input type="text" name="gender" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Gender (male/female)</label>
    </div>
	
	<div class="group">      
      <input type="text" name="state" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>State</label>
    </div>
	
	<div class="group">      
      <input type="text" name="city" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>City</label>
    </div>
	
	<div class="group">      
      <input type="text" name="pin"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>PIN code</label>
    </div>
	
	
	
	<div class="group">      
      <input type="text" name="phone" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Voter ID No.</label>
    </div>
    
	<input type="submit" value="Register" id="b2">

</form>
</div>

<footer>
mPoll is a registered trademark of DEEK<SUP>&reg;<SUP>
</footer>
</body>



</html>

