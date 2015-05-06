<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Agência dos Mares - Comunicação Digital." />
		<meta name="keywords" content="Código Limpo, Desenvolvimento Web, HTML5, Desenvolvimento Ágil" />
		<meta name="author" content="Agência dos Mares" />
		<meta name="reply-to" content="contato@agenciadosmares.com.br" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/my-style.css" />	    
	</head>
	<body>
		<div class="row my-header">
			<header>
				<nav>
					<ul class="nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="produtos.php">Produtos</a></li>
						<li><a href="novidades.php">Novidades</a></li>
						<li><a href="contatos.php">Contatos</a></li>
					</ul>
				</nav>

				<div class="my-logo">
					<a href="#"><img src="img/Logo.png" alt="Logo - Polpa Toda Boa"></a>
				</div>

				<div class="redes-sociais">
					<a href="#"><img src="img/facebook.png" alt="" /></a>
					<a href="#"><img src="img/twiter.png" alt="" /></a>
					<a href="#"><img src="img/youtube.png" alt="" /></a>
				</div>

				<div class="row">
					<div id="my-carousel" class="carousel slide">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="active item">
								<img class="my-slide" src="img/Pizza.png" alt="slide - Pizza">
							</div>
							<div class="item">
								<img class="my-slide" src="img/Logo.png" alt="slide - Pizza">
							</div>
							<div class="item">
								<img class="my-slide" src="img/youtube.png" alt="slide - Pizza">
							</div>
						</div>									
					</div> <!-- Carousel -->
				</div>

				<div class="row my-texto-slide">
					<p>A Toda Boa traz o mais puro sabor da fruta,</p>
					<p>para seus clientes!</p>
					<div class="my-mais">
						<span>+ Mais</span>
					</div>
				</div>
			</header> <!-- Close header -->
		</div>

		<div class="row my-section">
			<section>
				<hr />

				<div class="row section">
					<div class="media span5 section1">
					    <img class="pull-left media-object" src="img/Logo.png" alt="" />	
						<div class="media-body">
							<h3 class="media-heading">Lorem ipisum</h3>
							<p>Lorem ipsum eat amet dolor Lorem ipsum eat amet dolor Lorem ipsum eat amet dolor Lorem ipsum.</p>
							<a href="#">Mais +</a>
						</div>
					</div>

					<div class="media span5 section1">
					    <img class="pull-left media-object" src="img/Pizza.png" alt="" />	
						<div class="media-body">
							<h3 class="media-heading">Lorem ipisum</h3>
							<p>Lorem ipsum eat amet dolor Lorem ipsum eat amet dolor Lorem ipsum eat amet dolor Lorem ipsum.</p>
							<a href="#">Mais +</a>
						</div>
					</div>
				</div>

			</section>
		</div>

		<!-- ************ Scripts ********** -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>  		
  		<script type="text/javascript" src="js/gmaps.js"></script>
  		<script type="text/javascript" src="js/my-functios.js"></script>
  		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
	        $('#my-carousel').carousel({interval: 3000})
	    </script>
	</body>
</html>