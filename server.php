<?php 
session_start();

    $full_name = "";
    $email = "";
    $iin = "";
    $result = "";
    $errors = array();

$db = mysqli_connect("srv-pleskdb25.ps.kz:3306", "kaznumil_root", "Chesscom123!", "kaznumil_localdb");

if(isset($_POST['insert_result'])) {

    $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $iin = mysqli_real_escape_string($db, $_POST['iin']);
    $result = '5432';

    if (empty($full_name)) { array_push($errors, "Заполните, пожалуйста, имя!"); }
    if (empty($email)) { array_push($errors, "Заполните, пожалуйста, адрес электронной почты!"); }
    if (empty($iin)) { array_push($errors, "Заполните, пожалуйста, ИИН!"); }

    $input_check_query = "SELECT * FROM result WHERE email='$email' OR iin='$iin' LIMIT 1";
    $finish = mysqli_query($db, $input_check_query);
    $res = mysqli_fetch_assoc($finish);
    if ($res) { // if user exists
        if ($res['email'] === $email) {
          array_push($errors, "Абитуриент с таким адресом электронной почты уже сдал тест!");
        }
        if ($res['iin'] === $iin) {
          array_push($errors, "Абитуриент с таким ИИН уже сдал тетс!");
        }
    }

    if (count($errors) == 0) {  
        $query = "INSERT INTO results (full_name, email, iin, result) 
                  VALUES('$full_name', '$email', '$iin', '$result')";
        mysqli_query($db, $query);
        $_SESSION['full_name'] = $full_name;
        $_SESSION['success'] = "Вы успешно сдали тест!";
        header('location: index.php');
    }

}