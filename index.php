<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['UID'])) {
header('Location: securedpage.php');
}
?>	

<html>

<head>
<title>PHPMySimpleLogin 0.3</title>
<style type="text/css">
	body{
		background-color: yellow;
		color: white;
	}
	div{
		background-color: black;
		border: 4px solid red;
		position: fixed;
		width: 30%;
		top: 35%;
		left : 35%;
		padding-left: 5%;
		font-family: arial;
	}
</style>
</head>

<body>
<div>
<h2>User Login</h2>
<table border="0" cellpadding="10px"> 
<form method="POST" action="loginproc.php">
<tr><td style="font-weight:bold;">Username</td><td>:</td><td><input type="text" name="UID" size="20" value="<?php if(isset($_GET['mesg'])) echo $_GET['mesg'];?>"></td></tr>
<tr><td style="font-weight:bold;">Password</td><td>:</td><td><input type="password" name="PASS" size="20"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Login" style="width:75%; height: 30px;font-size: 20px; text-align: center;font-weight: bold;"></td></tr>
</form>
</table>
<span></span><br>
 <?php if(isset($_GET['msg']))
  echo $_GET['msg'];
  ?>
</span>
<br>
</div>
</body>

</html>