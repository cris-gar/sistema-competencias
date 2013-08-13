
<!DOCTYPE HTML>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <!--cargamos los archivos css y js-->
        {{ HTML::style('tests/css/widget_style.css') }}
        {{ HTML::script('tests/js/jquery-2.0.3.js') }}
        {{ HTML::script('tests/js/widgets.js') }}
        <!--nuestro título podrá ser modificado-->
        <title>Prueba para mostra profesores</title>
    </head>
    <body>
        <h1>Pequeña presentacion de los profesores</h1>
        <h2>Profesores en el sistema</h2>
        <div id="anom_view">
            <ul id="sortable" class="teacher_list">
                <!--Esto se reaalizara si existe usuarios en la BD-->
                @if(count($consulta) > 0)
                <!--Se recorre la consulta para todos los usuarios-->
                @foreach ($consulta as $dato)
                <li>
                    <script type="text/javascript">
                        var p = new Profesor_widget({
                            "name" :  "{{  $dato->nombre.'\n'.$dato->apellido_paterno.'\n'.$dato->apellido_materno }}" ,
                            "depto" : "Departamento de Informática"
                        });
                        document.write(p.template)
                    </script>
                </li>
                @endforeach
                @endif 
            </ul>
        </div> 
    </body>
</html>

<?
/*
$usuarios = DB::table('usuario')->join('estudio','usuario.id_usuario','=','estudio.id_user')->select('usuario.nombre', 'usuario.id_usuario', 'estudio.descripcion')->get();


foreach ($usuarios as $usuario )
{?>
    {{ $usuario->nombre }}
 <?
}
foreach ($usuarios as $usuario )
{?>
    {{ $usuario->id_usuario }} 
<?
}*/
?>
