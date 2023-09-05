<?php
    session_start();
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario === "Gabriel" && $senha === "aluno123") {
            $_SESSION['logado'] = $usuario;
            header('Location: pag1.php');
            exit;
        } else {
            echo "<p>Usuário ou senha inválidos. Tente Novamente!</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagens/login.png" href="imagens/login.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Conecte-se</title>
</head>

<center>
<body>
    
    <div class="formulario">
    <form method="post" action="login.php">
    <div class ="shadow-lg p-3 mb-5 bg-white rounded">
        <img src="imagens/cadeado.png" width="50" height="50">
        <br>
        <br>
        <input type="text" name="usuario" id="usuario" placeholder="Usuário">
        <br>
        <br>
        <input type="password" name="senha" id="senha" placeholder="Senha: ">
        <br>
        <br>
        <input type="submit" class="btn btn-outline-primary" value="Acessar">
        </div>
    </form>
    </div>
<style>
div {
    width: 100%;
    max-width: 230px;
    margin: 0 auto;
    background-color: #fff;
}

.formulario {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

p {
    color: red;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%); 
}
</style>  
</body>
</center>
</html>