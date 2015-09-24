<?php
include("connect.php");

if ($_POST['submit'])
	{
		$a = $_POST['fullname'];
		$b = $_POST['mobilenumber'];
		$e = $_POST['Mobilenumber'];
		$c = $_POST['password'];
		
		$f = $_POST['Password'];
	
	$write = mysql_query("INSERT INTO khushal VALUES('','$a','$c','$b')");
	header('Location: index.html');
        exit;
}

?>



