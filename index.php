<!DOCTYPE html>
<html>
<head>
	<title>Paises www.riberdesigns.es</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js" ></script>
	<?php
	//Class conexión, Caracteres
	require_once 'conexion.php';
	require_once 'classCaracteres.php';
	require_once 'utilidades.php';
	//Class Caracteres
	$caracteres = new Caracteres();

	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST" && filter_input(INPUT_POST, 'texto')!=""){
		$caracteres->insertar(clear(filter_input(INPUT_POST, 'texto')));
	}
	?>
</head>
<body>
	<div class="container">

	<form  method="post" >
		<textarea class="form-control" name="texto"></textarea>
		<button class="btn btn-primary" type="Submit">Insertar</button>
	</form>


	<div class="row">
		<div class="col-md-12">
			<?php
			$caracteres2 = new Caracteres();
			$url=json_decode($caracteres2->mostrar(),true);
			foreach ($url as $key => $valor) {

				echo $valor['Num'].". ".$valor['Texto']."<br>";
			}
			?>
		</div>
	</div>	
	</div>
	<footer>
		<center><a  href="http://www.riberdesigns.es" "email me">Riber Designs 2016</a> | <a  href="https://www.youtube.com/user/tribersounds" "email me">Suscribirse Riber Designs Youtube</a></center>
	</footer>
</body>
</html>