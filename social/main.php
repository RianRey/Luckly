<?php
	require "libs/main_lib.php";
 	$data = $_POST;
 	$_SESSION['id_page'] = 0;
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
 		<?php include "header.php"; ?>
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8">
 					<div class="contentbox">
 						<div class="row">
 							<div class="col-md-6 col-md-offset-3">
 								<h3><span class="label label-default">Добро пожаловать на сайт MySocial</span></h3>
 							</div>
 						</div>
 						 <p>Добро пожаловать на сайт социальной сети MySocial, от маленькой команды разработчиков, состоящей всего из двух человек.Я желаю вам приятного времяпровождения в этой социальной сети, желаю найти новых друзей, обрести новые увлечения, получить новые навыки.Социальная сеть всё ещё находится в стадии активной разработки. Текущая версия - 0.01 Alpha. Если вы видите это сообщение, то вы либо alpha тестер, либо разработчик, либо плохой человек, а вот теперь задумайтесь.</p>
 					</div>
 					
 					 <div class="contentbox">
 						<div class="row">
 							<div class="col-md-6 col-md-offset-3">
 								<h3><span class="label label-default">Добро пожаловать на сайт MySocial</span></h3>
 							</div>
 						</div>
 						 <p>Добро пожаловать на сайт социальной сети MySocial, от маленькой команды разработчиков, состоящей всего из двух человек.Я желаю вам приятного времяпровождения в этой социальной сети, желаю найти новых друзей, обрести новые увлечения, получить новые навыки.Социальная сеть всё ещё находится в стадии активной разработки. Текущая версия - 0.01 Alpha. Если вы видите это сообщение, то вы либо alpha тестер, либо разработчик, либо плохой человек, а вот теперь задумайтесь.</p>
 					</div>
 				</div>
 				<?php include "sidebar.php";?>
 			</div>
 		</div>
 	</body>
 </html>