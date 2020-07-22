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
    while($row = $result->fetch_assoc()){
        $data = [
            ["ФИО"=>$row["full_name"], "Адрес эл. почты"=>$row["email"], "ИИН"=>$row["iin"], "ИКТ"=>$row["ikt"]]
        ];
    }
}