<html>
<body>
<form action="ViewPostsBack.php" method="post" id="useForm">
<?php
$mysqli = new mysqli('mysql.eecs.ku.edu', 'tbrooks', 'P@$$word123', 'tbrooks');
if ($mysqli->connect_errno){
 echo "Failed Connection";
exit();
}
$query = "SELECT name FROM Users";
if ($result = $mysqli->query($query)){
   $resultArray = $result->fetch_all();
   echo "<select name='name' form='useForm'>";
   for($i=0; $i < count($resultArray); $i++){
                echo "<option value=".$resultArray[$i][0].">" .$resultArray[$i][0]." </option>";
        }
   echo "</select>";
}
else
{
   echo nl2br("There was a problem.\n");
}
?>
<input type="submit">
</form>
</body>
</html>
