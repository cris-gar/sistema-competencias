<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#muestra{
	position:absolute;
	width:344px;
	height:150px;
	z-index:1;
	left: 100px;
	border: 1px solid #CCC;
	display:none;
	background-color: #F9F9F9;
	color: #666;
}
#listar{
	position:absolute;
	
}
</style>
<script type="text/javascript" src="jquery-1.5.1.min.js"></script>
    <script type="text/javascript">
	function mostrardatos(id){
		$("#muestra").css("display", "block");
			$.ajax({
			    async:	true, 
				url:	"muestra_registro.php?id="+id,
				type:	"get",
				dataType:"html",
				success: function(data){
				     var json = eval("(" + data + ")");
				     $('#muestra').html("nombre: "+json.nombre+ 
					 "<br>apellido: "+json.ap+"<br>correo: "+ json.dir+
					 "<br><img src=\""+ json.foto+".JPG\" width=\"71\" height=\"75\" />"
					 );
			        }
		        });
		}
		$(document).ready(function(){
	$("#muestra").mouseleave(function(event){
		event.preventDefault();
		$("#muestra").hide("slow");
	});
});
	</script>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <?php
include("clase_conexion.php");
$buscar_usuarios="select * from datos";
$muestra_datos=mysql_query($buscar_usuarios);
while($row=mysql_fetch_array($muestra_datos)){
$nombre=$row['nombre'];	
$id=$row['id'];
$foto=$row['foto'];
echo "<div id=\"muestra\"></div>";
echo "<div id=\"listar\"><a href=\"#\" onmouseover = \"mostrardatos($id)\"/>$nombre</a></div><br>";
}
?>
</body>
</html>