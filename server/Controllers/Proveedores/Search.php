<?php
include_once('../db.php');
$id_proveedor = $_POST['id_proveedor'];

$conectar = connection();
$sql = "SELECT * FROM Proveedor where id_proveedor=$id_proveedor";
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
  ID de Proveedor
  </td>
  <td>
    Nombre de Proveedor
  </td>
  <td>
    Telefono
  </td>
  <td>
    Empresa
  </td>
  <td>
    Email
  </td>
</tr>
<tr>
  <td>
  $row[id_proveedor] 
  </td>
  <td>
  $row[Nombre]  
  </td>
  <td>
  $row[Telefono]  

  </td>
  <td>
  $row[Empresa]  
  </td>
  <td>
  $row[Email]  
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