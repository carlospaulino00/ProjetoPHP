<?php
include 'conexao.php';
if(isset($_POST['email']) || isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = $mysqli->query("SELECT * FROM users WHERE email='$email' AND password='$senha'") or die($mysqli->error);
    $quantidade = $query->num_rows;
    if($quantidade == 1) {
        if(!isset($_SESSION))
            session_start();
        $nome = $query->fetch_assoc()['nome'];

        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        header('Location: index.php');
    } else {
        echo "Falha no login";
    }
}

?>


<body>
    <?php include_once "navbar.php" ?>
    <form method="POST">
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Endereço de email</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="email" placeholder="email@exemplo.com" style="width: 20%;">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword2">Senha</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="senha" placeholder="Senha" style="width: 20%;" >
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</body>
</html>