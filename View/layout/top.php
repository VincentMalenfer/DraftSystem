<?php
// view/layout/top.php
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>DraftSystem</title>
		<!-- Bootstrap CDN -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Font Awesome CDN -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- CSS File -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<a class="navbar-brand" href="/DraftSystem/">DraftSystem</a>
				<ul class="nav navbar-nav">
					<li>
						<a href="player.php">Les joueurs</a>
					</li>
					<li>
						<a href="table.php">Générer le plan de table</a>
					</li>
					<li>
						<a href="reglement.php">Le réglement</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="cRetour"></div>
		<div class="container">
