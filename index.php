<?php
// iniciamos una sesion
session_start();

//verificamos si hay cambios de lenguaje mediante POST
if(isset($_POST["lang"])){
	$lang = $_POST["lang"];
	if(!empty($lang)){
		$_SESSION["lang"] = $lang;
	}
}
// verificamos la sesion creada
if(isset($_SESSION['lang'])){
	// si es true, se crea el require y la variable lang
	$lang = $_SESSION["lang"];
	require "lang/".$lang.".php";
	// si no hay sesion por default se carga el lenguaje espanol
}else{
	require "lang/es.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $lang["titulo"]; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand"><?php echo $lang["logo"]; ?></a>
  <form class="form-inline" method="POST">
  <label class="mr-sm-2" for="inlineFormCustomSelectPref"><?php echo $lang["cambiar_idioma"]; ?></label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="lang">
    <option selected><?php echo $lang["opcion_1"]; ?></option>
    <option value="es"><?php echo $lang["opcion_2"]; ?></option>
    <option value="en"><?php echo $lang["opcion_3"]; ?></option>
  </select>
  <button type="submit" class="btn btn-primary"><?php echo $lang["cambiar"]; ?></button>
</form>
</nav>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h3><?php echo $lang["descripcion"]; ?></h3>
			</div>
			<div class="col-sm-4">
				
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>