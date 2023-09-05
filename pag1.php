<?php
    session_start();
    if(!isset($_SESSION["logado"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="imagens/rádio.png" href="imagens/rádio.png">
    <title>Inicial - Principais Rádios</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="pag1.php"><img src="imagens/home.png" width="30" height="30" alt=""></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="pag2.php"><img src="imagens/jovem pan sat.png" width="47" height="28" alt=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pag3.php"><img src="imagens/rádiobandeirantes.png" width="30" height="33" alt=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pag4.php"><img src="imagens/massafm.png" width="30" height="33" alt=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pag5.php"><img src="imagens/arádiorock.png" width="60" height="30" alt=""></a>
      </li>
      <div class="user"> 
        <li>
        <img src="imagens/pessoa.png" width="30" height="30">
        <li>
        <p>Usuario logado: <?= $_SESSION['logado'];?> </p>
      </div>
    </ul>
  </div>
</nav>

<style>
body {
  background-image: url("imagens/avpaulista.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}

.max-width {
  width: 100%;
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
}

.user {
  display: flex;
  color: white;
  position: absolute;
  top: 30%;
  left: 88%;
  gap: 8px;
}
</style>

</body>
</html>