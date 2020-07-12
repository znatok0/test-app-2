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
    // echo "<table>";
    // echo"<tr><td>ИИН</td><td>Имя абитуриента</td><td>Email</td><td>Человека-Природа</td><td>Человек-Человек</td>";
    // echo"<td>Человек-художественный образ</td><td>Человек-знаковая техника</td><td>Человек-техника</td></tr>";
    // while($row = $result->fetch_assoc()) {
    //     echo "<tr><td>".$row["iin"]."</td>"." "."<td>".$row["full_name"]." ".$row["email"]." ".
    //     substr($row["result"],0,1)." ".substr($row["result"],1,1)." ".substr($row["result"],2,1)." ".
    //     substr($row["result"],3,1)." ".substr($row["result"],4,1)."</td></tr>";
    // }
    // echo "</table>";
    echo "<p>Список абитуриентов, сдавших тест</p>";
    while($row = $result->fetch_assoc()) {
        echo "<p>ИИН:".$row["iin"]." "."ФИО:".$row["full_name"]." "."Человека-Природа:".substr($row["result"],0,1)." ".
        "Человек-Человек:".substr($row["result"],1,1)." "."Человек-художественный образ".substr($row["result"],2,1)." ".
        "Человек-знаковая техника:".substr($row["result"],3,1)." "."Человек-техника:".substr($row["result"],4,1);
    }
  } else {
    echo "0 results";
  }