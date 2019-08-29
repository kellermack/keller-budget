<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "budget";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli($servername, $username, $password, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT SUM(amount) AS value_sum FROM housebudget";
$result = $mysqli->query($sql);

if ( $result->num_rows >0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Total Spent in 2019 is : " . $row["value_sum"];
    }
} else {
    echo "0 results";
}





