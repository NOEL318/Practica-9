<?php
function connection()
{
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "practica9";
    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}
?>