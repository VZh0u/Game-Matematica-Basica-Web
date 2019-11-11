<?php
@session_start();
include "../paginas/chamarformatacao.php";
include "../conexao/conexao.php";

include "../formatacao/header.php";
include "../formatacao/body.php";
$seletor = "SELECT * FROM aluno WHERE nick = '{$_SESSION['nick']}' AND senha = '{$_SESSION['senha']}'";
$res = mysqli_query($con, $seletor);
$select = mysqli_fetch_array($res);
?>

            <form action="../alterar/alterar.php" name="form" method="post" class="pl-5 pt-5 pb-5 text-left w-50">
              <label>Nome: </label>
              <input type="text" name="aluno" value="<?php echo $_SESSION['aluno'];?>" required ><br>
              <label>Nick: </label>
              <input type="text" name="nick" value="<?php echo $_SESSION['nick'];?>" required ><br>
              <label>Senha: </label>
              <input type="text" name="senha" value="<?php echo $_SESSION['senha'];?>" required ><br>

              <div class="text-center pr-5">
                <input type="hidden" name='idaluno' value="<?php echo $select['idaluno'];?>" class="p-2 mt-1 btn-danger"></input>
                <button type="submit" name="button" class="p-2 mt-1 btn-danger">Alterar</button>
                 <script>
                 document.write('<button class="p-2 mt-1 btn-danger" href="' + document.referrer + '">Voltar</button>');
                 </script>

              </div>
            </form>

            <br>

            <br>
            <div class="p-4 m-4">

            </div>
<?php include "../formatacao/bottom.php"; ?>
</html>
