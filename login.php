<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
<title>Добро детям |  Войти</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
$servername = "a372193.ftp.mchost.ru";
$username = "a372193_1";
$password = "1Z9b7gve94k3";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<!-- Header Starts Here -->
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.php"><h1>Добро пожаловать</h1></a>
		</div>
		<span class="menu"></span>
		<script>
			$( "span.menu" ).click(function() {
			  $( ".navigation" ).slideToggle( "slow", function() {
			    // Animation complete.
			  });
			});
		</script>
		<div class="cleary"></div>
		<div class="navigation">
			<ul class="navig">
				<li><a href="index.php" >Главная</a></li>
				<li><a href="brands.html">Партнеры</a></li>
				<li><a href="men.html">Галерея мероприятий</a></li>
				<li><a href="contact.html">О нас</a></li>
				<li><a href="register.html">Регистрация</a></li>
				<li><a href="login.php" class="active">Войти</a></li>
			</ul>
		</div>
		<div class="search-bar">
			<p>Вы вошли как: </p>

		<div class="clearfix"></div>
	</div>
</div>
<!-- Header Part Starts Here -->
<!-- Register Part Starts Here -->
<div class="container">
	<div class="register">
		<ul class="path">
			<li><a href="index.php">Главная</a>&nbsp; ></li>
			<li><a href="contact.html">О нас</a>&nbsp; ></li>
			<li class="actev">Войти&nbsp;</li>
		</ul>
			<h3 class="page-hed">Войти</h3>
  	  	<form> 
		<div class="register-top-grid">
			<form method="post" action="login.php">
  				<?php include('errors.php'); ?>
  				<div class="input-group">
  					<label for="login" class="uname" data-icon="u" > логин </label>
  					<input type="text" name="username" >
  				</div>
  				<div class="input-group">
  					<label for="pass" class="youpasswd" data-icon="p"> Пароль </label>
  					<input type="password" name="password">
  				</div>
  				<div class="input-group">
  					<button type="submit" class="btn" name="login_user">Login</button>
  				</div>
  				<p>
  					Not yet a member? <a href="register.php">Sign up</a>
  				</p>
  			</form>
		</div>
	</div>
</div>
<!-- Register Part Ends Here -->
<!-- Footer Starts Here -->
<div class="container">
<div class="footer">
	<div class="logo">
		<a href="#"><h1>Связь с нами</h1></a>
	</div>
	<p class="copyright">89152009955 или <a href="https://vk.com/kelll31">ВААМ</a></p>
	<ul class="social">
		<li><a href="https://telegram.org/"><i class="fa"></a	></i></li> 
		<li><a href="https://www.instagram.com/xlebyslliek/"><i class="fb"></a></i></li>	
		<li><a href="https://vk.com/kelll31"><i class="fc"></a></i></li>
		
	</ul>
	<div class="clearfix"></div>
</div>
</div>
<!-- Footer Ends Here -->
</body>
</html>