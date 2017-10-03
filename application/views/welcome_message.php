<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $valor;?></title>
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main/css.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form action="<?=base_url()?>register" method="POST">
		<div class="form-group">
			<label for="usr">Usuario</label>
			<input id="user" name="user" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="pass">Contraseña</label>
			<input id="pass" name="pass" type="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="mail">E-mail</label>
			<input id="mail" name="mail" type="email" class="form-control">
		</div>
		<input type="submit" class="btn btn-l" value="Registrar">
	</form>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
