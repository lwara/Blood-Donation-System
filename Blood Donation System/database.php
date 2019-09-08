<?php
$servername = "localhost"; $username = "root"; $password = "";
$connection = mysqli_connect($servername, $username, $password);
if (!$connection)
{
	die('failed to connect: '. mysqli_connect_error());
}

mysqli_select_db($connection,"bds");

?>
