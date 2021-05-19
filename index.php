<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>byron.solutions</title>
		
		<!-- Fonte -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;200;300;700&display=swap" rel="stylesheet">

		<!-- Bootstrap -->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<!-- Scripts -->

		<script
  	src="https://code.jquery.com/jquery-3.6.0.min.js"
  	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  	crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

		<!-- Font Awesome -->

		<script src="https://kit.fontawesome.com/b73f499498.js" crossorigin="anonymous"></script>

		<!-- Progress bar -->

		<script src="js/progressbar.min.js"></script>

		<!-- Parallax -->

		<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

	</head>

	<body>
		<header>
			<div class="container" id="nav-container">
				<nav class="navbar navbar-expand-lg fixed-top">
					<a href="#" class="navbar-brand">
						<img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_byron.png" alt="byron.solutions">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle navigation">
					<span class="navbar-toggler-icon"></span>					
					</button>			
					<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
						<div class="navbar-nav">
							<a  class="nav-item nav-link" id="home_nav">Home</a>
							<a  class="nav-item nav-link" id="portfolio_nav">Portfólio</a>
							<a  class="nav-item nav-link" id="blog_nav">Blog</a>
							<a  class="nav-item nav-link" id="sobre_nav">Quem Somos</a>
							<button class="btn1" type="button" form="f_cadastro" onclick="alert('Agendar Reunião');">Agendar Reunião</button>
							<i class="fas fa-moon" id="icon_nav"></i>
							
						</div>
					
					</div>	
				</nav>
			</div>
		</header>

		<script src="js/scripts.js"></script>
	</body>
</html>