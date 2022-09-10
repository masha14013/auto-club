<!DOCTYPE html>
<html class="no-js" lang="ru">
	<head>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 		<meta charset="utf-8">
		<title>AUTO Club</title>
		<link rel="stylesheet" href="css/BMG-club.css">
		
		<!-- http://webseotips.com/responsive-image-gallery-bootstrap-4/ -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body id="home">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
			<div class="container">
				<i class="fa fa-car fa-3x" aria-hidden="true"></i>
				<a href="BMG-club.php" class="navbar-brand branding"><p>AUTO club</p></a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">Регистрация</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Вход</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<header id="home-section">
			<div class="dark-overlay">
				<div class="home-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 d-none d-lg-block">
								<h1 class="display-4">Добро пожаловать в <strong>клуб</strong>!</h1>
								<div class="d-flex flex-row">
									<div class="p-4 align-self-start">
										<i class="fa fa-check"></i>
									</div>
									<div class="p-4 align-self-end">
										Получайте скидку в нашем автосервисе
									</div>
								</div>
								<div class="d-flex flex-row">
									<div class="p-4 align-self-start">
										<i class="fa fa-check"></i>
									</div>
									<div class="p-4 align-self-end">
										Поучаствуйте в наших ралли по городам России
									</div>
								</div>
								<div class="d-flex flex-row">
									<div class="p-4 align-self-start">
										<i class="fa fa-check"></i>
									</div>
									<div class="p-4 align-self-end">
										Пройдите тренировку в картинге с профессионалами
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card bg-primary text-center card-form">
									<div class="card-body">
										<h3>Регистрация</h3>
										<p>Чтобы стать участником АВТО клуба, пожалуйста, заполните следующую форму регистрации</p>
										<form action="BMG-register.php" method="post">
											<div class="form-group">
												<input type="text" id="formlogin" name="formlogin" class="form-control form-control-lg" placeholder="Логин">
											</div>
											<div class="form-group">
												<input type="email" id="formemail" name="formemail" class="form-control form-control-lg" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="password" id="formpassword" name="formpassword" class="form-control form-control-lg" placeholder="Пароль">
											</div>
											<div class="form-group">
												<input type="password" id="formpasswordconf" name="formpasswordconf" class="form-control form-control-lg" placeholder="Подтверждение пароля">
											</div>
											<input type="submit" value="Отправить" class="btn btn-outline-light btn-block">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<section id="explore-head-section">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="p-5">
							<h1 class="display-4">Узнать больше</h1>
							<p class="lead">АВТО клуб - ваш помощник в поиске выгодных цен на товары и услуги. 
								Наши пользователи получают скидки, кэшбэк и спецпредложения. 
								В АВТО клубе вы получаете скидки там, где даже не подозревали о их существовании! 
								Корпорация «Aunite Group» создана для того, чтобы изменить вашу жизнь к лучшему. 
								Больше 1 540 000 пользователей уже сделали свой выбор — присоединяйтесь! </p>
							<a href="#" class="btn btn-danger">Акции</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="explore-section" class="bg-light text-muted py-5">
			<div class="container">
				<div class="container gallery-container">
					<div class="tz-gallery">
						<div class="row mb-3">
							<div class="col-md-4">
								<div class="card">
									<a class="lightbox" href="img/a01.jpg">
										<img src="img/a01.jpg" alt="" class="card-img-top">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<a class="lightbox" href="img/auto-club04.jpg">
										<img src="img/auto-club04.jpg" alt="" class="card-img-top">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<a class="lightbox" href="img/create-section1.jpg">
										<img src="img/create-section1.jpg" alt="" class="card-img-top">
									</a>
								</div>
							</div>
						</div>
						<div class="row"> 
							<div class="col-md-4">
								<div class="card">
									<a class="lightbox" href="img/explore-section1.jpg">
										<img src="img/explore-section1.jpg" alt="" class="card-img-top">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<a class="lightbox" href="img/a02.jpg">
										<img src="img/a02.jpg" alt="" class="card-img-top">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<a class="lightbox" href="img/a03.jpg">
										<img src="img/a03.jpg" alt="" class="card-img-top">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="create-head-section" class="bg-primary">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="p-5">
							<h1 class="display-4">Узнать больше</h1>
							<p class="lead">АВТО клуб - ваш помощник в поиске выгодных цен на товары и услуги. 
								Наши пользователи получают скидки, кэшбэк и спецпредложения. 
								В АВТО клубе вы получаете скидки там, где даже не подозревали о их существовании! 
								Корпорация «Aunite Group» создана для того, чтобы изменить вашу жизнь к лучшему. 
								Больше 1 540 000 пользователей уже сделали свой выбор — присоединяйтесь! </p>
							<a href="#" class="btn btn-outline-light">Акции</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="create-section" class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 right">
						<h3>Create Your Passion</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
							veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<div class="d-flex flex-row">
							<div class="p-4 align-self-start">
								<i class="fa fa-check"></i>
							</div>
							<div class="p-4 align-self-end">
								Получайте скидку на детали
							</div>
						</div>
						<div class="d-flex flex-row">
							<div class="p-4 align-self-start">
								<i class="fa fa-check"></i>
							</div>
							<div class="p-4 align-self-end">
								Получайте скидку на детали
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<img src="img/create-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
					</div>
				</div>
			</div>
		</section>
		
		<section id="share-head-section" class="bg-primary">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="p-5">
							<h1 class="display-4">Share</h1>
							<p class="lead">АВТО клуб - ваш помощник в поиске выгодных цен на товары и услуги. 
								Наши пользователи получают скидки, кэшбэк и спецпредложения. 
								В АВТО клубе вы получаете скидки там, где даже не подозревали о их существовании! 
								Корпорация «Aunite Group» создана для того, чтобы изменить вашу жизнь к лучшему. 
								Больше 1 540 000 пользователей уже сделали свой выбор — присоединяйтесь! </p>
							<a href="#" class="btn btn-outline-light">Акции</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="share-section" class="bg-light text-muted py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="img/explore-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
					</div>
					<div class="col-md-6 right">
						<h3>Share what you create</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
							veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<div class="d-flex flex-row">
							<div class="p-4 align-self-start">
								<i class="fa fa-check"></i>
							</div>
							<div class="p-4 align-self-end">
								Получайте скидку на детали
							</div>
						</div>
						<div class="d-flex flex-row">
							<div class="p-4 align-self-start">
								<i class="fa fa-check"></i>
							</div>
							<div class="p-4 align-self-end">
								Получайте скидку на детали
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<footer id="footer" class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="py-4">
							<h1 class="h3">АВТО клуб</h1>
							<p>Copyright &copy; 2019</p>
							<button class="btn btn-primary" data-toggle="modal"
							data-target="#contactModal">Contact Us</button>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<div class="modal fade text-dark" id="contactModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="contactModalTitle">Contact Us</h5>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control"></textarea>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary btn-block">Отправить</button>
					</div>
				</div>
			</div>
		</div>
		
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
		<script>baguetteBox.run('.tz-gallery');</script>

	</body>
</html>













