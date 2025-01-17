<?php

if($_Server["REQUEST_METHOD"] = "POST") {
    require "claseFactura.php";
    $num_factura = $_POST['factura'];
    $fecha_facturacion = $_POST['fecha'];
    $nombre_cliente = $_POST['nombre'];
    $direccion_cliente = $_POST['direccion'];
    $nif_cliente = $_POST['nif'];
    $servicio = $_POST['servicio'];
    $precio_sin_iva = $_POST['precio'];
}

$factura = new Factura($num_factura,$fecha_facturacion,
$nombre_cliente,$direccion_cliente,$nif_cliente,$servicio,$precio_sin_iva);
echo $factura->ficha();