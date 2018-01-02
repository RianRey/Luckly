<div id="sidebar" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
	<ul class="nav nav-pills nav-stacked">
		<?php if($_SESSION['id_page'] == 0) {?><li class="active"><a href="main.php">Новости проекта</a></li> <?php } else {?>
		 <li><a href="main.php">Новости проекта</a></li> <?php }?>
		 <?php if($_SESSION['id_page'] == 2 && $_GET['id'] == $_SESSION['logged_user']->id) {?>
		<li class="active">
			<a href=<?php echo "stats.php?id=",$_SESSION['logged_user']->id;?> >Моя страница</a> 
		</li>
		 <?php } else {?>
		 	 <li><a href=<?php echo "stats.php?id=",$_SESSION['logged_user']->id;?> >Моя страница</a> </li><?php }?>
		<?php if($_SESSION['id_page'] == 3) {?><li class="active"><a href="settings.php">Настройки</a></li> <?php } else {?>
		 <li><a href="settings.php">Настройки</a></li> <?php }?>
		 <?php if($_SESSION['logged_user']->admin > 0) {?><li><a href="admin.php">Админ панель</a></li> <?php }?>
		<?php if($_SESSION['id_page'] == 1) {?><li class="active"><a href="logout.php">Выйти</a></li> <?php } else {?>
		 <li><a href="logout.php">Выйти</a></li> <?php }?>
	</ul>
</div>