<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang = "fr">
<head>
<!-- Liens vers fichiers bootstraps-->
    <meta charset="utf-8">

    <title>Connexion</title>

    <link href="../CSS/bootstrap.css" rel="stylesheet">
    <link href="../CSS/style.css" rel="stylesheet">
	<!-- jQuery -->
    <script src="../JS/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="../JS/bootstrap.min.js"></script>
</head>
<!-- Page de connexion (j'utilise les même fichiers bootstrap) -->
<body>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">Connexion</h1>
			</div>
			<div class="modal-body">
				<form class="col-md-12 center-block" method="post">
					<div class="form-group">
						<input type="text" name="Identifiant" class="form-control input-lg" placeholder="Identifiant">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" placeholder="Mot de passe">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-block btn-lg btn-primary" value="Se connecter">
					</div>
				</form>
				<div class="modal-footer">
				</div>
			 </div>
		 </div>
	 </div>
</body>
</html>