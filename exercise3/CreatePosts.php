<?php
$user = $_POST["user"];
$post = $_POST["post"];
$mysqli = new mysqli('mysql.eecs.ku.edu', 'tbrooks', 'P@$$word123', 'tbrooks');
if ($mysqli->connect_errno){
 echo "Failed Connection";
exit();
}
$query = "SELECT * FROM Users WHERE Name='$user'";
if ($result = $mysqli->query($query))
{
	$create = "INSERT INTO Posts (Content, Author) VALUES ('$post', '$user')";
	if ($mysqli->query($create)){
		echo "Post Added";
	}
	else{
	   echo	"The user exists, but the post could not be created.";
	}
}
else
{
 echo nl2br("There was a problem.\n");
}
$mysqli->close();
?>
