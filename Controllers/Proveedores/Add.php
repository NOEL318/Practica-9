<?php
include_once('../db.php');
$id_proveedor = rand();
$nombre = $_POST['nombre_proveedor'];
$telefono = $_POST['telefono_proveedor'];
$empresa = $_POST['empresa_proveedor'];
$email = $_POST['email_proveedor'];

echo "Los datos son: <br>";
echo "$id_proveedor,$nombre,$telefono,$empresa, $email";
$correctmail = strval($email);
$conectar = connection();
$sql = "INSERT INTO proveedor VALUES ('$id_proveedor', '$nombre', '$telefono', '$empresa', '$correctmail')";
$resul = mysqli_query($conectar, $sql);
?>