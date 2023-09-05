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
    <title>Rádio Bandeirantes - História</title>
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
<left><h2>Conheça a História da Rádio Bandeirantes</h2><left>
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
<img src="imagens/logorbandeirantes.jpg" width="830" height="500" >
<figcaption>Logo da Rádio Bandeirantes - Reprodução</figcaption>
</center>

<br>
<br>

<center>
<h5 style="text-align:justify">Rádio Bandeirantes é uma rede de emissoras de rádio do Brasil, com sede na cidade de São Paulo, e foi inaugurada no dia 6 de maio de 1937.</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
A emissora, inicialmente chamada de Sociedade Bandeirante de Radiodifusão, foi inaugurada em 6 de maio de 1937 por José Pires Oliveira Dias na Rua São Bento, centro de São Paulo, onde se localizava seus primeiros estúdios e o auditório.
Foi na voz de Joaquim Carlos Nobre que a Rádio Bandeirantes de São Paulo, a cabeça da rede, entrou no ar pela primeira vez: "Boa Noite, Senhoras e Senhores. Está no ar a Rádio Bandeirantes, a nova e esperada emissora de São Paulo".</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
Seus primeiros locutores foram Joaquim Carlos Nobre, Tito Lívio Fleury Martins, Mário de Carvalho Araújo e Plínio Freire de Sá Campello.
Em 1944, ela foi comprada por Paulo Machado de Carvalho, que três anos depois a vendeu para Adhemar de Barros. No ano seguinte, a emissora teve como dono o genro de Adhemar, João Jorge Saad.
No dia 3 de novembro de 2015, a Rádio Bandeirantes passa a ser disponível aos assinantes da operadora Sky Brasil, juntamente com mais três rádios do Grupo Bandeirantes: a BandNews FM, a Band FM e a Nativa FM.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
A Rádio Bandeirantes iniciou suas transmissões via satélite em 25 de setembro de 1990.
Atualmente, a Rede Bandeirantes de Rádio ou Bandsat comandada a partir de São Paulo possui 6 emissoras próprias e mais de 58 afiliadas espalhadas pelo país, retransmitindo as jornadas esportivas da emissora e programas como Jornal Primeira Hora, O Pulo do Gato e Bandeirantes A Caminho do Sol.
</h5>
</center>

<br>
<br>

</body>
</html>