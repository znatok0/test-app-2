<?php 
import('server.php');
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
  
  echo "<div><a href='javascript:void(0)' id='export-to-excel'>Export to excel</a></div>";
  echo "<form action='".$_SERVER['PHP_SELF']."' method='post' id='export-form'>";
  echo "<input type='hidden' value='' id='hidden-type' name='ExportType'/>";
  echo "</form>";

  if ($result->num_rows > 0) {
    echo "<center><p style='font-size:20px;'>Список абитуриентов, сдавших тест</p></center>";
    echo "<table style='margin:0 auto;'>";
    while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>ID:".$row["id"]."</td>";
      echo "<td>ИИН:".$row["iin"]."</td>";
      echo "<td>ФИО:".$row["full_name"]."</td>";
      echo "<td>Человека-Природа:".substr($row["result"],0,1)."</td>";
      echo "<td>Человека-Человек:".substr($row["result"],1,1)."</td>";
      echo "<td>Человека-художественный образ:".substr($row["result"],2,1)."</td>";
      echo "<td>Человека-знаковая техника:".substr($row["result"],3,1)."</td>";
      echo "<td>Человека-техника:".substr($row["result"],4,1)."</td>";
      echo "<td>ИКТ:".$row["ikt"]."</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  echo "
    <script  type='text/javascript'>
      $(document).ready(function() {
      jQuery('#Export to excel').bind('click', function() {
      var target = $(this).attr('id');
      switch(target) {
        case 'export-to-excel' :
        $('#hidden-type').val(target);
        //alert($('#hidden-type').val());
        $('#export-form').submit();
        $('#hidden-type').val('');
        break
      }
      });
          });
    </script>
  ";