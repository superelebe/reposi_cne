function nuevoAjax(){ 
	/* Crea el objeto AJAX. Esta funcion es generica para cualquier utilidad de este tipo, por
	lo que se puede copiar tal como esta aqui */
	var xmlhttp=false;
	try{
		// Creacion del objeto AJAX para navegadores no IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(e){
		try{
			// Creacion del objet AJAX para IE
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E){
			if (!xmlhttp && typeof XMLHttpRequest!='undefined') xmlhttp=new XMLHttpRequest();
		}
	}
	return xmlhttp; 
}

function obtenerSubArea(id){
	var ajax = nuevoAjax();
	ajax.open("GET", "consulta.php?action=obtenerSubArea&id="+id, true);
	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4){
			//alert(ajax.responseText);
			document.getElementById('muestrasubarea').innerHTML = ajax.responseText;
		}
	}
	ajax.send(null);
}

function obtenerCiudad(id){
	var ajax = nuevoAjax();
	ajax.open("GET", "consulta.php?action=obtenerCiudad&id="+id, true);
	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4){
			//alert(ajax.responseText);
			document.getElementById('muestraciudad').innerHTML = ajax.responseText;
		}
	}
	ajax.send(null);
}

function obtenerCertsino(id){
	var ajax = nuevoAjax();
	ajax.open("GET", "consulta.php?action=obtenerCertsino&id="+id, true);
	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4){
			//alert(ajax.responseText);
			document.getElementById('muestracertsino').innerHTML = ajax.responseText;
		}
	}
	ajax.send(null);
}

function obtenerSubmit(id){
	var ajax = nuevoAjax();
	ajax.open("GET", "consulta.php?action=obtenerSubmit&id="+id, true);
	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4){
			//alert(ajax.responseText);
			document.getElementById('muestrasubmit').innerHTML = ajax.responseText;
		}
	}
	ajax.send(null);
}



