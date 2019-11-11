<?php
include "chamarformatacao.php";
include "../formatacao/header.php";
@session_start();
?>

    <title>Tela Inicial</title>
    <meta charset="utf-8">
  </head>

  <style>
  .meio {
    width: 18.8%;
    margin-right: 8%;
  }
  </style>
  <?php include "../formatacao/body.php"; ?>
  <p class="meio" style="font-size:150%;color:white; margin-top:-7%;" id="titulo">Tela Inicial</p>
<div class="p-5 m-5">

</div>
            <a
              href="cadastroLogin.php"
                class="btn btn-danger pt-3 pb-3 meio">
              Jogar
            </a>
            <br><br>
            <a
              href="comojogar.php"
              class="btn btn-danger pt-3 pb-3 meio">
              Como Jogar?
            </a><br><br>
            <a
              href="ranking.php"
              class="btn btn-danger pt-3 pb-3 meio">
              <!-- <?php echo $_SESSION['tipoLogin'] ?> -->
              Ranking de Pontos
            </a>
            <!-- <a class="btn btn-primary" data-toggle="modal" data-target="#modal-mensagem">Exibir Mensagem</a> -->
            <div class="p-5 m-5">
            </div>
            <div class="p-5">
            </div>
        </div>
      </div>
    </div>
    <div class="p-1 m-1" style="color:white">
      <p>Desenvolvido por Mirian Marcia Mulatti e Vinicius de Freitas Rangel</p>
    </div>
  </body>
</html>
