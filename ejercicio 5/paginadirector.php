<?php 
	
	session_start();

	$usuario = $_SESSION['username'];
	if(!isset($usuario)){
		header("location: login.php");
	}

?>

<?php include "header.inc.php"; ?>
			<li><a href="./logica/salir.php">SALIR</a></li>
			<li><a href="">SERVICIOS</a></li>
			<li><a href="">NOSOTROS</a></li>
			<li><a href="">NOTICIAS</a></li>
			<li><a href="">INICIO</a></li>

<?php include "nav.inc.php"; ?>
			<div>
				<h2><a href="./info/sesion.php">informatica</a></h2>
			</div>
			<div>
				<h2><a href="./mate/sesion.php">matematica</a></h2>
			</div>
			<div>
				<h2><a href="./fisica/sesion.php">fisica</a></h2>
			</div>
<?php include "aside.inc.php"; ?>
<h2 text align="center"><?php echo "bienvenido director $usuario"; ?></h2>
<br><br>
<li><a href="./notasarray.php">NOTAS POR DEPARTAMENTO (similar case-when)</a></li>
<br>
<li><a href="./notascase-when.php">NOTAS POR DEPARTAMENTO (SQL case-when)</a></li>

<?php include "article.inc.php"; ?>
