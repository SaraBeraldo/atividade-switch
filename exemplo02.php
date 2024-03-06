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
        <label for="texto1">Que time você torce?</label>
        <input type="text" name="texto1" id="texto1">
        <br>

        <button type="submite" >Enviar Dados</button>
</form>

<?php

if($_POST){
    $time = $_POST['texto1'];

    switch($time){

        case "Corinthians";
            echo "Vai TIMÃO!";
        
        break;

        case "Palmeiras";
            echo "Time pequeno, desconheço";
        break;

        default:
            echo "Troque de time";
            break;
    }
}
?>