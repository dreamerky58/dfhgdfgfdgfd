<?php

$myhost = "localhost";
$myuser = "db-user";
$mypass = "db-pw";
$mydb = "db-name";
$key = "script9283yuvasi";

$con = mysqli_connect($myhost, $myuser, $mypass, $mydb);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>