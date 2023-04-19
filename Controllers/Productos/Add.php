<?php
include_once('../db.php');
$id_producto = rand();
$nombre = $_POST['nombre_producto'];
$cantidad = $_POST['cantidad_producto'];
$precio_compra = $_POST['precio_compra_producto'];
$precio_venta = $_POST['precio_venta_producto'];

echo "Los datos son: <br>";
echo "$id_producto,$nombre,$cantidad,$precio_compra, $precio_venta";

$conectar = connection();
$sql = "INSERT INTO producto VALUES ('$id_producto', '$nombre', '$cantidad', '$precio_compra', '$precio_venta')";
$resul = mysqli_query($conectar, $sql);

?>