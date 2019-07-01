<?php
include "chamarformatacao.php";
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <title>Tela Professor</title>

  </head>
  <body class="bg-dark">
    <div class="p-1">

    </div>
    <div class="container bg-warning">
      <div class="row">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" alt="" width=60 height=40>
          <div class="col-sm-11 pl-5 ml-4 " align="center">
            <div class="p-5 m-1">

            </div>
            <div class="container">
            <form action="../verificarDados/verificarEscola.php" method="post" class=" ">
            <!-- action, informa para onde os dados iram -->
            <!-- post esconde os dados privados da url -->
            <label>Escola: </label>
            <input type="text" name="escola" value=""><br>

            <input type="submit" value="Cadastrar" class="pt-2 pb-2 mb1-1 mt-1 btn-danger">

            </form>
            <br>

            <br>
            <div class="p-5 m-5">

            </div>
        </div>
      </div>
    </div>
  </body>
</html>
