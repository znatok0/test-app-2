<?php 
$servername = "srv-pleskdb25.ps.kz:3306";
$username = "kaznumil_root";
$password = "Chesscom123!";
$dbname = "kaznumil_localdb";

$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM result";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["full_name"]. " " . $row["email"]." ".$row["iin"]." ".$row["result"]. "<br>";
    }
  } else {
    echo "0 results";
  }