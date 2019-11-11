<?php
include "chamarformatacao.php";
include "../conexao/conexao.php";

@session_start();

$NICK = $_SESSION['nick'];
$senha_professor = $_SESSION['senha'];
$select_professor = "SELECT * FROM professor WHERE nickProf = '$NICK' AND senha = '$senha_professor'";
$res = mysqli_query($con, $select_professor);
$selectA = mysqli_fetch_assoc($res);

$selectT = "SELECT * FROM turma INNER JOIN escola ON turma.idescola = escola.idescola
  INNER JOIN professor ON turma.idprofessor = professor.idprofessor
  WHERE professor.nickProf = '$NICK' AND professor.senha = '$senha_professor'";
  $res_turma = mysqli_query($con, $selectT) or die(mysqli_error($con));
  $selectT = mysqli_fetch_assoc($res_turma);


//Conferindo

include "../formatacao/header.php";
?>

<style media="screen">
#area_X
{
position:absolute;
/* display:block; */
left: 122%;
top:25%;
/* bottom:30%; */
width:8.2%;
height:9.8%;
}

#area_jogar
{
position:absolute;
display:block;
left: 89.5%;
bottom:30%;
width:12.2%;
height:11%;
}

#area_alterar
{
position:absolute;
display:block;
left: 103%;
bottom:30%;
width:12.8%;
height:11%;
}

#area_deletar
{
position:absolute;
display:block;
bottom:30%;
left: 117%;
width:13.5%;
height:11%;
}

</style>

<?php include "../formatacao/body.php"; ?>
<p class="pr-3 mr-5" style="font-size:150%;color:white; margin-top:-3%;" id="titulo">Perfil</p>

<form action="../paginas/paginaAlterarProfessor.php" name="form" method="post" class="pl-5 pt-5 pb-5 text-left w-50">
              <?php
                echo "<h4 class='text-success'> Bem vindo(a), Professor(a) ".$_SESSION['professor']."!</h4>";
                echo "<b><br><br>Nome: </b>".$_SESSION['professor'];
                echo "<b><br>Nick: </b>".$selectA['nickProf'].'.';
                echo "<b><br>Escola: </b>".$selectT['escola'].".";
                echo "<b><br>Turma: </b>".$selectT['turma'].".";
                echo "<b><br>Período: </b>".$selectT['periodo'].".";
                echo "<b><br>Professor(a): </b>".$selectT['professor'].".";
                echo "<b><br>Senha: </b>".$selectA['senha'].".";
                ?><br><br>
              </form>
              <form action="" name="form" method="post" class="shadow-none text-left" id='area_jogar'>
                <input type="hidden" name='nick' value="<?php echo $_SESSION['nick']; ?>" class="btn-danger"></input>
                <input type="hidden" name='senha' value="<?php echo $_SESSION['senha']; ?>" class="btn-danger"></input>
                <button type="submit" name="button" class="p-2 btn-success button">Jogar</button>
              </form>
              <form action="../paginas/paginaAlterarProf.php" name="form" method="post" class="shadow-none text-left" id='area_alterar'>
                <a title="ALTERAR DADOS">
                  <button type="submit" name="button" class="p-2 btn-danger button">Alterar</button>
                </a>
              </form>
              <form action="../deletar/deletar.php" name="form" method="post" class="shadow-none text-left" id='area_deletar'>
                <input type="hidden" name='nick' value="<?php echo $_SESSION['nick']; ?>" class="btn-danger"></input>
                <input type="hidden" name='senha' value="<?php echo $_SESSION['senha']; ?>" class="btn-danger"></input>
                <a title="DELETAR CONTA">
                <button type="submit" name="button" class="p-2 btn-danger button">Deletar</button>
                <a></a>
              </form>
            <br><br>
            <form action="../verificarDados/deslogar.php" name="form" method="post" class="shadow-none" id='area_X'>
            <a title="SAIR">
              <button type="submit" name="button" class="btn-danger button">X</button>
            </a>
            </form>

            <br>

            <br>
            <div class="p-4 m-4">

            </div>
<?php include "../formatacao/bottom.php"; ?>
</html>
