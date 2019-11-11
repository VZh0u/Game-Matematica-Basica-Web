<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <title>Tela Inicial</title>
    <?php
    include "chamarformatacao.php";
    include "../conexao/conexao.php";
    ?>

<body class="" style="background:#00000f">
  <!-- background="https://previews.123rf.com/images/lukbar/lukbar1805/lukbar180500008/101264678-colorful-numbers-background.jpg" -->
  <!-- background="https://blog.maxieduca.com.br/wp-content/uploads/2018/08/Imagem-destacada-2.jpg" -->

  <div class="p-2">

  </div>
  <div class="p-1 m-1">

  </div>
  <div class="container" style="background:#6699ff">
    <div class="row">
      <?php include "../menu/bar.php"; ?>
        <div class="col-sm-7 pl-5 ml-4 " align="center">
          <div class="container">
            <style>
            .meio {
              width: 18.8%;
              margin-left: 23.5%;
              margin-top: -10.5%;
            }
            </style>
            <a href="JavaScript: window.history.back();" class="pr-5 mr-5" style="margin:-34%;"><img src="https://img.icons8.com/carbon-copy/100/000000/circled-chevron-left.png" width="8%" title="Voltar Página"></a>
            <p class="meio" style="font-size:150%;color:white" id="titulo">Ranking de Pontos</p>

<?php
include "../verificarDados/dadosRanking.php";
 ?>
</div>
</div>
</div>
</div>
</body>
</html>
