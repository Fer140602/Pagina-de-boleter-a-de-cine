<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="jsProyect/indexFunction.js"></script>
         <script src="https://kit.fontawesome.com/f0b91ef361.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="styles.php">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
       
        
</head>
<body>
     <script defer src="jsProyect/indexFunction.js"></script>
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
            <li><a href="EJERCICIOS/ejercicio.html"> Ejercicios</a></li>
        </ul>
        </div> 

<div class="Carousel">
        <center>
            <h3 id="subtitulo1">Más Taquillera</h3>
            <img src="img/strange.png" alt="strange" height="360" style="margin-bottom: 20px;">
        </center>
        <h2>Estrenos de la semana</h2>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
           
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="peliculas.php">
                            <h4><small>Batman</small>Watch</h4>
                            <picture>
                                <img src="./img/batman.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="peliculas.php">
                            <h4><small>Apocalipsis</small>Watch</h4>
                            <picture>
                                <img src="./img/apocalispis.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="peliculas.php">
                            <h4><small>Kingsman: el Legado</small>Watch</h4>
                            <picture>
                                <img src="./img/kings.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="peliculas.php">
                            <h4><small>Jurassic World</small>Watch</h4>
                            <picture>
                                <img src="./img/jusrassic.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="peliculas.php">
                            <h4><small>Morbius</small>Watch</h4>
                            <picture>
                                <img src="./img/descarga.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="peliculas.php">
                            <h4><small>Ambulance</small>Watch</h4>
                            <picture>
                                <img src="./img/Ambulance.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
            
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
           <script defer src="jsProyect/indexFunction.js"></script>

    <div class="content">
        <div class="content-collapse">
    <section>
        <div class="col-lg-12 headWeare">
            <span class="headText"> <i class="fa-solid fa-people-line"></i> Quienes Somos</span>
            <p>Cineplanet es una cadena de cine peruana que cuenta con 20 sedes, de
                        los cuáles 10 se encuentran en el Perú.
                        Su compromiso como empresa es conectar y alegrar la vida de las personas.</p>
        </div>
        <div class="row" style="text-align-last: center; margin-top: 20px;">
        <div class="col-lg-6"    style="border-right: 2px solid white;" >
            <span class="headText"><i class="fa-solid fa-hands-praying"></i>   
               Misión</span>
         <p>
                    Especificamente crear y brindar una experiencia de entretenimiento
                        inolvidable para los cinéfilos y público en general.
        </p></div>
        <div class="col-lg-6">         
           <span class="headText">  
            <i class="fa-solid fa-eye"></i>  Visión</span>
         <p>
                   Ser una de las 5 mejores cadenas de cines más grandes de Sudamérica
                        que se diferencia por su buen nivel de servicio.
        </p></div>
    </div>
    </section>
    </div>
    </div>

<!-- Button trigger modal activa modal(dont forget!!!!)-->
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Launch static backdrop modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Bienvenido a la web Cineplanet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./img/mensajevacuna.jpeg" alt="Image" style="width: -webkit-fill-available;">
      </div>
      <div class="modal-footer" style="justify-content: center;">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entiendo</button>
      </div>
    </div>
  </div>
</div>

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

    <!--Importaciones de estilos -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="jsProyect/indexFunction.js"></script>
</body>

</html>