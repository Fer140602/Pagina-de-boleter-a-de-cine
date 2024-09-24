<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form>
            <table border="1">
                <tr>
                <td>Nro</td>
                <td>Numero</td>
                
                <td>Suma de Digitos</td>
                
                <td>Descripcion</td>
                </tr>
                
                <?php 
                //obteniendo el numero ingresado
               
		$numero=$_GET['num'];

        if(!is_numeric($numero)){
            echo '<script language="javascript">alert("Es obligatorio que ingrese un numero");</script>';
            return 0;
        }
      else
		for ($i=1; $i <= $numero; $i++) { 
			$numalet=rand(300,2000);
            ?><tr>
                <td><?=$i?></td>
                <td><?=$numalet?></td>
                
            <?php
            $suma=0;
            while($numalet>0){
                $suma=$suma+$numalet%10;
                $numalet=$numalet/10;
            }
                ?>
                <td><?=$suma?></td>
                <?php
            $descripcion;
            if($suma%2==0){
                $descripcion="Numero Par";
            }else{
                $descripcion="Numero Impar";
            }?>
            <td><?=$descripcion?></td>
        
            <?php
        }
        ?>
            </table>
        </form>
    </body>
</html><?