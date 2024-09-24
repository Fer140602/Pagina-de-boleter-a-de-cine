<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    
</head>

<body>

    <center>
        <h1>Resolucion</h1>
        <br>
        <form action="proceso1.php" method="post" target="resultado">
            <label>Nombre del Titular:</label>
            <br>
            <input type="text" name="nombre" placeholder="Ingrese su nombre">
            <br>
            <br>
            <label>Tipo de Tarjeta:</label>
            <br>
            <select name="card">
                <option value="1">VISA</option>
                <option value="2">MasterCard</option>
                <option value="3">America Express</option>
            </select>
            <br>
            <br>
            <label>Monto a Solicitar</label>
            <br>
            <input type="text" name="monto" placeholder="Ingrese monto a pagar">
            <br>
            <br>
            <label>Cantidad de meses a fraccionar</label>
            <br>
            <select name="cuotas">
                <option value="1">Cuota 1</option>
                <option value="2">Cuota 2</option>
                <option value="3">Cuota 3</option>
                <option value="4">Cuota 4</option>
                <option value="5">Cuota 5</option>
                <option value="6">Cuota 6</option>
                <option value="7">Cuota 7</option>
                <option value="8">Cuota 8</option>
                <option value="9">Cuota 9</option>
                <option value="10">Cuota 10</option>
                <option value="11">Cuota 11</option>
                <option value="12">Cuota 12</option>

            </select>
            <br>
            <br>
            <input type="submit" value="Calcular">
        </form>
        <br>
        <iframe name="resultado" width="400" height="400"></iframe>

    </center>



</body>

</html>