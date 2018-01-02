<?php
	include "libs/main_lib.php";
	$data = $_POST;
	if(isset($data['do_enter_signin'])) //авторизация
	{
		$errors = array();
		if(trim($data['login']) == '')
			$errors[] = 'Введите логин!';
		if(trim($data['pass'] == ''))
			$errors[] = 'Введите пароль!';
		
		if(empty($errors))
		{
			$user = Load_Account('login', $data['login']);	
			if($user != false)
			{
				if($data['login'] == $user->login)
				{
					$_SESSION['logged_user'] = $user;
					 AlertMSG('info', 'Вы успешно авторизовались!');
					 Redirect('main.php');
				}
				else AlertMSG('error', 'Неверный пароль!');
			}
			else AlertMSG('error', 'Аккаунт не найден!');
		}
		else AlertMSG('error', array_shift($errors) );
	}
	if(isset($data['do_enter_signup']))
	{
		 $errors = array();
		if(trim($data['login']) == '')
			$errors[] = 'Введите логин!';
		if(trim($data['pass'] == ''))
			$errors[] = 'Введите пароль!';
		 if( R::count('users', "login = ?", array( $data['login'] )) > 0)
      		$errors[] = 'Пользователь с таким  логином уже существует!';
	
		if(empty($errors))
		{
			$user = R::dispense( 'users' );			
			$user->login = $data['login'];
			$user->password = $data['pass'];
			$user->admin = 0;
			$user->status = 'Это ваш тестовый статус.  Его вы можете изменить в настройках';
			R::store($user);
			
			$user = Load_Account('login', $data['login']);
			if($user != false)
			{
				$post = R::dispense('posts');
				$post->userid = $user->id;
				$post->text = 'Тестовый пост';
				$post->date = date( "Y-m-d H:i:s" );
				R::store($post);
			}
			
			 AlertMSG('info', 'Вы успешно зарегистрировались!');
		}
		else AlertMSG('error', array_shift($errors) ); 		
	}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MySocial</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<form method="post" action="index.php">
		<div class="box">
			<h1>Вход</h1>
			<input type="text" require  name="login" placeholder="Логин" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
			<input type="password" require  name="pass" placeholder="Пароль" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
			<button name="do_enter_signin" class="btn">Авторизация</button> <!-- End Btn -->
			<button name="do_enter_signup" id="btn2">Регистрация</button> <!-- End Btn2 -->  
		</div> <!-- End Box -->  
	</form>
	<p>Забыли пароль? <u style="color:#f1c40f;">Нажмите здесь!</u></p>
 
 </body>
</html>