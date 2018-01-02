<?php
	require "libs/main_lib.php";
 	$data = $_POST;
	$acc = $_GET;
	$monthes = array(
		1 => 'Января', 2 => 'Декабря', 3 => 'Марта', 4 => 'Апреля',
		5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
		9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря' 
	);
	$user = Load_Account('id', $_GET['id']);
 	if($user != false)
 	{
 		$nameaccount = $user->login;
 		$userstatus = $user->status;
 	}
 	else
 	{
 		AlertMSG('error', 'Страница не найдена!');
 		Redirect('main.php');
 	}
 	 $_SESSION['id_page'] = 2;
 	if(isset($data['do_send_btn']))
 	{
 		$errors = array();
 		if(trim($data['textpost']) == '')
 			$errors[] = 'Введите текст поста!';
 		
 		if(empty($errors))
 		{
			$post = R::dispense( 'posts' );
			$post->userid = $_GET['id'];
			$post->text = $data['textpost'];
			setlocale(LC_ALL, 'ru_RU.UTF-8');
			$post->date = (date('d ') . $monthes[(date('n'))] . date(' Y, H:i'));
			R::store($post); 		
 		}
 		else AlertMSG('error', array_shift($errors));
 			
 	}
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<title>MySocial</title>
 		<meta cherset="utf-8">
 		<link rel="stylesheet" href="css/bootstrap.min.css">
 		<link rel="stylesheet" href="css/stylemain.css">
 		<script src="js/bootstrap.min.js"></script>
 	</head>
 	<body>
 		<?php include "header.php";?>
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8">
 					<div id="contentbox">
 						<div class="row">
 							<div class="col-md-6 col-md-offset-3">
 								<h3><span><?php echo $nameaccount;?></span></h3>
 							</div>
 						</div>
 						<div><span><?php echo $userstatus;?></span></div>
 						<br>
 						<div class="container">
 							<div class="btn-group-vertical">
 								<?php
 									if($acc['id'] == $_SESSION['logged_user']->id)
 									{?>
 									<button type="submit" class="btn btn-default">Настройки</button>
 								
 								<?php }?>
 								 <?php
 									if($acc['id'] != $_SESSION['logged_user']->id)
 									{?>
 									<button type="submit" class="btn btn-default">Написать сообщение</button>
									 								
 								<?php }?>
 							</div>
 							<br>
 							<br>
 							<div class="container">
 								<div class="row">
 									<div class="col-xs-4 col-md-4 col-xs-offset-1 col-md-offset-1 input-group">
 										<?php if($_GET['id'] == $_SESSION['logged_user']->id ) {?>
 										<form method="POST" action=<?php echo 'stats.php?id=', $_GET['id'];?>>
 											<input name="textpost" type="text" class="form-control" placeholder="Что нового?">
 											<span class="input-group-btn">
 												<button name="do_send_btn" class="btn btn-default" type="submit">Отправить</button>
 											</span>
 										</form>
 										<?php }?>
 									</div>
 								</div>
 								<br>
 								<div class="row">
 									<div class="col-sm-8 col-md-6">
 										<div class="panel panel-success">
 											<div class="panel-body">
 												Текст поста
 											</div>
 											 <div class="panel-footer">
 											 	Название поста
 											 </div>
 										</div>
 									</div>
 								</div>
 								<?php 
 									$posts = R::findAll('posts', 'userid = ?', array($_GET['id']));
 									foreach($posts as $key => $post)
 									{
 										?>
 										 <div class="row">
 											<div class="col-sm-8 col-md-6">
 												<div class="panel panel-success">
 													<div class="panel-body">
 														<?php echo $post->text;?>
 													</div>
 											 		<div class="panel-footer">
 											 			<?php echo $post->date;?>
 											 		</div>
 												</div>
 											</div>
 										</div>
 									<?php }?>
 							</div>
 						</div>
 					</div>
 				</div>
 				<?php include "sidebar.php";?>
 			</div>
 		</div>
 	</body>
 </html>