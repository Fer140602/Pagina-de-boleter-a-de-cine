<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <br>
    <center>
        <form id="ejer4" action="proceso4.php" method="post" target="resultado">

            <br>
            <h1>TRIÁNGULO</h1>
            <br>
            <label>Ingresar el primer lado</label><br>
            <input type="text" name="n1" id="n1"><br>
            <br>
            <label>Ingresar el segundo lado</label><br>
            <input type="text" name="n2" id="n2"><br>
            <br>
            <label>Ingresar el tercer lado</label><br>
            <input type="text" name="n3" id="n3"><br>
            <br>
            <input type="submit" name="Calcular" value="Calcular">
            <br>
        </form>
        <br>
        <h5>El resultado sera: </h5>
        <iframe name="resultado" width="500" height="400"></iframe>
    </center>
</body>

</html>