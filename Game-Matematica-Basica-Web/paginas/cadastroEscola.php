<?php
include "chamarformatacao.php";
 ?>

<!DOCTYPE html>
<?php include "../formatacao/header.php"; ?>

    <title>Tela Cadastro Escola</title>

<?php include "../formatacao/body.php"; ?>
<p class="pr-3 mr-5" style="margin-top: 1%; font-size:150%;color:white" id="titulo">Tela de Cadastro de Escola</p>
<br>
            <form action="../verificarDados/verificarEscola.php" method="post" class="pt-5" style="margin-top: 1.5%">
            <!-- action, informa para onde os dados iram -->
            <!-- post esconde os dados privados da url -->
            <label>Escola: </label>
            <input type="text" name="escola" value=""><br>

            <input type="submit" value="Cadastrar" class="p-2 mt-4 mt-1 mb-3 btn-danger" id="btn-save"></input>

            </form>
            <br>

            <br>
            <div class="p-5 m-5">

            </div>
            <div class="p-5 m-4">

            </div>
<?php include "../formatacao/bottom.php"; ?>
