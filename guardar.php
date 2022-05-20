<?php



include("conexion.php");



$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Monto = $_POST['Monto'];
$Pago = $_POST['Pago'];


$query="INSERT INTO donaciones(Nombre,Correo,Telefono,Monto,Pago) 
VALUES('$Nombre','$Correo','$Telefono','$Monto','$Pago')";


$resultado=$conexion->query($query);
if ($resultado) {
 header("location: Donar.html");
}
else {
    echo "No Se Insertaron Los Datos";
}



?>