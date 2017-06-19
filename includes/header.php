<?php
	//url params
	$root_url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";
	$current_page = basename($_SERVER['PHP_SELF']);
	setlocale(LC_ALL, 'nl_NL');
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Auto Elect BV | Home</title>

	<link rel="stylesheet" href="<?= $root_url; ?>assets/css/custom-breakpoints.css">
	<link rel="stylesheet" href="<?= $root_url; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $root_url; ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $root_url; ?>assets/css/main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
</head>

<body>

<header>
	<div class="container">
		<div class="row">
			<div class="inset-holder">
				<div class="col-lg-4 col-md-3 col-xs-12">
					<div class="logo-holder">
						<a href="<?= $root_url; ?>">
							<img src="<?= $root_url; ?>assets/img/auto-elect-bv-zeewolde-logo.png" alt="Logo Auto Elect BV Zeewolde" />
						</a>
					</div>
				</div>
				<div class="col-lg-8 col-md-9 col-xs-12">
					<div class="meta-contact">
						<a class="phone" href="tel:+310362022010">+31 (0)36 202 20 10</a>
						<a class="email" href="mailto:info@auto-elect.nl">info@auto-elect.nl</a>
						<a class="offerte" href="#">Offerte<span class="hidden-desktop"> aanvragen</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container">
	<nav class="navbar navbar-default">
		<div class="inset-holder">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li class="has-submenu">
						<a href="#">Producten</a>
						<ul class="dropdown">
							<li><a href="#">Hydraulische Stuurbekrachtiging (PWS)</a></li>
							<li><a href="#">Elektrische Stuurbekrachtiging  (EPS)</a></li>
							<li><a href="#">Elektrische Hydraulische Stuurbekrachtiging (EHPS)</a></li>
							<li><a href="#">Air Conditioning (AC)</a></li>
							<li><a href="#">Automotive sensoren</a></li>
						</ul>
					</li>
					<li><a href="#">Research & Development</a></li>
					<li><a href="#">Autoboek Documentatie</a></li>
					<li><a href="#">Over Ons</a></li>
					<li><a href="#">Ophaalservice</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>