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
    <title>Massa FM - História</title>
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
<left><h2>Conheça a História da Massa FM</h2><left>
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
<img src="imagens/logomassafm.jpg" width="850" height="500" >
<figcaption>Logo da Rede Massa FM - Reprodução</figcaption>
</center>

<br>
<br>

<center>
<h5 style="text-align:justify">Massa FM é uma rede de rádios brasileira sediada em Curitiba, Paraná, onde transmite na frequência 97.7 MHz. No entanto, a programação nacional da rede é gerada a partir da emissora da capital paulista em 92,9 MHz.
A rede possui também mais duas estações próprias e 57 afiliadas em dez estados brasileiros. Desde meados da década de 2010, a Massa FM tem se expandido e atualmente possui presença em todas as cinco regiões brasileiras.
A rede de rádio pertence ao Grupo Massa, conglomerado de mídia pertencente ao empresário e apresentador de televisão Carlos Roberto Massa, o Ratinho.</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
Em janeiro de 2006, estreou a primeira emissora, em Curitiba, substituindo a afiliada da Band FM em 97,9 MHz (que, durante a transição, mudou a frequência também, migrando para os 97,7 MHz). 
A concessão já pertencia ao Grupo Massa desde quando se chamava Estação FM e posteriormente, Band FM em 2003 (momento na qual o Grupo Bandeirantes queria fortalecer sua marca no Paraná).
Em meados do mesmo ano, a rádio de Maringá entrou no ar, substituindo a rádio jovem Mais FM.
Em 16 de outubro de 2008, quem entrou no ar foi a emissora de Londrina. No dia 11 de agosto de 2009, inaugurou a Massa FM Litoral, substituindo a Super Nova / Tropical FM de Antonina, agora com sede em Paranaguá. 
As emissoras de Telêmaco Borba e Siqueira Campos vieram posteriormente.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
O Grupo Massa (responsável pela emissora) chegou a anunciar que a Massa FM deixaria de ser uma rede de rádios FM estadual, passando a ser nacional, contando com afiliadas não só no estado do Paraná mas também nos estados de São Paulo e Santa Catarina, agindo no caminho inverso das grandes redes de rádio com sede no eixo Rio-São Paulo. 
Campinas é a sede da primeira afiliada paulista da Rede Massa FM na frequência 99.7 FM, que foi inaugurada em 8 de abril de 2013 em substituição a Band FM. 
A sede e a torre da Massa FM ficam em Amparo que fazia aniversário no mesmo dia e um grande show marcou a inauguração da afiliada que contou com a presença de várias duplas entre elas Rionegro & Solimões, além do apresentador do SBT e dono do Grupo Massa, o Ratinho. 
Em Foz do Iguaçu a rádio substituiu a Rede FM Foz 88,1 MHz. A Massa FM Sudoeste em 98,5 MHz, passou a transmitir a programação da Massa FM em 7 de abril de 2014.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
Após um período de estagnação, a Rede Massa FM volta a se expandir a partir de 2016, formando uma vasta rede entre regiões vizinhas sobretudo entre o Paraná e Santa Catarina, normalmente apresentando-se à rede sempre ao meio-dia (horário que a programação é gerada da sede). 
A Rede Massa aproveitou o fato de muitas estações de rádio estarem migrando do AM para o FM, bem como relações políticas, a fama da marca e sua boa fase na capital paranaense.
</h5>
</center>

<br>
<br>

</body>
</html>