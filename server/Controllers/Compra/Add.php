<?php
include_once('../db.php');
$id_compra = rand();
$dt = new DateTime("now", new DateTimeZone('America/Mexico_City'));
$fecha = $dt->format("Y-m-d H:i:s");

$id_proveedor = $_POST['id_proveedor'];
$id_producto = $_POST['id_producto'];

echo "Los datos son: <br>";
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
    ID de la Compra
  </td>
  <td>
    Fecha
  </td>
  <td>
    ID de Proveedor
  </td>
  <td>
    ID de Producto
  </td>
</tr>
<tr>
  <td>
    $id_compra
  </td>
  <td>
    $fecha
  </td>
  <td>
    $id_proveedor
  </td>
  <td>
    $id_producto
  </td>
</tr>
</table>

<br><br>
<a href='/practica9/client'><button class='submit-button response' type='button'>Regresar al inicio</button></a>
</body>
</html>";
$conectar = connection();
$sql = "INSERT INTO compra VALUES ('$id_compra','$fecha','$id_proveedor','$id_producto')";
$resul = mysqli_query($conectar, $sql);
?>