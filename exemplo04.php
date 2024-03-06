<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex</title>
<style>
    body{
        background-color: gray;
        padding-left: 10px;
        padding-top: 15px;
    }

</style>
</head>
<body>
<form method="post">
        <label for="texto1">Informe algum número:</label>
        <input type="text" name="texto1" id="texto1">
        <br>

        <button type="submite" >Enviar Dados</button>
</form>

<?php

if($_POST){
    $num = $_POST['texto1'];

    switch($num){

        case ($num % 2 ==0):
            echo "O número é par";
        
        break;

        default:
            echo"O número é ímpar";
        
        break;
    }
}
    ?>








