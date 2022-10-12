<?php 
	
;
	session_start();

	$usuario = $_SESSION['username'];
	if(!isset($usuario)){
		header("location: login.php");
	}

	require './logica/conexion.php';


	$sql="select * from persona p, inscripcion i where p.ci = i.ciEstudiante";
	$resultado=mysqli_query($conexion,$sql);
	$sucre=0;
	$lapaz=0;
	$cocha=0;
	$oruro=0;
	$potosi=0;
	$tarija=0;
	$santacruz=0;
	$beni=0;
	$pando=0;

	$notassucre=0;
	$notaslapaz=0;
	$notascocha=0;
	$notasoruro=0;
	$notaspotosi=0;
	$notastarija=0;
	$notassantacruz=0;
	$notasbeni=0;
	$notaspando=0;

	
	while ($fila=mysqli_fetch_array($resultado)){
	
		if($fila['departamento']=='01'){
			$sucre = $sucre + 1;
			$notassucre=$notassucre+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}	
		if($fila['departamento']=='02'){
		 $lapaz = $lapaz + 1;
		 	$notaslapaz=$notaslapaz+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
		if($fila['departamento']=='03') {
			$cocha = $cocha + 1;
			$notascocha=$notascocha+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
		if($fila['departamento']=='04') {
			$oruro = $oruro + 1;
			$notasoruro=$notasoruro+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
		if($fila['departamento']=='05') {
			$potosi = $potosi + 1;
			$notaspotosi=$notaspotosi+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
		if($fila['departamento']=='06') {
			$tarija = $tarija + 1;
			$notastarija=$notastarija+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
		if($fila['departamento']=='07') {
			$santacruz = $santacruz + 1;
			$notassantacruz=$notassantacruz+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
		if($fila['departamento']=='08') {
			$beni = $beni + 1;
			$notasbeni=$notasbeni+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
		if($fila['departamento']=='09') {
			$pando = $pando + 1;
			$notaspando=$notaspando+(($fila['nota1']+$fila['nota2']+$fila['nota3']+$fila['notafinal'])/4);
		}
	}
	if($sucre>0) $sucre=$notassucre/$sucre;
	if($lapaz>0) $lapaz=$notaslapaz/$lapaz;
	if($cocha>0) $cocha=$notascocha/$cocha;
	if($oruro>0) $oruro=$notasoruro/$oruro;
	if($potosi>0) $potosi=$notaspotosi/$potosi;
	if($tarija>0) $tarija=$notastarija/$tarija;
	if($santacruz>0) $santacruz=$notassantacruz/$santacruz;
	if($beni>0) $beni=$notasbeni/$beni;
	if($pando>0) $pando=$notaspando/$pando;

	echo "<table>";
	echo "<tr>";
		echo "<td>"."DEPARTAMENTO    "."</td>";
		echo "<td>"."nota promedio"."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."SUCRE"."</td>";
		echo "<td>".$sucre."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."LA PAZ"."</td>";
		echo "<td>".$lapaz."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."COCHABAMBA"."</td>";
		echo "<td>".$cocha."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."ORURO"."</td>";
		echo "<td>".$oruro."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."POTOSI"."</td>";
		echo "<td>".$potosi."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."TARIJA"."</td>";
		echo "<td>".$tarija."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."SANTA CRUZ"."</td>";
		echo "<td>".$santacruz."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."BENI"."</td>";
		echo "<td>".$beni."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>"."PANDO"."</td>";
		echo "<td>".$pando."</td>";
	echo "</tr>";

	echo "</table>";



	

?>

