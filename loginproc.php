<?php

// Inialize session
session_start();

// Include database connection settings
include('config.inc');

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM login WHERE (UID = '" . mysql_real_escape_string($_POST['UID']) . "') and (PASS = '" . mysql_real_escape_string($_POST['PASS']) . "')");

$login1 = mysql_query("SELECT * FROM login WHERE (UID = '" . mysql_real_escape_string($_POST['UID']) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['UID'] = $_POST['UID'];
// Jump to secured page
header('Location: securedpage.php');
}
elseif (mysql_num_rows($login1) == 1) {
$mesg = $_POST['UID'];
$msg = "The password entered is incorrect. <br> Please try again! <br>";
//$msg = "The password entered is incorrect. <br> Please try again!";
header("Location:index.php?mesg=$mesg&&msg=$msg");
}
else {
// Jump to login page
$msg = "The username and password entered are incorrect. <br> Please try again!<br>";
header("Location:index.php?msg=$msg");
}

?>