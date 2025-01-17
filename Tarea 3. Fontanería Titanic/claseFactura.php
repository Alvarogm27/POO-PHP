<?php
// La fontanería Titanic, con CIF A58818501 y sede social en C/Granola, 22 Silleiro, Pontevedra, necesita automatizar la visualización de sus facturas, a las que se aplica un IVA del 10%. Para ello, crea un proyecto formado por los archivos para las operaciones que se describen a continuación.
// Un formulario que tome los siguientes datos:
//     Número de factura.
//     Fecha de facturación.
//     Nombre del cliente.
//     Dirección del cliente.
//     NIF/CIF del cliente.
//     Servicio realizado.
//     Precio sin IVA.
// Una clase Factura.
// Un script que tome los datos de una factura introducidos a través del formulario y, haciendo uso de la clase anterior, los muestre precedidos por los de la empresa y seguidos del IVA y del precio total del servicio.
// Ten en cuenta que todos los datos que aparecen en el enunciado deben estar presentes en la clase
Class Factura{
    const nombre_empresa = "Fontaneria Titanic";
    const direccion_empresa = "C/Granola, 22 Silleiro, Pontevedra";
    const iva = 0.1;
    const cif = "A58818501";
    private $num_factura;
    private $fecha_facturación;
    private $nombre_cliente;
    private $direccion_cliente;
    private $nif_cliente;
    private $servicio;
    private $precio_sin_iva;
    
    function __construct($num_factura, $fecha_facturación, $nombre_cliente, $direccion_cliente, $nif_cliente,$servicio,$precio_sin_iva){
        $this->num_factura = $num_factura;
        $this->fecha_facturación = $fecha_facturación;
        $this->nombre_cliente = $nombre_cliente;
        $this->direccion_cliente = $direccion_cliente;
        $this->nif_cliente = $nif_cliente;
        $this->servicio = $servicio;
        $this->precio_sin_iva = $precio_sin_iva;
    }
    function conIva(){
        return ($this->precio_sin_iva * self::iva) + $this->precio_sin_iva;
    }

    function ficha(){
        return 
        self::nombre_empresa."<br>".
        self::direccion_empresa."<br>".
        self::cif.
        "<br>Factura Nº: $this->num_factura 
        <br>Fecha de facturación: $this->fecha_facturación  
        <br>Nombre del cliente: $this->nombre_cliente
        <br>Dirección del cliente: $this->direccion_cliente 
        <br>NIF/CIFdel cliente: $this->nif_cliente 
        <br>Servicio realizado: $this->servicio 
        <br>Precio sin IVA: $this->precio_sin_iva
        <br>Precio con IVA: ".$this->conIva()
        ;
    }
}