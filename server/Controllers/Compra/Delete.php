<?php
include_once('../db.php');
$id_compra = $_POST['id_compra'];


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
<h1 class='success'>Registro eliminado exitósamente!</h1>

<br><br>
<a href='/practica9/client'><button class='submit-button response' type='button'>Regresar al inicio</button></a>
</body>
</html>";
$conectar = connection();
$sql = "DELETE FROM compra WHERE id_compra=$id_compra";
$resul = mysqli_query($conectar, $sql);
?>