<?php
$user = $_POST["user"];
$mysqli = new mysqli('mysql.eecs.ku.edu', 'tbrooks', 'P@$$word123', 'tbrooks');
if ($mysqli->connect_errno){
 echo "Failed Connection";
exit();
}
$query = "SELECT name FROM Users WHERE Name=$user";
if ($result = !$mysqli->query($query))
{
     if (count($result) == 0){
	$up = "INSERT INTO Users (Name) VALUES ('$user')";
	if ($mysqli->query($up)){
		echo nl2br("Your user was added\n");
	}
	else{
		echo "The user did not previously exist, but there was a problem adding them to the database.\r\n";
	}
      }
      else{
	echo "Your user already exists.";
      }
  
}
else
{
  echo nl2br("There was a problem\n");
}
$mysqli->close();
?>
