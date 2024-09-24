<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LIBRO DE RECLAMACIONES</title>
	<script type="text/javascript" src="jsProyect/jsLibro.js"></script>
	
	<link rel="stylesheet" type="text/css" href="styles/libro.php">
	

</head>
<body>
	<header class="cabecera">
           <a href="index.php"><img src="img/PRINCIPAL.png" width="360" height="120"></a>
           <h1 class="texto">LIBRO DE RECLAMACIONES</h1>
    </header>
    <form id="reclama">
    	<fieldset class="contenido">
    	<legend class="titulo">1.- IDENTIFICACIONES DEL CONSUMIDOR RECLAMANTE</legend>
    <div>
	<label>Tipo de Documento</label> 
	<select>
		<option value="1" >DNI</option>
		<option value="0" >CE</option>
		<option value="2" >Otros</option>
	</select>
	</div>
	<br>
	<div>
	<label for="inputNroDoc">Número de Documento (*)</label> 
	<input type="text" name="numero" id="numero">
	</div>
	<br>
	<div>
		<label>Apellido Paterno(*)</label>
		<input type="text" name="apellidop" id="apellidop">
	</div>
	<br>
	<div>
		<label>Apellido Materno(*)</label>
		<input type="text" name="apellidom" id="apellidom">
	</div>
	<br>

	<div>
		<label>Nombres(*)</label>
		<input type="text" name="nombre" id="nombre">
	</div>
	<br>
	<div>
		<label>Telefono</label>
		<input type="text" name="telefono" id="telefono">
	</div>
	<br>
	<div>
		<label>Domicilio</label>
		<input type="text" name="domicilio" id="domicilio">
	</div>
	<br>
	<div>
		<label>E-MAIL(*)</label>
		<input type="email" name="correo" id="correo" >
	</div>
    </fieldset>
     
    <br>
    <br>
    
    	<fieldset class="contenido">
    	<legend class="titulo">2.- IDENTIFICACIONES DEL BIEN CONTRATADO</legend>
    <div>
	<label>Lugar de la ocurrencia</label> 
	<select>
		<option value="1" >Seleccione</option>
		<option value="0" >Complejo</option>
		<option value="2" >Compras Online</option>
		<option value="3" >Programa SocioCinePlanet</option>
		<option value="4" >Otros</option>
	</select>
	</div>
	<br>
	<div>
	<label>Area de la ocurrencia</label> 
	<select>
		<option value="1" >Seleccione</option>
		<option value="0" >Baños</option>
		<option value="2" >Boleteria</option>
		<option value="3" >Dulceria</option>
		<option value="4" >Salas</option>
		<option value="5" >Taquillas</option>
		<option value="6" >Otros</option>
	</select>
	</div>
	<br>
	<div>
	<label>Motivo</label> 
	<select>
		<option value="1" >Seleccione</option>
		<option value="0" >Atencion deficiente</option>
		<option value="2" >Productos en mal estado</option>
		<option value="3" >Funcion Atrasada</option>
		<option value="4" >Establecimiento en mal estado</option>
		<option value="5" >Mala señalizacion</option>
		<option value="6" >Otros</option>
	</select>
	</div>
	<br>
	<div>
		<label>Tipo</label>
		<br>
	<input type="radio" name="tipo" checked="">Producto (Relacionado a la compra de un bien, sustentado con comprobante de pago.) <br>
	<input type="radio" name="tipo" checked="">Servicio (Relacionado al malestar o descontento respecto a la atención recibida.)<br>
	</div>
	<br>
	<div>
		<label>Descripción del bien contratado</label><br>
		<textarea cols="80" rows="8"></textarea>
	</div>
    	</fieldset>
    <br>
    <br>
    
    <fieldset class="contenido">
    	<legend class="titulo">3.- DETALLE DEL RECLAMACIÓN</legend>
    	<input type="radio" name="clase" checked="">Reclamo(1)<br>
	<input type="radio" name="clase" checked="">Queja(2)<br>
	<br>
	<div>
		<label>Detalle</label><br>
		<textarea cols="80" rows="8"></textarea>
	</div>
	<br>
	<div>
		<label>Pedido</label><br>
		<textarea cols="80" rows="8"></textarea>
	</div>
	<br>
	<div>
		<input type="checkbox" name="nadar">Estoy de acuerdo con lo ingresado en esta Hoja de Reclamaciones. Asimismo confirmo que los datos ingresados son tomados como firma de esta solicitud.<br>
		<input type="checkbox" name="leer">He leído y acepto la <a href="https://cdn.cineplanet.com.pe/terminos-y-condiciones/Politica_de_Privacidad.pdf?language_id=1" target="_blank"> Política de Privacidad</a><br>
	</div>
	<br>
	
    </fieldset>
    <br>
    <div>
		<input type="button" onclick="validarDatos()" name="envio" value="Enviar">
	</div>

    </form>

<footer>
	<div>
					<ul>
						<li><b>NOTA</b> "Cineplex S.A., queda facultada a efectuar
							respuesta de la queja en el correo electrónico consignado por el
							consumidor, la misma que se realizará en los términos concedidos
							por la norma. Cineplex S.A. mantendrá un registro de los correos
							electrónicos remitidos como respuesta".</li>
						<li><b>(1) RECLAMO:</b> Disconformidad relacionada a los
							productos o servicios.</li>
						<li><b>(2) QUEJA:</b> Disconformidad no relacionada a los
							productos o servicios; o malestar o descontento respecto a la
							atención al público</li>
						<li>*La formulación del reclamo no impide acudir a otras vías
							de solución de controversias ni es requisito previo para
							interponer una denuncia ante el INDECOPI.</li>
						<li>*El Proveedor deberá dar respuesta al reclamo en un plazo
							no mayor a treinta (30) días calendario, pudiendo ampliar el
							plazo hasta por treinta (30) días más, previa comunicación al
							consumidor.</li>
					</ul>
	</div>
</footer>    
</body>
</html>