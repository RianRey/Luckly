<?php
	require "db.php";
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
			$user = R::findOne('users', 'login = ?', array($data['login']));	
			if($user)
			{
				if($data['login'] == $user->login)
				{
					$_SESSION['logged_user'] = $user;
					 echo '<script>alert("Вы успешно авторизовались!");location.href="main.php"</script>';
				}
				else echo '<script>alert("Неверный пароль!");</script>';
			}
			else echo '<script>alert("Аккаунт не найден!");</script>';
		}
		else echo '<script>alert("' . array_shift($errors) . ' ");</script>';
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
			
			$user = R::findOne('users', 'login = ?', array($data['login']));
			if($user)
			{
				$post = R::dispense('posts');
				$post->userid = $user->id;
				$post->text = 'Тестовый пост';
				$post->date = date( "Y-m-d H:i:s" );
				R::store($post);
			}
			
			echo '<script>alert("Вы успешно зарегистрирвались!");</script>'; 	 
		}
		else echo '<script>alert("' . array_shift($errors) . ' ");</script>'; 		
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
			<input type="text" name="login" value="Логин" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
			<input type="password" name="pass" value="Пароль" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
			<button name="do_enter_signin" class="btn">Авторизация</button> <!-- End Btn -->
			<button name="do_enter_signup" id="btn2">Регистрация</button> <!-- End Btn2 -->  
		</div> <!-- End Box -->  
	</form>
	<p>Забыли пароль? <u style="color:#f1c40f;">Нажмите здесь!</u></p>
 
 </body>
</html>