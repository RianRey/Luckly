<nav class="navbar navbar-default navbar-static-top" role="navigation">
 			<div class="container-fluid">
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
 						<span class="sr-only">Toggle navigation</span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span> 
 						<span class="icon-bar"></span>
 					</button>
 					<a class="navbar-brand" href="main.php">
 					<?php
 						$set = parse_ini_file('settings.ini');
 						echo $set['name'];
 					?>
 					</a>
 				</div>
 				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 					<ul class="nav navbar-nav navbar-right">
 						<li>
 							<a href="#" class="navbar-text"><?php echo $_SESSION['logged_user']->login?></a>
 						</li>
 					</ul>
 				</div>
 			</div>
 		</nav>