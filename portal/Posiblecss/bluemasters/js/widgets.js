//widget con la informacion minima visible de un profesor
var Profesor_widget = function(data) {
	/*
	 * json_data diccionario con la informacion basica del profesor return:
	 * widget con la informacion basica
	 */
	this.template = "<div class=@resume>"
			+ "<img class = @img_perfil src=img_url><div class=@data><h3>name</h3><h4>depto</h4></div>"
			+ "</div>";

	this.name = data.name;
	this.depto = data.depto;
	this.img_url = data.img_url;

	/* agregar los datos a la plantilla */
	this.template = this.template.replace("name", this.name);
	this.template = this.template.replace("depto", this.depto);
	this.template = this.template.replace("img_url", this.img_url);

	/* setear los estilos en el widget */
	this.template = this.template.replace("@resume", "resume")
	this.template = this.template.replace("@img_perfil", "img_perfil")
	this.template = this.template.replace("@data", "data")

	/* metodos de la clase */

	/* escribir el contenido del widget */
	function write() {
		document.write(this.template);
	}

}

$(function() {
	$("#sortable").sortable();
	$("#sortable").disableSelection();
});

$(".resume").click(function() {
	$(this).css({
		"width" : "40%"
	});
})

var ajax_rand_profesores = function() {
	/* implementacion aqui */
}

/* evento cuando se carga pa pagina y carga a todos los profesores */
$(window).onload(function() {
	/* por medio de ajax extraemos las cartas de presentacion */

	var profesores = ajax_rand_profesores();

	for (profesor in profesores) {

		/* esperar un momento antes de cargar al nuevo profesor */
	}
})
