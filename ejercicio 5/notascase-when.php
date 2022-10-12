<?php 
	
	
	session_start();

	$usuario = $_SESSION['username'];
	if(!isset($usuario)){
		header("location: login.php");
	}
	require './logica/conexion.php';
	$sql="select 
		case r.depto 			when '01' then 'sucre'
								when '02' then 'lapaz'
								when '03' then 'cochabamba'
								when '04' then 'oruro'
								when '05' then 'potosi'
								when '06' then 'tarija'
								when '07' then 'santacruz'
								when '08' then 'beni'
								when '09' then 'pando'
                                else 'otro'
                                end
								, AVG (r.prom)

		from (select p.departamento depto, i.prom prom
			  from persona p, (SELECT ciEstudiante,(nota1+nota2+nota3+notafinal)/4 prom 
							   from inscripcion) i
							   where p.ci = i.ciEstudiante) r
		group by r.depto
        order by r.depto";
	$resultado=mysqli_query($conexion,$sql);

		
		echo "<table>";
		echo "<tr>";
		echo "<td>"."DEPARTAMENTO    "."</td>";
		echo "<td>"."nota promedio"."</td>";
		echo "</tr>";
		
		 while ($fila=mysqli_fetch_array($resultado)) {
		 		echo "<tr>";
				echo "<td>"."$fila[0]"."</td>";
				echo "<td>"."$fila[1]"."</td>";
				echo "</tr>";
       
    }

    	echo "</table>";



?>

