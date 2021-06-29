<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db1";
$conn = new mysqli ($servername, $username, $password, $dbname);
$sql = "SELECT degree FROM ARM";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["degree"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>