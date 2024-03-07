<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex</title>
</head>
<body>
<form method="post">
        <label for="texto1">Informe algum número:</label>
        <input type="text" name="texto1" id="texto1">
        <br>

        <button type="submit" >Enviar Dados</button>
</form>
<?php

if($_POST){
    $valor1 = $_POST['texto1'];

    for ($i = 1; $i <= 10; $i++){
    echo $valor1 . " X " . $i . " = " . $valor1 * $i;
    echo '<br>';
    }

    switch($valor1){

        case 1: 
            echo "Você está na tabuada do número 1";
        break;
        case 2: 
                echo "Você está na tabuada do número 2";
        break;
        case 3: 
            echo "Você está na tabuada do número 3";
        break;
        case 4: 
            echo "Você está na tabuada do número 4";
        break;
        case 5: 
            echo "Você está na tabuada do número 5";
        break;
        case 6: 
            echo "Você está na tabuada do número 6";
        break;
        case 7: 
            echo "Você está na tabuada do número 7";
        break;
        case 8: 
            echo "Você está na tabuada do número 8";
        break;
        case 9: 
            echo "Você está na tabuada do número 9";
        break;
        case 10: 
            echo "Você está na tabuada do número 10";
        break;
        default: 
            echo "Somente tabuada do númuro 1 ao 10";
        break;
        }


}