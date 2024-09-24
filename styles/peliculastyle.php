<?php 

header("Content-Type: text/css; charset: UTF-8");

?>
body{
    padding: 40px; 
    background-color: aliceblue;
    margin: auto;
    padding: 0;
    color: ghostwhite;
    background-image: url(../img/4882066.jpg);
}
p{
    padding: 40px; 
    margin: auto;
    padding: 0;
}
header{
    text-align: center;
}

footer{
    text-align: -webkit-center;
    font-weight: bolder;
    font-family: sans-serif;
    color: dimgrey;
    text-decoration-line: underline;
}
h1{
    background-color: #537CE4; 
    text-align: center;
}
h2{
    background-color: #79B7F1; 
    text-align: center;
}

.fila1{
    text-align: center;
    border: none;
}
.fila2{
    text-align: center;
    color: ghostwhite;
}
.borfila{
    border-style: dotted;
    border-color: white;
}   

#subtitulo2{
    background-color: #245F96; 
    color: whitesmoke;
}
.cabecera{
    text-align: center;
}
.principal{
    width: 450px;
}
.diseño{
    background: #092327;
}
.navegacion a{
    text-decoration: none;
    color: white;
    font-size: 16px;
    padding: 0 50px;
}
.recomendacion{
    display: block;
    margin: 0px auto;
    background: whitesmoke;
    width: 1400px;
    height: 400px;
}
.video{
    width: 1250px;
    height: 300px;
}
#subtitulo{
    font-family: Arial, Helvetica, sans-serif;
}

#promociones{
    font-family: Times New Roman, Helvetica, sans-serif;
    border-style: outset;
}

#subpromos{
    font-family: Times New Roman, Helvetica, sans-serif;
    color: darkblue;
    border-style: inset;
}
.compraPeli{
	alt: "";
	cursor: pointer;
	height: 500px;
	width: 370px;
}
.compraPeli:hover{
    border-radius: 4px;
    box-shadow: 0 2px 5px 0 rgb(234 131 131 / 90%);
    transition: .3s ease-in-out;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}


.footer-distributed{
  background: #666;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}
.footext{
    color: white;
}
/*proximos estrenos*/
.sipnosis{  
    padding: 70px;
}
.contenedor-estrenos{
    display: flex;  
    margin-left: auto;
    margin-right: auto;
}
.item{
    flex-basis:20%;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
.videoestreno{
    text-align: center;
}
/*prueba*/
h4, h2,small,a{
    margin: 0;
    padding: 0;
}
a{
    text-decoration: none;
}
.Carousel{
    width: 100%;
}
.Carousel h2{
    font-size: 26px;
    line-height: 38px;
    padding-bottom: 24px;
    opacity: .9;
    text-transform: uppercase;
    letter-spacing: 10px;
    text-align: center;
}

/* images */

.slick-list{
    position: relative;
    display: flex;
    align-items: center;
    width: fit-content;
    height: 304px;
    padding: 10px 0px;
    margin: 0px auto;
    max-width: 90vw;
    overflow: hidden;
}
.slick-track{
    position: relative;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    transition: .5s ease-in-out;
}
.slick{
    position: relative;
    width: 275px;
    padding: 0 18px;
    float: left;
    box-sizing: border-box;
    display: flex;
    height: 100%;
}
.slick h4{
    position: absolute;
    z-index: 1;
    font-size: 22px;
    line-height: 23px;
    color: #fff;
    padding: 15px;
}
.slick h4 small{
    font-size: 15px;
    display: block;
}
.slick a img{
    object-fit: cover;
    height: 300px;
    width: 100%;
    border-radius: 4px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.5);
    transition: .3s ease-in-out;
}
.slick a img:hover{
    opacity: .85;
}

/* buttons */

.slick-arrow{
    border-radius: 30px;
    background-color: #fff;
    position: absolute;
    z-index: 4;
    width: 48px;
    height: 48px;
    text-align: center;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.15);
    border: 0;
    cursor: pointer;
}
.slick-arrow:focus{
    outline: 0;
}
.slick-arrow svg{
    width: 12px;
    height: 100%;
    color: rgba(0,0,0,.7);
}
.slick-prev{
    left: 0px;
}
.slick-next{
    right: 0px;
}
.menu{
    list-style: none;
    padding: 0;
    background: #092327;
    width: 100%;
    margin: auto;
}

.menu li a{
    text-decoration: none;
    color: white;
    padding: 20px;
    display: block;
}

.menu li{
    display: inline-block;
    text-align: center;
}

.menu li a:hover{
    background: #6ca9e4;
}
.minImg{
	height: 300px;
	width: 200px;
}
.movieModal
{
	margin-top: 8px;
	font-size: 15px;
	color: darkblue;
	font-weight: bold;
}
.top_movies
{
	color: white;
    display: block;
    font-size: 30px;
    margin-top: 10px;
}
/*ESTILOS DE CARRUSEL DE IMAGENES*/

.slider{
  width: 100%;
  height: auto;
  overflow: hidden;
}
.slider ul{
    display: flex;
    animation: cambio 20s infinite alternate linear;
    width: 400%;
}
.slider li{
    width: 100%;
    list-style: none;
    height: 500px;
}
.slider img{
    width: 100%;
    height: 100%;
}

@keyframes cambio{
    0%{margin-left: 0;}
    20%{margin-left: 0;}
    
    25%{margin-left: -100%;}
    45%{margin-left: -100%;}
    
    50%{margin-left: -200%;}
    70%{margin-left: -200%;}
    
    75%{margin-left: -300%;}
    100%{margin-left: -300%;}
}
@media only screen and (min-width:320px) and (max-width:768px){
.slider, .slider ul, .slider img{
    height: 100vh;
}
}