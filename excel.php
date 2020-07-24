<?php 
    die('hello!');

if(isset($_POST["excel"])){
    $servername = "srv-pleskdb25.ps.kz:3306";
    $username = "kaznumil_root";
    $password = "Chesscom123!";
    $dbname = "kaznumil_localdb";

    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen('php://output','w');
    fputcsv($output, array("ФИО", "Адрес эл. почты", "ИИН", "ИКТ"));
    $query = "SELECT * FROM result ORDER BY id";
    $result = $connection->query($query);
    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $data = [
            ["ФИО"=>$row["full_name"], "Адрес эл. почты"=>$row["email"], "ИИН"=>$row["iin"], "ИКТ"=>$row["ikt"]]
        ];
    }
}