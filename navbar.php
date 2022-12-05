<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background-color: gray;
        }

        nav {
            background-color: #c6c6c6;
        }

        ul {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

    </style>
    <title>Loja suplemntos</title>
</head>

<?php 
if(!isset($_SESSION)){
    session_start();
}

?>

<nav>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="index.php"><img src="logo.png" style="width: 100px;" alt=""></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Conhecer suplementos</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="albumina.php">Albumina</a>
            <a class="dropdown-item" href="whey.php">Whey</a>
            <a class="dropdown-item" href="hiper.php">Hipercalorico</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="faleConosco.php">Fale conosco</a>
        </li>
        <?php if(isset($_SESSION['email'])) { ?>
        <li>
            Bem-vindo de volta <?php echo $_SESSION['nome'] ?>
        </li>  
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li> 
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>   
        <?php } ?>
    </ul>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</nav>
