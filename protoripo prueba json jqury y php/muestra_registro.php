<?php
include("clase_conexion.php");
$id=$_GET['id'];
 $buscar_datos="select * from datos where id=$id";
 $muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar["nombre"]=$row['nombre'];
$ar["ap"]=$row['apellido'];
$ar["dir"]=$row['correo'];
$ar["foto"]=$row['foto'];
$dato_json=json_encode($ar);
echo $dato_json;
    ?>