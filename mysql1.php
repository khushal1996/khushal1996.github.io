<?php
require("connect.php");
	if ($_POST["submit"])
{
        $apple = $_POST['fullname'];
        $banana = $_POST['mobilenumber'];
        $cat = $_POST['Mobilenumber'];
		$dog = $_POST['password'];
		$elephant = $_POST['Password'];
		
		$write = mysql_query("INSERT INTO whatsapp VALUES ('','$apple','$banana','$dog')");
		}
?>
