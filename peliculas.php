<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script defer src="jsProyect/peliculas.js"></script>
        <link rel="stylesheet" type="text/css" href="styles/peliculastyle.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://kit.fontawesome.com/f0b91ef361.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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

        <section style="margin-bottom:20px">
                            <div class="slider">
    <ul style="padding-left: 0rem !important; ">
        <li>
            <img src="img/Sonic.jpg">
        </li>
        <li>
            <img src="img/straneposter.jpg">
        </li>
        <li>
            <img src="img/lightyear.jpg">
        </li>
        <li>
            <img src="img/thor.jpg">
        </li>
    </ul>
</div>
            <h1>Top Peliculas de la semana</h1>
                <div class="row col-lg-12" style="    text-align: -webkit-center;">
                    <div class="col-lg-4">
                        <span class="top_movies">Top 1</span>
                        <img src="img/poster1.jpg" class="compraPeli" width="450px"data-bs-toggle="modal" data-bs-target="#firstModal">    
                    </div>
                    <div class="col-lg-4">
                        <span class="top_movies">Top 2</span>
                        <img src="img/apocalispis.jpg" class="compraPeli"
                        data-bs-toggle="modal" data-bs-target="#secondModal">
                    </div>
                    <div class="col-lg-4" style="cursor: pointer;">
                        <span class="top_movies">Top 3</span>
                        <img src="img/poster4.png" class="compraPeli"
                        data-bs-toggle="modal" data-bs-target="#thirdModal"
                        >
                    </div>
                </div>

                <div class="row col-lg-12" style="    text-align: -webkit-center;">
                    <div class="col-lg-4">
                        <span class="top_movies">Top 4</span>
                        <img src="img/batman.jpg" class="compraPeli">    
                    </div>
                    <div class="col-lg-4">
                        <span class="top_movies">Top 5</span>
                        <img src="img/morbius.jpg" class="compraPeli">
                    </div>
                    <div class="col-lg-4">
                        <span class="top_movies">Top 6</span>
                        <img src="img/coda.jpg" class="compraPeli" >
                    </div>
                </div>
        </section>
</body>
<div class="modal fade" id="firstModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Acerca de:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="col-sm-6">
             <img src="img/poster1.jpg" class="minImg">
             <label class="movieModal"> Película : Doctor Strange in the Multiverse of Madness</label>
             <label class="movieModal">Duración : 2 horas con 15 minutos</label>
        </div>
        <div class="col-sm-6">
        <h3>Sinopsis:</h3>
        El Dr. Stephen Strange abre un portal al multiverso al utilizar un hechizo prohibido. Ahora su equipo debe enfrentarse a una amenaza enorme.</div>
      </div>
      <div class="modal-footer" style="justify-content: center;">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
        <button type="button" class="btn btn-primary" onClick="redirect()">Quiero ver esta película!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="secondModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Acerca de:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="col-sm-6">
             <img src="img/apocalispis.jpg" class="minImg">
             <label class="movieModal"> Película : Apocalipsis</label>
             <label class="movieModal">Duración : 2 horas con 30 minutos</label>
        </div>
        <div class="col-sm-6">
        <h3>Sinopsis:</h3>
        Cuando una terrible enfermedad se empieza extender por todos los pasillos de un hotel, un par de víctimas tratarán de luchar por la supervivencia y de escapar de un oscuro corredor de una horrible matanza.</div>
      </div>
      <div class="modal-footer" style="justify-content: center;">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
        <button type="button" class="btn btn-primary" onClick="redirect()">Quiero ver esta película!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="thirdModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Acerca de:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="col-sm-6">
             <img src="img/poster4.png" class="minImg">
             <label class="movieModal"> Película : Doctor Strange in the Multiverse of Madness</label>
             <label class="movieModal">Duración : 2 horas con 15 minutos</label>
        </div>
        <div class="col-sm-6">
        <h3>Sinopsis:</h3>
       Cuando una terrible enfermedad se empieza extender por todos los pasillos de un hotel, un par de víctimas tratarán de luchar por la supervivencia y de escapar de un oscuro corredor de una horrible matanza.</div>
      </div>
      <div class="modal-footer" style="justify-content: center;">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
        <button type="button" class="btn btn-primary" onClick="redirect()">Quiero ver esta película!</button>
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