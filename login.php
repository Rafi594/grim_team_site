<html>
	<head>
		<title>Site: Connexion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

<?php include("title.php"); ?>

<?php include("menus.php"); ?>


			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Connexion</div>
					<div id="main" class="container">

<form action="loginsend.php" method="post">
<p>
<input id="text" type="text" name="username" value="Nom d'utilisateur" />
<input id="password" type="password" name="password" value="Mot de passe" />
<input type="submit" value="Valider" />
</p>
</form>
</center>



