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
    $hn = $ht = $hh = $hs = $ha = 0;
    $results_array = array();
    $one = $_POST['1'];
    $two = $_POST['2'];
    $three = $_POST['3'];
    $four = $_POST['4'];
    $five = $_POST['5'];
    $six = $_POST['6'];
    $seven = $_POST['7'];
    $eight = $_POST['8'];
    $nine = $_POST['9'];
    $ten = $_POST['10'];
    $eleven = $_POST['11'];
    $twelve = $_POST['12'];
    $thirteen = $_POST['13'];
    $fourteen  = $_POST['14'];
    $fifteen = $_POST['15'];
    $sixteen = $_POST['16'];
    $seventeen = $_POST['17'];
    $eighteen = $_POST['18'];
    $nineteen = $_POST['19'];
    $twenty = $_POST['20'];
    if($one == "1a"){
        $hh++;
    } else{
        $ht++;
    }
    if($two == "2a"){
        $hh++;
    } else{
        $hs++;
    }
    if($three == "3a"){
        $ha++;
    } else{
        $hn++;
    }
    if($four == "4a"){
        $ht++;
    } else{
        $hh++;
    }
    if($five == "5a"){
        $hs++;
    } else{
        $ha++;
    }
    if($six == "6a"){
        $hn++;
    } else{
        $hh++;
    }
    if($seven == "7a"){
        $ha++;
    } else{
        $ht++;
    }
    if($eight == "8a"){
        $hh++;
    } else{
        $ha++;
    }
    if($nine == "9a"){
        $ht++;
    } else{
        $hs++;
    }
    if($ten == "10a"){
        $hn++;
    } else{
        $hs++;
    }
    if($eleven == "11a"){
        $hn++;
    } else{
        $ht++;
    }
    if($twelve == "12a"){
        $hh++;
    } else{
        $hs++;
    }
    if($thirteen == "13a"){
        $ha++;
    } else{
        $hn++;
    }
    if($fourteen == "14a"){
        $ht++;
    } else{
        $hh++;
    }
    if($fifteen == "15a"){
        $hs++;
    } else{
        $ha++;
    }
    if($sixteen == "16a"){
        $hn++;
    }
    else{
        $hh++;
    }
    if($seventeen == "17a"){
        $ha++;
    } else{
        $ht++;
    }
    if($eighteen == "18a"){
        $hh++;
    } else{
        $ha++;
    }
    if($nineteen == "19a"){
        $ht++;
    } else{
        $hs++;
    }
    if($twenty == "20a"){
        $hn++;
    } else{
        $hs++;
    }
    array_push($results_array, $hn, $hh, $ha, $hs, $ht);
     
    $result = implode($results_array);

    if (empty($full_name)) { array_push($errors, "Заполните, пожалуйста, имя!"); }
    if (empty($email)) { array_push($errors, "Заполните, пожалуйста, адрес электронной почты!"); }
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Неверный формат электронной почты!";
    }
    if (empty($iin)) { array_push($errors, "Заполните, пожалуйста, ИИН!"); }
    if(($hn+$hh+$ha+$hs+$ht)!=20){ array_push($errors, "Вы не ответили на все вопросы!"); }

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
        $query = "INSERT INTO result (full_name, email, iin, result) 
        VALUES('$full_name', '$email', '$iin', '$result')";
        mysqli_query($db, $query);
        $_SESSION['full_name'] = $full_name;
        $_SESSION['success'] = "Вы успешно сдали тест!";
        header('location: index.php');
    }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Введите имя пользователя!");
  }
  if (empty($password)) {
  	array_push($errors, "Введите пароль!");
  }
  
  if (count($errors) == 0) {
  	// $password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
        $_SESSION['success'] = "Вы успешно вошли в систему!";
  	  header('location: analytics.php');
  	}else {
  		array_push($errors, "Логин или пароль введены неправильно!");
  	}
  }
}