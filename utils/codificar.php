<?php
    session_start();
    require_once 'CifraClass.php';  
    
    $ckey = htmlspecialchars($_SESSION['data']['ckey'], ENT_QUOTES | ENT_SUBSTITUTE, 'utf-8');
    $ctexto = htmlspecialchars($_SESSION['data']['ctexto'], ENT_QUOTES | ENT_SUBSTITUTE, 'utf-8');

    
    $cifra = new Cifra(intval($ckey), $ctexto);

    
    $_SESSION['data']['ctexto']=$cifra->criptografar();

    header('Location: ../index.php');

    

    

    