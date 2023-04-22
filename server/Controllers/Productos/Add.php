<?php
include_once('../db.php');
$id_producto = rand();
$nombre = $_POST['nombre_producto'];
$cantidad = $_POST['cantidad_producto'];
$precio_compra = $_POST['precio_compra_producto'];
$precio_venta = $_POST['precio_venta_producto'];
echo "
<html>
<head>
  <link rel='stylesheet' href='../../../client/index.css'>
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link href='https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;700&display=swap'
    rel='stylesheet'>
</head>
<body>
<h1 class='success'>Registro exitoso!</h1>
<table class='output-table'>
<tr>
  <td>
  ID de Producto
  </td>
  <td>
    Nombre de Producto
  </td>
  <td>
    Cantidad
  </td>
  <td>
    Precio de Compra
  </td>
  <td>
    Precio de Venta
  </td>
</tr>
<tr>
  <td>
    $id_producto
  </td>
  <td>
    $nombre
  </td>
  <td>
    $cantidad
  </td>
  <td>
    $precio_compra
  </td>
  <td>
    $precio_venta
  </td>
</tr>
</table>

<br><br>
<a href='/practica9/client'><button class='submit-button response' type='button'>Regresar al inicio</button></a>
</body>
</html>";

$conectar = connection();
$sql = "INSERT INTO producto VALUES ('$id_producto', '$nombre', '$cantidad', '$precio_compra', '$precio_venta')";
$resul = mysqli_query($conectar, $sql);
?>