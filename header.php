<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ADN</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">		
	</head>
	<body <?php echo ($p=='index')? 'data-spy="scroll" data-target=".navbar-nav"':'' ?>>		
		<!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top navbar-adn">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand smoothScroll" href="#inicio"><img src="img/logo.png" alt="ADN"></a>
				</div>
				<div id="collapsible-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href="<?php echo ($p=='index')? '#inicio':'index.php' ?>" class="smoothScroll">Inicio</a></li>
						<li><a href="<?php echo ($p=='index')? '#proyectos':'index.php' ?>" class="smoothScroll">Proyectos</a></li>
						<li><a href="<?php echo ($p=='index')? '#alianzas':'index.php' ?>" class="smoothScroll">Alianzas</a></li>
						<li><a href="<?php echo ($p=='index')? '#servicios':'index.php' ?>" class="smoothScroll">Servicios</a></li>
						<li><a href="<?php echo ($p=='index')? '#sectores':'index.php' ?>" class="smoothScroll">Sectores</a></li>
						<li><a href="<?php echo ($p=='index')? '#contacto':'index.php' ?>" class="smoothScroll">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>