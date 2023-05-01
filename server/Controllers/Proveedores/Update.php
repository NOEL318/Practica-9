<?php
include_once('../db.php');
$id_proveedor = $_POST['id_proveedor'];
$nombre = $_POST['nombre_proveedor'];
$telefono = $_POST['telefono_proveedor'];
$empresa = $_POST['empresa_proveedor'];
$email = $_POST['email_proveedor'];

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
<h1 class='success'>Actualización exitosa!</h1>
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
    $id_proveedor
  </td>
  <td>
    $nombre
  </td>
  <td>
    $telefono
  </td>
  <td>
    $empresa
  </td>
  <td>
    $email
  </td>
</tr>
</table>

<br><br>
<a href='/practica9/client'><button class='submit-button response' type='button'>Regresar al inicio</button></a>
</body>
</html>";
$conectar = connection();
$sql = "UPDATE proveedor SET id_proveedor='$id_proveedor', nombre='$nombre', telefono='$telefono', empresa='$empresa', email='$email' where id_proveedor='$id_proveedor'";
$resul = mysqli_query($conectar, $sql);
?>