  <?php
	require "libs/main_lib.php";
 	$data = $_POST;
 	if(isset($data['do_send_status_btn']))
 	{
 		$errors = array();
 		if(trim($data['textstatus']) == '')
 			$errors[] = 'Введите текст статуса!';
 		
 		if(empty($errors))
 		{
 			$user = Load_Account('id', $_SESSION['logged_user']->id );
 			if($user != false)
 			{
 				$user->status = $data['textstatus'];
 				R::store($user);
 				AlertMSG('info', 'Вы успешно сменили статус!');
 			} else AlertMSG('error', 'Техническая ошибка! Обратитесь к разработчикам!', '#0001');
 		} else AlertMSG('error', array_shift($errors));
 	}
 	$_SESSION['id_page'] = 3;
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<title>My Social App</title>
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
 							<div class="col-md-9 col-md-offset-3">
 								<h3><span class="label label-default">Настройки</span></h3>
 							</div>
 							 <div class="col-xs-4 col-md-4 col-xs-offset-1 col-md-offset-1 input-group">
 										<p>1) Изменение статуса:</p>
 										<form method="POST" action="settings.php">
 											<input name="textstatus" type="text" class="form-control" placeholder="Статус:">
 											<span class="input-group-btn">
 												<button name="do_send_status_btn" class="btn btn-default" type="submit">Отправить</button>
 											</span>
 										</form>
 							</div>
 						</div>
 					</div>
 				</div>
 				<?php include "sidebar.php";?>
 			</div>
 		</div>
 	</body>
 </html>