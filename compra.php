<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="styles.php">
        <script src="https://kit.fontawesome.com/f0b91ef361.js" crossorigin="anonymous"></script>
</head>
<body>
        <header class="cabecera">
            <a href="index.php"><img src="img/PRINCIPAL.png" class="principal"></a>
        </header>
         <div class="diseño">
           <ul class="menu">
            <li><a href="peliculas.php">Peliculas</a></li>
            <li><a href="cines.php">Cines</a></li>
            <li><a href="promociones.php">Promociones</a></li>
            <li><a href="proximosestrenos.php">Proximos estrenos</a></li>
            <li><a href="formatos.php">Formatos y salas</a></li>
        </ul>
        </div> 
	<h1 style="background-color: darkblue; text-align: center; color: white;">Realiza tu compra</h1>
	<form>
		<section>
			<div class="form-compra">
			<fieldset>
				<legend>Datos personales</legend>
					<div class="datos-personales">
						<div class="datos-personales">
							<label>Nombres</label>
							<input type="text">
						</div>
						<div class="datos-personales">
							<label>Apellidos</label>
							<input type="text">
						</div>
						<div class="datos-personales">
							<label>DNI</label>
							<input type="text">
						</div>
					</div>
			</fieldset>
			</div>
		</section>
		<section>
			<div class="form-compra">
			<fieldset>
				<legend>Sedes</legend>
				<div class="datos-personales">
					<div class="datos-personales">
						<label>Cines</label><br>
							<input type="radio" name="cede" checked="">CP Caminos del Inca <br>
							<input type="radio" name="cede">CP Arequipa Mall Plaza <br>
							<input type="radio" name="cede">CP Arequipa Paseo Central <br>
							<input type="radio" name="cede">CP Centro Civico <br>
							<input type="radio" name="cede">CP Chiclayo Mall Aventura <br>
							<input type="radio" name="cede">CP Chiclayo Real Plaza <br>
		            </div>
		            <div class="datos-personales">
						<label>Horario</label>
							<select name="hora">
							<option>selection</option>
							<option>3:00 pm</option>
							<option>5:30 pm</option>
							<option>7:00 pm</option>
							<option>9:30 pm</option>
							<option>10:00 pm</option>
							</select><br>
					</div>	
				</div>	
			</fieldset>
			</div>
		</section>
		<section>
			<div class="form-compra">
			<fieldset>
				<legend>Seleccion</legend>
				<div class="datos-personales">
					<div class="datos-personales">
						<label>Fila</label>
							<select name="fila">
							<option>selection</option>
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
							<option>E</option>
							<option>F</option>
							<option>G</option>
							<option>H</option>
							<option>I</option>
							<option>J</option>
							<option>K</option>
							</select><br>
					</div>
					<div class="datos-personales">
						<label>Asiento</label>
							<select name="fila">
							<option>selection</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
	                        <option>10</option>
							</select><br>
					</div>
					<div class="datos-personales">
						<label>Promociones de Entradas</label>
							<select name="fila">
							<option>selection</option>
							<option>Promo-Universitarios</option>
							<option>Promo-Entel</option>
							<option>Promo-Plan-Ideal</option>
							<option>-</option>
							</select><br>
					</div>
					<div class="datos-personales">
						<label>N° tickets</label>
						<input type="text" name="tickets"><br>
					</div>
				</div>	
			</fieldset>
			</div>
		</section>
		<section>
			<div class="form-compra">
			<fieldset>
				<legend>Adicionales</legend>
				<div class="datos-personales">
					<div class="datos-personales">
						<label>Alimentos</label>
							<select name="fila">
							<option>selection</option>
							<option>Cancha Personal</option>
							<option>Cancha Grande</option>
							<option>Nachos</option>
							<option>Papitas</option>
							<option>-</option>
							</select><br>
					</div>
					<div class="datos-personales">
						<label>Bebidas</label>
							<select name="fila">
							<option>selection</option>
							<option>Agua personal</option>
							<option>Gaseosa personal</option>
							<option>Gaseosa Mediana</option>
							<option>Gaseosa grande</option>
							<option>Frugos personal</option>
	                        <option>-</option>
							</select><br>
					</div>
					<div class="datos-personales">
						<label>Promociones</label>
							<select name="fila">
							<option>selection</option>
							<option>Promocion para dos</option>
							<option>Promo Coleccionable</option>
	                        <option>-</option>
							</select><br>
					</div>
					<div class="datos-personales">
						<label>N° tickets</label>
						<input type="text" name="tickets"><br>
					</div>
				</div>	
			</fieldset>
			</div>
		</section>
	</form>
	<form>
		<section>
			<div class="form-compra">
			<fieldset>
				<legend>Validacion</legend>
				<div class="datos-personales">
					<div class="datos-personales">
						<label>Usuario</label>
						<input type="text" name="usuario"><br>
					</div>
					<div class="datos-personales">
						<label>Password</label>
						<input type="password" name="password"><br>
					</div>
					<div class="datos-personales">
						<button onclick="compraRealizada()">COMPRAR</button>
					</div>
				</div>	
			</fieldset>
			</div>
		</section>
	</form>
	
   <footer class="footer-distributed">

      <div class="footer-left">

        <h3><img src="img/cineplanet-logo.png" alt="cplogo" height="150"></h3>
        <label class="footext">El universo Cineplanet también está al alcance de tus dedos</label>
        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">Blog</a>
        
          <a href="#">Pricing</a>
        
          <a href="#">About</a>
          
          <a href="#">Faq</a>
          
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Cineplanet © 2000</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>444 S. Cedros Ave</span> Solana Beach, Multidireccion</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+51 999 665 82</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">cineplanet@company.com.pe</a></p>
        </div>
         <div>
          <i class="fa fa-book"></i>
          <p><a href="libroreclamaciones.php">Libro de Reclamaciones</a></p>
        </div>
      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Sobre la empresa</span>
          Desde hace 2 años somos parte del ranking GPTW. En el 2017 estuvimos dentro de las mejores empresas, gracias al apoyo de nuestros colaboradores.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>


</body>
</html>