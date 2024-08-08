<?php

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $dataNas = $_GET['dataNas'];
    $disciplinas = $_GET['disc'];
    $estado = $_GET ['estado'];
    $cor = $_GET ['cor'];
    $observação = $_GET ['obs'];
    $curso = $_GET['curso'];
    
    
    $senha = md5( $_GET['senha']);


    echo "<br><pre>";
    var_dump($nome, $email, $dataNas, $estado, $cor, $observação, $curso, $senha);
    print_r($disciplinas);

?>