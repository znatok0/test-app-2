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
    $one = rand(0,6);
    $two = rand(0,6);
    $three = rand(0,6);
    $four = rand(0,6);
    $five = rand(0,6);
    $result = $one.$two.$three.$four.$five;

    if (empty($full_name)) { array_push($errors, "Заполните, пожалуйста, имя!"); }
    if (empty($email)) { array_push($errors, "Заполните, пожалуйста, адрес электронной почты!"); }
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Неверный формат электронной почты!";
    }
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