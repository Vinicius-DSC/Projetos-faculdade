<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Site</title>
</head>
<body>
    <header><h1>Introduçao</h1></header>
    <?php
    $nome= "vinicius";
    $idade= 18;
    echo "ola meu nome é $nome e tenho $idade anos!";     
    $a= 4;
    $b= 2;
    $soma= $a + $b;
    $subtraçao= $a - $b;
    $produto= $a * $b;
    $potencia= $a ** $b;
    $divisao= $a / $b;


    echo "sabendo que a= 2 e b=4: <br>
    A soma é: $soma <br>
    A subtraçao é: $subtraçao <br>
    O produto é: $produto <br>
    A potencia é: $potencia <br>
    A divisao é: $divisao <br>
    ";
    

    ?>
</body>
</html>