<?php
    session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifra de César</title>
    <!-- CSS only -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>
<body style="background-color: #2c2f33;">

    <div class="container"  id="body_div" >
    <h3 style="text-align: center; padding-top: 20px; color: white;" >CIFRA DE CÉSAR</h3>

        <form action="utils/core.php" method="POST" style="padding-top: 5%;" >
            <div class="form-group" style="padding-top: 15px;">
                <label style="color: white;" >Chave da Cifra:</label>
                <input name="ckey" type="number" class="form-control"  style="background-color: #4b4b4b; border-color: black; color: white;" require
                    value="<?php echo $_SESSION['data']['ckey']?>"
                >
            </div>


            <div class="form-group" style="padding-top: 15px;">
                <label style="color: white;" >Texto:</label>
                <textarea name="ctexto" type="form-control" class="form-control" require style="min-height: 280px;background-color: #4b4b4b; border-color: black; color: white;"><?php if(isset($_SESSION['data']['ctexto'])){echo $_SESSION['data']['ctexto'];}?></textarea>
            </div>


            <div class="d-flex justify-content-center" style="padding-top: 15px;">
                <button name="b1" type="submit" class="btn btn-primary btn-danger "  style="min-width: 120px; margin: 10px; border-color: #2c2f33;"> DECODIFICAR </button>
                <button name="b2" type="submit" class="btn btn-secondary "           style="min-width: 120px; margin: 10px; background-color: #0d6efd; border-color: #2c2f33;"> CODIFICAR </button>
            </div>
           
        </form>             
    </div>
    
    <footer class="d-flex fixed-bottom justify-content-center mt-auto">
        <a href="https://github.com/matheus55391/Cifra-de-Cesar" style="color: #0d6efd;">@Megu2021</a>    
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>


</body>
</html>
