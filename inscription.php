<html>
	<head>
		<title>Site: Inscription</title>
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
					<div class="title">Inscription</div>
					<div id="main" class="container">

<h1>Pour vous inscrire vous devez remplir tous les champs</h1>
<form action="inscription_submit.php" method="post">
<p>
<input id="email" type="text" name="email" value="Email@example.com" />
<input id="username" type="text" name="Nom d'utilisateur" value="Nom d'utilisateur">
<input id="password" type="password" name="password" value="Mot de passe" />
<input type="submit" value="Valider" />
</p>
</form>
</center>