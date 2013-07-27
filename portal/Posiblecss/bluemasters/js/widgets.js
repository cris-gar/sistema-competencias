
//widget con la informacion minima visible de un profesor
var Profesor_widget = function(json_data){
	/*json_data diccionario con la informacion basica del profesor
	return: widget con la informacion basica*/
	
	var template = "<div class=\"resume\">"+
			"<img src=img_url><div><h3>name</h3><h4>depto</h4></div>"+
	"</div>";
	
	var name = json_data.name;
	var depto = json_data.depto;
	var img_url = json_data.img_url;

	template = template.replace("name", name);
	template = template.replace("depto", depto);
	template = template.replace("img_url", img_url);
	
	document.write(template)	
}
