<html>

<?php
include "../paginas/chamarformatacao.php";
include "../conexao/conexao.php";

$nome = $_POST['nome'];
$escola = $_POST['escola'];
$turma = $_POST['turma'];
$peri = $_POST['periodo'];
$nick = $_POST['nick'];
$senha = $_POST['senha'];

//Aluno (idaluno, nome, nick, senha, idturma)

//Conferindo

$select = "SELECT * FROM aluno WHERE nick = '$nick'";
$result = mysqli_query($con, $select) or die('Failed to query database. <br>'.mysqli_error($con));
$row = mysqli_fetch_array($result);
if ( $row['nick'] == $nick) {?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
  <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() -->
  <link rel="stylesheet" href="../alert/alerta.css">

  <script>
    xdialog.alert('Nick já cadastrado!');
  </script>

<?php
include "../paginas/cadastroAluno.php";
} else {
  //Salvando
  $select2 = "SELECT * FROM turma WHERE idescola = '$escola' AND turma = '$turma' AND periodo = '$peri'";
  $result2 = mysqli_query($con, $select2) or die(mysqli_error($con));
  $row2 = mysqli_fetch_array($result2);
  if ( $row2['idescola'] == $escola && $row2['turma'] == $turma && $row2['periodo'] == $peri) {
      $idturma = $row2['idturma'];
      // $idturma = mysqli_insert_id($con);
      $info_aluno = "INSERT INTO aluno (nome, nick, senha, idturma) VALUES ('$nome', '$nick', '$senha', '$idturma')";
      mysqli_query($con, $info_aluno);
      include "../paginas/login.php"; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
<script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() -->
<link rel="stylesheet" href="../alert/alertaOk.css">
<script>
  xdialog.alert('Cadastrado com sucesso!');
</script>
<?php
  }
}

?>
</html>
