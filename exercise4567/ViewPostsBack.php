<?php
$user = $_POST["name"];

$mysqli = new mysqli('mysql.eecs.ku.edu', 'tbrooks', 'P@$$word123', 'tbrooks');
if ($mysqli->connect_errno){
 echo "Failed Connection";
exit();
}
$query = "SELECT Content FROM Posts WHERE Author='$user'";
if ($result = $mysqli->query($query)){
   $resultArray = $result->fetch_all();
   echo "<table>";
   for($i=0; $i < count($resultArray); $i++){
                echo "<tr><th>$i " . $resultArray[$i][0] ." </th></tr>";
        }
   echo "</table>";
}
else
{
   echo nl2br("There was a problem.\n");
}
?>
