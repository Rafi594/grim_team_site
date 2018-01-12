<html>
	<head>
		<title>Site: Membres</title>
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
					<div class="title">Liste des membres</div>
					<div id="main" class="container">

<?php
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM membres');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<p>

<table>
<tr>
<td></td>
<td><?php echo $donnees['membres']; ?></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>
</p>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

</form>
</center>
