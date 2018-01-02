  <?php
	require "libs/main_lib.php";
 	$data = $_POST;
 	if(isset($data['do_enter_yesbtn']))
 	{
 		unset($_SESSION['logged_user']);
 		AlertMSG('info', 'Вы успешно вышли!');
 		Redirect('index.php');
 	}
 	if(isset($data['do_enter_nobtn']))
 	{
 		Redirect('main.php');
 	}
 	
 	$_SESSION['id_page'] = 1;
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
 								<h3><span class="label label-default">Вы действительно хотите выйти?</span></h3>
 							</div>
 							<div class="col-md-9 col-md-offset-4">
 								 <div class="btn-group btn-group-lg">
 										 <div class="row">
 										 	<div class="col-md-2">
 										 		 <form method="POST" action="logout.php">
 										 			<button name="do_enter_yesbtn" type="submit" class="btn btn-default">Да</button>
 									  			</form>
 									  		</div>
 									  		 <div class="col-md-2 col-md-offset-7">
 									  		 	 <form method="POST" action="logout.php">
 									  				<button name="do_enter_nobtn"  type="submit" class="btn btn-default">Нет</button>
 												</form>
 											</div>
 										</div>
 						 		</div>		
 						 	</div>
 						</div>
 					</div>
 				</div>
 				<?php include "sidebar.php";?>
 			</div>
 		</div>
 	</body>
 </html>