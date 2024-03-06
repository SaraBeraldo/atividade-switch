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
        <label for="texto1">Informe sua idade:</label>
        <input type="text" name="texto1" id="texto1">
        <br>

        <button type="submite" >Enviar Dados</button>
</form>

<?php

if($_POST){
    $idade = $_POST['texto1'];

    switch($idade){

        case $idade >= 18:
            echo "Você é De maior.";
        
        break;    

        case $idade < 18;
            echo "Você é De Menor.";
        
        break;

        default:

        break;
    }
}
?>