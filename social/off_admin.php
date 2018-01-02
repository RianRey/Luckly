<?php 
	require "db.php";
	$data = $_POST;
	$_SESSION['searched_post'] = 0;
	if(isset($data["do_delete_post_btn"]))
	{
		$errors = array();
		if(trim($data["deleted_id"]) == '')
			$errors[] = 'Введите ID поста!';
		if(empty($errors))
		{
			$postid = R::findOne('posts', 'id = ?', array($data['deleted_id']));
			if($postid)
			{
				R::trash($postid);
				echo '<script>alert("Пост № ' .  $data['deleted_id'] . ' успешно удалён"); </script>';
			}
		} else '<script>alert("' . array_shift($errors) . '"); </script>';
	}
	if(isset($data['do_search_post_btn']))
	{
		$errors = array();
		if(trim($data['search_post_id']) == '')
			$errors[] = 'Введите ID поста!';
		if(empty($errors))
		{
			$post = R::findOne('posts', 'id = ?', array($data['search_post_id']));
			if($post)
			{
				$_SESSION['search_post'] = $post;
				$_SESSION['searched_post'] = 1; 
				OpenModal();
			}
			else echo '<script>alert("Пост не найден!"); </script>';
		} else '<script>alert("' . array_shift($errors) . '"); </script>';
	}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>AdminPanel</title>
	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="c1">
				<div class="controls">
					<nav class="links">
						<ul>
							<li><a href="#" class="ico1">Messages <span class="num">26</span></a></li>
							<li><a href="#" class="ico2">Alerts <span class="num">5</span></a></li>
							<li><a href="#" class="ico3">Documents <span class="num">3</span></a></li>
						</ul>
					</nav>
					<div class="profile-box">
						<span class="profile">
							<a href="#" class="section">
								<img class="image" src="images/img1.png" alt="image description" width="26" height="26" />
								<span class="text-box">
									Welcome
									<strong class="name">Asif Aleem</strong>
								</span>
							</a>
							<a href="#" class="opener">opener</a>
						</span>
						<a href="main.php" class="btn-on">On</a>
					</div>
				</div>
				<div class="tabs">
					<div id="tab-1" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-2" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-3" class="tab">
						<article>
							<div class="text-section">
								<h1>Посты</h1>
								<p>Здесь все посты добавленные пользователями.</p>
								 
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						<article>
					</div>
					<div id="tab-4" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-5" class="tab">
						<article>
							<div class="text-section">
								<h1>Архив</h1>
								<p>Все сохранённые администраторами записи здесь!</p>
								
							</div>
						</article>
					</div>
					<div id="tab-6" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-7" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-8" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
				</div>
			</div>
		</div>
		<aside id="sidebar">
			<strong class="logo"><a href="#">lg</a></strong>
			<ul class="tabset buttons">
				<li class="active">
					<a href="#tab-1" class="ico1"><span>Консоль</span><em></em></a>
					<span class="tooltip"><span>Консоль</span></span>
				</li>
				<li>
					<a href="#tab-2" class="ico2"><span>Галерея</span><em></em></a>
					<span class="tooltip"><span>Галерея</span></span>
				</li>
				<li>
					<a href="#tab-3" class="ico3"><span>Посты</span><em></em></a>
					<span class="tooltip"><span>Посты</span></span>
				</li>
				<li>
					<a href="#tab-4" class="ico4"><span>Сообщения</span><em></em></a>
					<span class="tooltip"><span>Сообщения</span></span>
				</li>
				<li>
					<a href="#tab-5" class="ico5"><span>Архив</span><em></em></a>
					<span class="tooltip"><span>Архив</span></span>
				</li>
				<li>
					<a href="#tab-6" class="ico6">
						<span>Комментарии</span><em></em>
					</a>
					<span class="num">11</span>
					<span class="tooltip"><span>Коммантарии</span></span>
				</li>
				<li>
					<a href="#tab-7" class="ico7"><span>Плагины</span><em></em></a>
					<span class="tooltip"><span>Плагины</span></span>
				</li>
				<li>
					<a href="#tab-8" class="ico8"><span>Настройки</span><em></em></a>
					<span class="tooltip"><span>Настройки</span></span>
				</li>
			</ul>
			<span class="shadow"></span>
		</aside>
	</div>
</body>
</html>