<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['UID'])) {
header('Location: index.php');
}

?>
<html>

<head>
<title>Secured Page</title>
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
		font-size: 20px;
	}
	a:link{
		color: white;
	}
	a:visited{
		color: white;
	}
	a:hover{
		color: red;
	}

</style>
</head>

<body>
<div>
<p>Welcome <b><?php echo $_SESSION['UID']; ?></b>.
<br>You have successfully logged in! <br>
Press logout button to log out! <br></p>
<p><a href="logout.php">Logout</a></p>
</div>
</body>

</html>