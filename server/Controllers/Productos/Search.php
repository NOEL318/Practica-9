<?php
include_once('../db.php');
$id_producto = $_POST['id_producto'];

$conectar = connection();
$sql = "SELECT * FROM Producto where id_producto=$id_producto";
$resul = mysqli_query($conectar, $sql);
if (mysqli_num_rows($resul) > 0) {
  while ($row = mysqli_fetch_assoc($resul)) {
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
<h1 class='success'>Búsqueda exitosa!</h1>
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
  $row[id_producto] 
  </td>
  <td>
  $row[nombre]  
  </td>
  <td>
  $row[cantidad]  

  </td>
  <td>
  $row[precio_compra]  

  </td>
  <td>
  $row[precio_venta]  

  </td>
</tr>
</table>

<br><br>
<a href='/practica9/client'><button class='submit-button response' type='button'>Regresar al inicio</button></a>
</body>
</html>";
  }
} else {
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
  <h1 class='no-success'>No se encontraron resultados</h1>
  <br><br>
  <a href='/practica9/client'><button class='submit-button response' type='button'>Regresar al inicio</button></a>
  </body>
  </html>";
}
?>