  <?php
include("conexion.php");
$data1 = "SELECT * FROM rover";
$mostrar_informacion = $conexion->query($data1);
while($row = $mostrar_informacion->fetch_assoc()){
      
?>

<?php  echo $row['nombre'];
        echo $row['pais_origen'];
        echo $row['agencia'];
        echo $row['mision_rover'];
        echo $row['data_rover'];
}
?>






