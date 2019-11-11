<?php
include "chamarformatacao.php";
@session_start();
// $_SESSION['nome_aluno'] = $_POST['aluno'];
// $_SESSION['nome_professor'] = $_POST['professor'];
// $_SESSION['nick'] = $_POST['nick'];
// $_SESSION['senha'] = $_POST['senha'];
// $_SESSION['escola'] = $_POST['escola'];
// $_SESSION['turma'] = $_POST['turma'];
// $_SESSION['periodo'] = $_POST['periodo'];

 ?>

<!DOCTYPE html>
<?php include "../formatacao/header.php"; ?>

<?php include "../formatacao/body.php"; ?>
<div class="p-5 m-4">

</div>
<style>
.meio {
  width: 18.8%;
  margin-left: -2%;
  margin-top: -15%;
}
</style>
<!-- <a href="JavaScript: window.history.back();" class="pr-5 mr-5" style="margin:-34%;"><img src="https://img.icons8.com/carbon-copy/100/000000/circled-chevron-left.png" width="8%" title="Voltar Página"></a> -->
<p class="meio" style="font-size:150%;color:white" id="titulo">Login</p>
            <form action="../verificarDados/verificarlogin.php" method="post" class="pb-5 pt-5" style="margin-top:6%">
                <!-- action, informa para onde os dados iram -->
                <!-- post esconde os dados privados da url -->
                <br><br>
                <label>Nick: </label>
                <input type="text" name="nick" value=""><br>
                <label>Senha: </label>
                <input type="password" name="senha" value=""><br>
                <!-- <?php $select = "SELECT * FROM aluno WHERE nick = 'nick' AND senha = 'senha'"; ?> -->
                <input type="submit" value="Entrar" class="p-2 mt-4 btn-danger button">
                <br><br>
              </div>
            <br>
            <div class="p-4 m-4">

            </div>
            <div class="p-3 m-2">

            </div>
            <div class="p-3 m-1">

            </div>
            <br>
            <div class="p-4 m-4">

            </div>
<?php include "../formatacao/bottom.php"; ?>
