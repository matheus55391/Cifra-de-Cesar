<?php
    session_start();
    require_once 'CifraClass.php';
    

    
    $ckey = htmlspecialchars($_SESSION['data']['ckey']);
    $ctexto = htmlspecialchars($_SESSION['data']['ctexto']);

    
    $cifra = new Cifra(intval($ckey), $ctexto);

    
    $_SESSION['data']['ctexto']=$cifra->traduzir();

    header('Location: ../index.php');

    

    

    