<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$_POST["n3"];
$maximo = $n1;
 
        if(empty($n1)){
        echo '<script language="javascript">alert("Es obligatorio que complete el primer numero");</script>';
        return 0;
        }else if(!is_numeric($n1)){
         echo '<script language="javascript">alert("El n1 debe ser numerico");</script>';
        return 0;
        }

        if(empty($n2)){
        echo '<script language="javascript">alert("Es obligatorio que complete el segundo numero");</script>';
        return 0;
        }else if(!is_numeric($n2)){
         echo '<script language="javascript">alert("El n2 numero debe ser numerico");</script>';
        return 0;
        }

        if(empty($n3)){
        echo '<script language="javascript">alert("Es obligatorio que complete el tercer numero");</script>';
        return 0;
        }else if(!is_numeric($n3)){
         echo '<script language="javascript">alert("El n3 debe ser numerico");</script>';
        return 0;
        }

        

        if ( $n2 > $maximo )
        $maximo = $n2;
 
        if ( $n3 > $maximo )
        $maximo = $n3;
 
        $i = $maximo;
        while (($i % $n1 != 0) || ($i % $n2 != 0) || ($i % $n3 != 0))
        $i++;

        echo"<td>".$i."</td>";
?> 