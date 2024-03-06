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
        <label for="texto1">Posição do Trilho<strong>(Esquerda, Direita ou Meio)</strong></label>
        <input type="text" name="texto1" id="texto1">
        <br>

        <button type="submite" >Enviar Dados</button>
</form>

<?php

if($_POST){
    $trilho = $_POST['texto1'];

switch ($trilho){

    case "Direita";
        echo "Próxima cidade: cidade A.";

        break;

    case "Esquerda";
        echo "Próxima cidade: cidade B.";
    
        break;
    
    case "Meio";
        echo "Próxima cidade: cidade C.";
    
        break;

    default:
        echo "Parando agora";
        break;
}
}
?>