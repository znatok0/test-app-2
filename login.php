<?php include('server.php') ?>
<html>
<head>
  <title>Вход в систему</title>
        <meta charset="utf=8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script type="text/javascript" src="main.js"></script>
</head>
<body>	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<center><h2 style="margin-top:10%;">Вход в систему</h2></center>
  	<div class="input-group" style="margin:0 auto;">
  		<label>Имя пользователя</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group" style="margin:0 auto;">
  		<label>Пароль</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group" style="margin:0 auto;">
  		<button type="submit" class="btn" name="login_user">Войти</button>
  	</div>
  </form>
</body>
</html>