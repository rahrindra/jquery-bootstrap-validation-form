<html>
	<head>
		<title>Validation formulaire avec jquer</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">
			<form class= "form form-horizontal" id="monFormulaire" method="post" action="#">
				<div class="control-group">
					<label class="control-label" for="nom">Votre nom :</label>
				   	<input type="text" id="nom" name="nom" />
				</div>
				<div class="control-group">
				   	<label class="control-label" for="email">Votre nom :</label>
				   	<input type="email" id="email" name="email" />
				</div>
			   	<input type="submit" value="ok" id="btn_submit" />
			</form>
		</div>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/monScript.js"></script>
	</body>
</html>