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
  
  echo "<form method='post' action='excel.php'>";
  echo "<input type='submit' name='export' value='CSV Export'";
  echo "</form>";

  if ($result->num_rows > 0) {
    echo "<center><p style='font-size:20px;'>Список абитуриентов, сдавших тест</p></center>";
    echo "<table style='margin:0 auto;'>";
    while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>ID:".$row["id"]."</td>";
      echo "<td>ИИН:".$row["iin"]."</td>";
      echo "<td>ФИО:".$row["full_name"]."</td>";
      echo "<td>Человек-Природа:".substr($row["result"],0,1)."</td>";
      echo "<td>Человек-Человек:".substr($row["result"],1,1)."</td>";
      echo "<td>Человек-художественный образ:".substr($row["result"],2,1)."</td>";
      echo "<td>Человек-знаковая система:".substr($row["result"],3,1)."</td>";
      echo "<td>Человек-техника:".substr($row["result"],4,1)."</td>";
      echo "<td>ИКТ:".$row["ikt"]."</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }