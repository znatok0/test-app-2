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
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Дифференциально-диагностический опросник</title>
        <meta charset="utf=8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script type="text/javascript" src="main.js"></script>
    </head>
    <body>    
        <form method='post' action='excel.php'>
            <input type='submit' name='export' value='CSV Export'>
        </form>
        <table>
        <?php
            // if ($result->num_rows > 0) {
            //     echo "<center><p style='font-size:20px;'>Список абитуриентов, сдавших тест</p></center>";
            //     echo "<table style='margin:0 auto;'>";
            //     while($row = $result->fetch_assoc()){
            //     echo "<tr>";
            //     echo "<td>ID:".$row["id"]."</td>";
            //     echo "<td>ИИН:".$row["iin"]."</td>";
            //     echo "<td>ФИО:".$row["full_name"]."</td>";
            //     echo "<td>Человек-Природа:".substr($row["result"],0,1)."</td>";
            //     echo "<td>Человек-Человек:".substr($row["result"],1,1)."</td>";
            //     echo "<td>Человек-художественный образ:".substr($row["result"],2,1)."</td>";
            //     echo "<td>Человек-знаковая система:".substr($row["result"],3,1)."</td>";
            //     echo "<td>Человек-техника:".substr($row["result"],4,1)."</td>";
            //     echo "<td>ИКТ:".$row["ikt"]."</td>";
            //     echo "</tr>";
            //     }
            //     echo "</table>";
            // } else {
            //     echo "0 results";
            // }
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["iin"]; ?></td>
            <td><?php echo $row["full_name"]; ?></td>
            <td><?php echo substr($row["result"],0,1); ?></td>
            <td><?php echo substr($row["result"],1,1); ?></td>
            <td><?php echo substr($row["result"],2,1); ?></td>
            <td><?php echo substr($row["result"],3,1); ?></td>
            <td><?php echo substr($row["result"],4,1); ?></td>
            <td><?php echo $row["ikt"]; ?></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>
