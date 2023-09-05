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
    <title>A Rádio Rock - História</title>
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
<left><h2>Conheça a História da 89 FM - A Rádio Rock</h2><left>
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
<img src="imagens/logo89fm.jpg" width="830" height="500" >
<figcaption>Logo da 89 A Rádio Rock - Reprodução</figcaption>
</center>

<br>
<br>

<center>
<h5 style="text-align:justify">89 FM A Rádio Rock é uma emissora de rádio brasileira, outorgada em São Paulo e com sede na cidade de São Paulo, que opera em rádio FM na frequência 89,1 MHz para os ouvintes da Região Metropolitana de São Paulo. A estação é originalmente uma concessão do município de São Paulo e possui sede na Avenida Paulista. É uma rádio controlada pelo Grupo Camargo de Comunicação (GC2).</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
A 89 FM entrou no ar pela primeira vez em 2 de dezembro de 1985. Antes, a frequência era ocupada pela Pool FM, emissora da mesma empresa de roupas Pool que ao contrário da 89, era voltado ao música disco e funk. Sua principal concorrente era a FM 97 Rock de Santo André.
Diferente das outras rádios de segmento jovem, a 89 seguia um estilo principalmente voltado ao Rock comercial na qual foi pioneira, tornando-se uma referência no estilo. 
No entanto, a rádio também diferia das rádios de rock originais - como Fluminense FM e 97 Rock - por preferir adotar uma linguagem mais próxima das rádios pop, além de um repertório limitado aos "sucessos", dentro da linha das FMs de hit-parade.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
Em 28 de setembro de 2012 os principais veículos especializados no meio radiofônico noticiam o encerramento das atividades da emissora que deveria dar lugar a uma programação religiosa.
A notícia surgiu após a rádio alcançar o melhor resultado dos últimos anos nas medições realizadas pelo instituto IBOPE, estando cada vez mais próxima da líder Mix FM, com uma média de 104 mil ouvintes por minuto, informação que se confirmou com demissões de funcionários, retirada de programas da grade e diminuição de ações promocionais.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
A Rádio Rock surpreendeu o mercado de rádio da capital paulista ao voltar ao dial, sem prévio aviso, no dia 27 de outubro de 2012. 
Inicialmente, esta ação tinha como objetivo divulgar o novo projeto do Grupo Camargo que pretendia retomar as atividades da emissora exclusivamente como web rádio. 
Em meio às notícias vinculadas por sites especializados em rádio apontando o fim definitivo da 89 FM na fase pop para dar lugar a uma programação evangélica, uma transmissão especial foi ao ar a partir das 10h00 do dia 27 de outubro (continuando das 19h00 até às 21h00 e nos mesmos horários no dia seguinte) com o locutor Tatola anunciando o retorno da rádio. 
O sucesso dessa ação foi tanto que a direção da emissora decidiu repetir o Especial que voltou ao ar no dia 4 de novembro às 12h00 com seis horas de duração, sob o comando da locutora Luka. 
A programação pode ser acompanhada 24 horas por dia através do site www.radiorock.com.br e pela página oficial da rádio no Facebook, que atingiu mais de 50 mil "likes" em apenas uma semana. 
Após o término das negociações entre a cúpula da 89 FM e o grupo religioso que pretendia assumi-la, em 5 de novembro de 2012 é confirmado oficialmente o retorno da 89 FM a Rádio Rock à frequência 89.1 MHz de São Paulo, após seis anos fora do ar.
A reestreia da emissora ocorreria no dia 21 de dezembro de 2012.
</h5>
</center>

<br>

<center>
<h5 style="text-align:justify">
Em março de 2019, a 89 FM A Rádio Rock anunciou o retorno de seu projeto como uma emissora de rede nacional. O retorno da rede segue o mesmo modelo aplicado pela sua coirmã de operação Alpha FM, onde utiliza plástica, grade e conteúdo idênticos à emissora-matriz de São Paulo, mas com produção artística e geração totalmente locais. 
As afiliadas são identificadas com o nome da emissora paulista, diferente da fase anterior onde as emissoras parceiras recebiam o nome adaptado à sua frequência.
O início da nova fase começou em Goiânia, com a inauguração da 89 FM A Rádio Rock Goiânia em 11 de março. Na cidade, a nova afiliada já era parceira do grupo por controlar a Alpha FM Goiânia, emissora presente entre os grandes volumes de audiência da região.
Em São Paulo, entre março de 2019 e outubro de 2020, a emissora ocupou a liderança do público jovem/alternativo e atualmente encontra-se em 6º lugar no ranking geral de audiência, estando em 2º lugar, dentre as 9 emissoras do segmento jovem em São Paulo
</h5>
</center>


<br>
<br>

</body>
</html>