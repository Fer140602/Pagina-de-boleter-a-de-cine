<table border="2px">

  <tr>
    <th>Cuotas</th>
    <th>Cuota mensual</th>
    <th>Pago del interes</th>
    <th>Pago del Capital</th>
    <th>Saldo</th>
    

  </tr>
  <?php

$nombre=$_POST["nombre"];
$card=$_POST["card"];
$p=$_POST["monto"];
$n=$_POST["cuotas"];

if($nombre==""){
  echo '<script language="javascript">alert("Es obligatorio que ingrese nombre");</script>';
  return 0;
}
if(empty($p)){
  echo '<script language="javascript">alert("Es obligatorio que complete el monto");</script>';
  return 0;
}else if(!is_numeric($p)){
  echo '<script language="javascript">alert("El monto debe ser un valor numerico");</script>';
  return 0;
}


//========================
//        Visa
//         3%
//========================


if ($card==1) {
  $x=0.03;
  $tipo="VISA ";
  $porcentaje="3%";

  // $p = Monto
  // $x = Porcentaje
  // $n = Cuotas
  // $nombre = Nombre

  $cuotas=(($p*$x)/(1-pow((1+$x),-$n)));
  $pagointeres=$x*$p;
  $pagocapital=$cuotas-$pagointeres;
  $saldo=$p-$pagocapital;
  for ($i=1; $i <= ($n); $i++) { 

    echo "<tr>";
    echo"<td>".$i."</td>";
    echo"<td>".number_format($cuotas,2)."</td>";
    echo"<td>".number_format($pagointeres,2)."</td>";
    echo"<td>".number_format($pagocapital,2)."</td>";
    echo"<td>".number_format($saldo,2)."</td>";
    echo"</tr>";
    $pagointeres=$saldo*$x;
    $pagocapital=$cuotas-$pagointeres;
    $saldo=$saldo-$pagocapital;
   
 }
}

 //========================
  //      Mastercard
  //         3.5%
  //========================

if ($card==2) {
  $x=0.035;
  $tipo="Mastercard";
  $porcentaje="3.5%";

  // $p = Monto
  // $x = Porcentaje
  // $n = Cuotas
  // $nombre = Nombre

  $cuotas=(($p*$x)/(1-pow((1+$x),-$n)));
  $pagointeres=$x*$p;
  $pagocapital=$cuotas-$pagointeres;
  $saldo=$p-$pagocapital;

for ($i=1; $i <= ($n); $i++) { 

 echo "<tr>";
 echo"<td>".$i."</td>";
 echo"<td>".number_format($cuotas,2)."</td>";
 echo"<td>".number_format($pagointeres,2)."</td>";
 echo"<td>".number_format($pagocapital,2)."</td>";
 echo"<td>".number_format($saldo,2)."</td>";
 echo"</tr>";
 $pagointeres=$saldo*$x;
 $pagocapital=$cuotas-$pagointeres;
 $saldo=$saldo-$pagocapital;
}
}

//========================
//     American Express 
//            4%
//========================

if ($card==3) {
  $x=0.04;
  $tipo="American Express";
  $porcentaje="4%";

   // $p = Monto
  // $x = Porcentaje
  // $n = Cuotas
  // $nombre = Nombre

  $cuotas=(($p*$x)/(1-pow((1+$x),-$n)));
  $pagointeres=$x*$p;
  $pagocapital=$cuotas-$pagointeres;
  $saldo=$p-$pagocapital;

for ($i=1; $i <= ($n); $i++) { 

echo "<tr>";
echo"<td>".$i."</td>";
echo"<td>".number_format($cuotas,2)."</td>";
echo"<td>".number_format($pagointeres,2)."</td>";
echo"<td>".number_format($pagocapital,2)."</td>";
echo"<td>".number_format($saldo,2)."</td>";
echo"</tr>";
$pagointeres=$saldo*$x;
$pagocapital=$cuotas-$pagointeres;
$saldo=$saldo-$pagocapital;

}
}

?>
  


</table>