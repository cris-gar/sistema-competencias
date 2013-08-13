<?php

$usuarios = DB::table('usuario')->get();
 
$arr = array();

while ($obj = pg_fetch_object($usuarios)) {
    $arr[] = array('ID' => $obj->id_usuario,
                   'P' => $obj->nombre,
                   'NV' => $obj->apellido_paterno,
        );
}
echo '' . json_encode($arr) . '';