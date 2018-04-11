<?php
/*les paramètres de connexion a la base de donnée*/
$machine="localhost";
$port=3306;
//ligne suivante : le nom de l'utilisateur sql qui a les droits sur la base
$utilisateur="sa";
//ligne suivante : le mot de passe de l'utilisateur sql ci-dessus
$motdepasse="SQL2014";
//ligne suivante : le nom de votre base sql Module de covoiturage
$nomdebase="LISA_DIGITAL";

/*creation de la connexion et activation des avertissements en cas d'erreur*/
/*$BDD=new PDO('mysql:host='.$machine.';port='.$port.';dbname='.$nomdebase,
		$utilisateur,
		$motdepasse);

		$BDD->exec("SET CHARACTER SET utf8");
$BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

*/
?>


