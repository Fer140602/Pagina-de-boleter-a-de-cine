  <?php

  $lad_1= $_POST["n1"];
  $lad_2 = $_POST["n2"];
  $lad_3 = $_POST["n3"];

  if(empty($lad_1)){
    echo '<script language="javascript">alert("Es obligatorio coloque el lado 1");</script>';
    return 0;
  }else if(!is_numeric($lad_1)){
    echo '<script language="javascript">alert("Lado 1 debe ser numerico");</script>';
    return 0;
  }

  if(empty($lad_2)){
    echo '<script language="javascript">alert("Es obligatorio que coloque el lado 2");</script>';
    return 0;
  }else if(!is_numeric($lad_2)){
    echo '<script language="javascript">alert("Lado 2 debe ser numerico");</script>';
    return 0;
  }

  if(empty($lad_3)){
    echo '<script language="javascript">alert("Es obligatorio que coloque el lado 3");</script>';
    return 0;
  }else if(!is_numeric($lad_3)){
    echo '<script language="javascript">alert("Lado 3 debe ser numerico");</script>';
    return 0;
  }


  if ($lad_1 + $lad_2 > $lad_3 && $lad_1 + $lad_3 > $lad_2 && $lad_2 + $lad_3 > $lad_1){
    $val="Es un triángulo";
    if ($lad_1==$lad_2 && $lad_2==$lad_3) {
      $tipo="Triángulo Equilátero";
    }else if ($lad_1==$lad_2 || $lad_2==$lad_3 || $lad_1==$lad_3){
      $tipo="Triángulo Isósceles";
    }else{
      $tipo="Triángulo Escaleno";
    }

    $smp=(($lad_1+$lad_2+$lad_3)/2);

    $Area=(sqrt($smp*($smp-$lad_1)*($smp-$lad_2)*($smp-$lad_3)));

    echo"NOTA : ".$val."<br>";
    echo"LADO 1 : ".$lad_1."<br>";
    echo"LADO 2 : ".$lad_2."<br>";
    echo"LADO 3 : ".$lad_3."<br>";
    echo"TIPO : ".$tipo."<br>";
    echo"AREA : ".$Area."<br>";
  }else{
    echo '<script language="javascript">alert("No es un triangulo, volver a ingresar valores validos");</script>';
  }

  ?>
