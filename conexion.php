<?php
$h = "localhost";
$u = "root";
$p = "";
$db = "serviciomedicoo";

$con = new mysqli($h, $u, $p, $db);

if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}
?>