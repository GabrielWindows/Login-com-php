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
    <title>Jovem Pan FM - História</title>
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

<br>
<br>

<blockquote class="blockquote text-center">
<left><h2>Conheça a História da Jovem Pan FM</h2><left>
</blockquote>

<style>
h5 {
  text-align: center;
  max-width: 780px; 
  margin-left: 10px;
}

body {
  background-image: url('imagens/fundoliso4.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
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

<br>

<center>
<img src="imagens/logojp.jpg" width="820" height="500">
<figcaption>Logo da Jovem Pan - Reprodução</figcaption>
</center>

<br>
<br>

<center>
<h5 style="text-align:justify">
A Rádio Jovem Pan 2 FM de São Paulo entrou no ar no dia 1 de julho de 1976 na frequência de FM 100,9 MHz (atualmente, é uma emissora principal da rede.), após um período de transmissões experimentais.
À época, a Jovem Pan estava preparando a sua mudança de sua então sede na Avenida Miruna, no bairro de Indianópolis, para um novo edifício situado no número 807 da Avenida Paulista, na região de Cerqueira César, sendo que a antena de transmissão da nova emissora seria também instalada no topo do mesmo prédio.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
Antônio Augusto Amaral de Carvalho Filho, mais conhecido como Tutinha, ficou responsável por cuidar da direção da nova emissora e passou a administrá-la após a sua inauguração.
A Jovem Pan 2 foi pioneira em seu segmento no dial paulistano, fazendo com que figurasse entre as mais ouvidas da Região Metropolitana de São Paulo, além de que posteriormente surgissem novas rádios com o mesmo gênero musical jovem da emissora.</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
A emissora começou a atuar em rede nacional em 1994, quando foi criada a Rede Jovem Pan SAT, a primeira rede de rádio a ser transmitida em sistema totalmente digital via satélite no Brasil.
A rede Jovem Pan SAT é formada por emissoras que operam tanto no dial FM quanto no dial AM, porém as afiliadas que operam em AM ficavam com a programação jornalística da Jovem Pan, enquanto as emissoras em FM tocavam a programação da Jovem Pan 2.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
O programa Pânico, criado em 1993, foi um dos primeiros a serem transmitidos em rede nacional pela emissora.
O sucesso do programa fez com que posteriormente em 2003, ganhasse a sua versão televisiva.
O Pânico na TV foi exibido originalmente entre 2003 e 2011 pela RedeTV!, sendo que no ano seguinte surgiu uma nova versão televisiva do programa, Pânico na Band, que estreou após a transferência dos mesmos para a Rede Bandeirantes.
O programa de rádio é exibido diariamente em rede nacional até hoje pela emissora.
</h5>
</center>

<br>
<br>

</body>
</html>