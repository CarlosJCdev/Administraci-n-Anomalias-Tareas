<?php
	$servername = "localhost";
    $username = "usae";
  	$password = "1234";
  	$dbname = "usae";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM seguimiento WHERE cct NOT LIKE '' ORDER By id_seguimiento LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM seguimiento WHERE id_seguimiento LIKE '%$q%' OR cct LIKE '%$q%' OR fecha LIKE '%$q%' OR descripcion LIKE '%$q%' OR estatus LIKE '%$q%' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>CCT</td>
    					<td>FECHA</td>
    					<td>DESCRIPCION</td>
    					<td>ESTATUS</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id_seguimiento']."</td>
    					<td>".$fila['cct']."</td>
    					<td>".$fila['fecha']."</td>
    					<td>".$fila['descripcion']."</td>
    					<td>".$fila['estatus']."</td>
    				</tr>";

			
    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>