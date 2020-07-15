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
    echo "<p>Список абитуриентов, сдавших тест</p>";
    while($row = $result->fetch_assoc()) {
        echo "<p>ИИН:".$row["iin"]." "."ФИО:".$row["full_name"]." "."Человека-Природа:".substr($row["result"],0,1)." ".
        "Человек-Человек:".substr($row["result"],1,1)." "."Человек-художественный образ:".substr($row["result"],2,1)." ".
        "Человек-знаковая техника:".substr($row["result"],3,1)." "."Человек-техника:".substr($row["result"],4,1);
    }
  } else {
    echo "0 results";
  }