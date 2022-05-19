<?php



include("abre.php");



$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];

$Monto = $_POST['Monto'];

$Pago = $_POST['Pago'];



$consulta = "INSERT INTO donaciones(Nombre, Correo, Telefono, Monto, Pago) VALUES
('$Nombre','$Correo','$Telefono','$Monto','$Pago')";



if ($conexion->query($consulta) === TRUE){
/*header("Location: index.php");/* regresa al formulario*/
}else{
echo "Error: " . $consulta . "<br>" . $conexion->error;
}



$conexion->close();