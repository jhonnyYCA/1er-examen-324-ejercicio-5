<?php 

	require 'conexion.php';

	session_start();

	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	$q = "SELECT count(*) as contar from acceso a,rol r where a.usuario = '$usuario' and a.pasword = '$clave' and a.ci = r.ciPersona and r.rol = 'director'";

	$e = "SELECT count(*) as contar from acceso a,rol r where a.usuario = '$usuario' and a.pasword = '$clave' and a.ci = r.ciPersona and r.rol = 'estudiante'";

	$consultaD = mysqli_query($conexion,$q);
	$arrayD = mysqli_fetch_array($consultaD);

	$consultaE = mysqli_query($conexion,$e);
	$arrayE = mysqli_fetch_array($consultaE);


	if($arrayD['contar']>0){
		$_SESSION['username'] = $usuario;
		header("location: ../paginadirector.php");
	}else{
		if($arrayE['contar']>0){
			$_SESSION['username'] = $usuario;
			header("location: ../paginaestudiante.php");
		}else{
			echo "datos incorrectos";
		}
		
	}

?>