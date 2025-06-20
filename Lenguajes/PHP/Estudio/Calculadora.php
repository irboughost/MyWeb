<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <h2>Calculadora en PHP</h2>
    <h4>Ingrese 2 numeros</h4>
    <form action="calculadora.php" method="get">
        <p>Seleccione la operacion a realizar</p>
            <input type="radio" name="operacion" value="suma"><label for="suma">Suma</label>
            <input type="radio" name="operacion" value="resta"><label for="resta">Resta</label>
            <input type="radio" name="operacion" value="multiplicacion"><label for="multiplicacion">Multiplicacion</label>
            <input type="radio" name="operacion" value="division"><label for="division">Division</label>
        <p>Numero 1: <input type="number" name="num1"></p>
        <p>Numero 2: <input type="number" name="num2"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>
<?php

$operacion=$_GET['operacion'];
$num1=$_GET['num1'];
$num2=$_GET['num2'];

if ($operacion=="suma"){
  $res=$num1+$num2;
  echo("La suma de los numeros ".$num1. " y ".$num2. " es: ".$res);
}
else if ($operacion=="resta"){
  $res=$num1-$num2;
  echo("La suma de los numeros ".$num1. " y ".$num2. " es: ".$res);
}
else if ($operacion=="multiplicacion"){
  $res=$num1*$num2;
  echo("La suma de los numeros ".$num1. " y ".$num2. " es: ".$res);
}
else if ($operacion=="division"){
  if ($num2>0){
    $res=$num1/$num2;
    echo("La suma de los numeros ".$num1. " y ".$num2. " es: ".$res);
  }
  else {
    echo("no es posible dividir por 0 ");
  }
  
}
else {
  echo("Debe completar el formulario correctamente");
}

  
?>