<?php
    session_start();
    $_SESSION['data'] = $_POST;
    

    if(isset($_POST['b1'])){
        
        header("Location: traduzir.php");
    }
    if(isset($_POST['b2'])){
        header("Location: codificar.php");
    }