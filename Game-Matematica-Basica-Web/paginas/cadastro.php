<?php
include "chamarformatacao.php";
include "../conexao/conexao.php";
@session_start();
?>

<?php include "../formatacao/header.php"; ?>
    <title>Tela Cadastro</title>

<?php include "../formatacao/body.php"; ?>
<style>
.meio {
  width: 18.8%;
  margin-right: 8%;
}
</style>
<p class="meio" style="font-size:150%;color:white; margin-top: -4%;" id="titulo">Tela de Cadastro</p>
            <form action="../verificarDados/verificar.php" name="form" method="post" class="pl-5 pt-5 pb-5 text-left w-50" style="margin-right:29%;">
            <!-- action, informa para onde os dados iram -->
            <!-- post esconde os dados privados da url -->
            <label style="padding-left: 10%;">Nome: </label>
            <input style="margin-left: 10%;" type="text" name="nome" value="" required><br>

            <?php
            include '../conexao/conexao.php';
            $query = mysqli_query($con, "SELECT idescola, escola FROM escola ORDER BY escola");
            ?>

            <label style="padding-left: 10%;">Cargo: </label>
            <select class="pr-3" style="margin-left: 10%;" name="cargo" required>
             <option value="" >Selecione seu cargo</option>
             <option value="aluno" >Aluno</option>
             <option value="professor">Professor</option>
           </select><br>

            <label style="padding-left: 10%;">Escola: </label>
            <select class="pr-5 pl-1" style="margin-left: 10%;" name="escola" required>
              <option value=""  >Selecione a sua escola</option>
              <?php while($row = mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $row['idescola'] ?>"  ><?php echo $row['escola'] ?></option>
              <?php } ?>
            </select>
            <br><label style="padding-left: 10%;">Turma: </label>
            <select class="pr-3" style="margin-left: 10%;" name="turma" required>
             <option value="" >Selecione o ano de sua turma</option>
             <option value="1 Ano" >1 Ano</option>
             <option value="2 Ano" >2 Ano</option>
             <option value="3 Ano" >3 Ano</option>
             <option value="4 Ano" >4 ano</option>
             <option value="5 Ano" >5 Ano</option>
           </select><br>
            <label style="padding-left: 10%;">Período: </label>
            <select class="pr-3" style="margin-left: 10%;" name="periodo" required>
             <option value="" >Selecione o periodo da turma</option>
             <option value="Matutino" >Matutino</option>
             <option value="Vespertino" >Vespertino</option>
           </select><br>
            <label style="padding-left: 10%;">Nick: </label>
            <input style="margin-left: 10%;" type="text" name="nick" value="" required><br>
            <label style="padding-left: 10%;">Senha: </label>
            <input style="margin-left: 10%;" type="password" name="senha" value="" required><br>

            <div class="text-center pr-5">
              <input type="submit" value="Cadastrar" class="p-2 mt-2 btn-danger" id="btn-save" onclick="return validar()"></input>
            </div>

            </form>
            <br>

            <br>
            <div class="p-5 m-5">

            </div>
            <div class="p-2 m-2">

            </div>
<?php include "../formatacao/bottom.php"; ?>
