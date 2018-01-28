<!DOCTYPE html>
<html lang="ru">
   <head>
	<title>My first social network on Smarty</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="templates/css/materialize.css" media="screen,projection">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   	<div class="container">
   	<nav>
	   <div class="nav-wrapper">
		<a href="#" class="brand-logo">Logo</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
		   <li><a href="#" >Помощь</a></li>
		</ul>
	   </div>
	</nav>
	</div>
	<div class="container">
	   <form class="col s12">
		<div class="row">
		   <div class="col s12">
		   	<h6>Регистрация/Авторизация</h6>
			Введите логин и пароль:
			<div class="input-field inline">
			   <input id="email" type="email" class="validate">
			   <label for="emai" data-error="wrong" data-success="reght">Login</label>
			</div>
		   </div>
		</div>
	   </form>
	</div>
	<script type="text/javascript" src="templates/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="templates/js/materialize.js"></script>
   </body>
</html>
