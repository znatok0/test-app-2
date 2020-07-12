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
    echo "<table>";
    echo"<tr><td>ИИН</td><td>Имя абитуриента</td><td>Email</td><td>Человека-Природа</td><td>Человек-Человек</td>";
    echo"<td>Человек-художественный образ</td><td>Человек-знаковая техника</td><td>Человек-техника</td>";
    while($row = $result->fetch_assoc($result)) {
        echo "<tr><td>".$sql["iin"]."</td>"." "."<td>".$sql["full_name"]." ".$sql["email"]." ".
        substr($sql["result"],0,1)." ".substr($sql["result"],1,1)." ".substr($sql["result"],2,1)." ".
        substr($sql["result"],3,1)." ".substr($sql["result"],4,1)."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }