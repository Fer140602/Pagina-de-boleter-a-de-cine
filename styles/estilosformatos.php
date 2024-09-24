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
.listanord1{
    list-style: none;
    padding: 0;
    background: #092327;
    width: 100%;
    margin: auto;
}
.lista1{
    display: inline-block;
    text-align: center;
}
.referencia1{
    text-decoration: none;
    color: white;
    padding: 20px;
    display: block;
}
#subtitulo1{
    text-align: center;
    color: lightblue;
}
th{
    color: #984b4b;
    font-weight: bold;
    font-size: 20px;
}
.listanord2{
    background-color: rgb(26, 26, 86);
}
.lista2{
    text-align: left;
    color: whitesmoke;
    font-size: 24px;
}
.lista3{
    color: whitesmoke;
    
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

.formatos{
    background: rgb(26, 26, 86);
    padding: 20px;
    display: flex;
    justify-content: space-between;
    text-align: center;

}

.formapromo{
    background: rgb(26, 26, 86);
    padding: 35px;
    display: flex;
    justify-content: space-between;
    justify-content: space-around;
    text-align: center;

}

.tipos{
    width: 350px;
    height: 150px;
}
.tipcanchita{
    width: 350px;
    height: 300px;
}
.texto{
    background-color: aliceblue;
    display: inline-block;
    text-align: center;
    display: flex;
    justify-content: center;
}
.textot{
    display: flex;
    justify-content: space-between;
    text-align: center;
    justify-content: space-around;
    border-style: groove;
    color: ghostwhite;
}
.titupromos{
   
    display: flex;
    justify-content: space-between;
    justify-content: space-around;
    text-align: center; border-style: groove;
    color: #CE870A;
}

.sipnosis{
    
    padding: 20px;
}
.image{
    align-content: space-between;
    padding: 50px;
}
.nomPeli{
    text-align: font-family: Arial, Helvetica, 
    sans-serif;color: darkblue;
}
.compraPeli{
    alt: "" ;
    height: 500px;
}

.{
    alt: "" ;
    height: 500px;
}
.row{
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.headText{
    color: white;
    font-size: 30px;
    font-weight: bold;
    text-align-last: center;
}
.texto_expandir{
    position: relative;
    overflow: hidden;
     max-height: 0px;
    transition: max-height:  0.4s ease-out;
}
.abrir_cerrar{
    max-height: 500px;
    transition: max-height:  0.5s ease-in;
}
.btn-expandir{
    background-color: unset;
    border: 0px;
    height: 50px;
    width: 200px;
}
.btn-expandir:hover{
    background-color: whitesmoke;
    color: black;
}
.content{
    width: 100%;
    min-height: 200px;
    height: auto;
    display: flex;
    justify-content: flex-start;
}
.content-collapse{
    margin: 30px;
    padding: 30px;
    width: auto;
    height: auto;
    border: 1px solid darkgray;
}
.content-collapse section:nth-child(n) p{
    text-align: justify;
    position: relative;
    color: white;
    font-size: 20px;
}
.headWeare{
    text-align-last: center;
    border-bottom: 1px solid white;
    padding-bottom: 20px;
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
  padding: 25px 40px;
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
.datos-personales{
    padding: 5px;
    margin:auto; 
}

.form-compra{
    padding-top: 10px;
    padding-right: 500px;
    padding-bottom: 10px;
    padding-left: 500px;
    text-transform: capitalize;
    text-decoration-color: #351F1F;
}
/*estilos de promociones*/
.promostyle{
        color: white;
    font-weight: bold;
    text-align: -webkit-center;
    border: 6px solid #66aaa1;
    margin: 30px;
    background-color: cadetblue;
}
.promostyledos{
        color: white;
    font-weight: bold;
    text-align: -webkit-center;
    border: 6px solid #469a5b;
    margin: 30px;
    background-color: #368956;
}
.promostyletres{
    color: white;
    font-weight: bold;
    text-align: -webkit-center;
    border: 6px solid #cf0808;
    margin: 30px;
    background-color: #f43416;
}
.recomendacion{
    display: block;
    margin: 0px auto;
    background: whitesmoke;
    width: 1400px;
    height: 400px;
}
.formatos{
    width: auto;
    height: 500px;
    background: rgb(26, 26, 86);
    display: flex;
}
#format{
    width: 430px;
    height: 240px;
  text-decoration: none;
}
.tipos{
    background: #cbcccc3c;
    width: 430px;
    height: 430px;
    margin: auto;
    text-align: center;
    border-radius: 18px;
    
}