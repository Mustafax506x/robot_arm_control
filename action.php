<?php
$id = 1;
$degree1     = $_POST["Range1"];
$degree2     = $_POST["Range2"];
$degree3     = $_POST["Range3"];
$degree4     = $_POST["Range4"];
$degree5     = $_POST["Range5"];
$status = $_POST["status"];
$degree      = array ($degree1, $degree2, $degree3, $degree4, $degree5);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db1";
for($i = 0; $i < 5 ; $i++){
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `arm` SET `degree`='$degree[$i]',`status`='$status' WHERE id = $id";
if ($conn -> query($sql) === true){
}    else{
        echo"Error: ". $sql . "<br>" . $conn->error;
    }
$conn->close();
$id++;
}
echo "Submit seccess <br><br> The new instructions are:<br> 
<br>Engine1 :  $degree1&#176
<br>Engine2 :  $degree2&#176
<br>Engine3 :  $degree3&#176
<br>Engine4 :  $degree4&#176
<br>Engine5 :  $degree5&#176"
?>
<div id="center_button"><button onclick="location.href='index.html'">Back to Home</button></div>
