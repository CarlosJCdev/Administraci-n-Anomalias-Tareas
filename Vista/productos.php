<?php
if (isset($_GET['term'])){
    
# conectare la base de datos
$con=@mysqli_connect("localhost", "usae", "1234", "usae");    
$return_arr = array();
    
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
$fetch = mysqli_query($con,"SELECT * FROM escuelas where nombre like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,100");
    
/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
while ($row = mysqli_fetch_array($fetch)) {
$id_producto=$row['Id_escuela'];
$row_array['value'] = $row['nombre']." | ".$row['centro'];
$row_array['Id_escuela']=$row['Id_escuela'];
$row_array['codigo']=$row['nombre'];
$row_array['descripcion']=$row['centro'];
$row_array['precio']=$row['localidad'];     
array_push($return_arr,$row_array);
}
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);
}
?>