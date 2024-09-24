console.log("hola")
function validarDatos(){
	let nom, nro, app, apm, tele, domi, email;
	
	nro = document.getElementById("numero").value;
	nom = document.getElementById("nombre").value;
	app = document.getElementById("apellidop").value;
	apm = document.getElementById("apellidom").value;
	tele = document.getElementById("telefono").value;
	domi = document.getElementById("domicilio").value;
	email = document.getElementById("correo").value;

if(nro == ""){
	alert("Es obligatorio que ingrese su DNI");
	return 0;
}
if(app == ""){
	alert("Es obligatorio que ingrese su apellido paterno");
	return 0;
}
if((app != "[a-z]-{1,15}")){
	alert("El apellido paterno solo debe contener letras");
	return 0;
}
if(apm == ""){
	alert("Es obligatorio que ingrese su apellido materno");
	return 0;
}
if((apm != "[a-z]-{1,15}")){
	alert("El apellido materno solo debe contener letras");
	return 0;
}
if(nom == 0){
	alert("Es obligatorio que ingrese un nombre");
	return 0;
}
if((nom != "[a-z]-{1,15}")){
	alert("El nombre solo debe contener letras");
	return 0;
}
if(tele == ""){
	alert("Es obligatorio que ingrese su telefono");
	return 0;
}
if(isNaN(telefono)){
	alert("Deben ser valores numerico");
	return 0;
}
if(domi == ""){
	alert("Debe ingresar su domicilio");
	return 0;
}
if(email == ""){
	alert("Se necesita un correo para poder confirmar la solicitud");
	return 0;
}


alert("Datos enviados");
document.librorecla.sbumit();

}
