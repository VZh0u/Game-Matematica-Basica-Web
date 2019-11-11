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


 // Conferindo
$select2 = "SELECT * FROM professor WHERE nick = '$nick'";
$result2 = mysqli_query($con, $select2) or die('Failed to query database. <br>'.mysqli_error($con));
$row2 = mysqli_fetch_array($result2);
if ( $row2['nick'] == $nick) {?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
<script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() -->
<link rel="stylesheet" href="../alert/alerta.css">
<script>
xdialog.alert('Nick já cadastrado!');

</script>

<?php
include "../paginas/cadastroProfessor.php";
} else {
  //Salvando
  $info_prof = "INSERT INTO professor (professor, nick, senha) VALUES ('$nome', '$nick', '$senha')";
  // $result_prof = mysqli_query($con, $info_prof);
  //$select_escola = "SELECT idescola FROM escola WHERE escola = '$esc'";
  mysqli_query($con, $info_prof);
  $idprof = mysqli_insert_id($con);
  $prof_turma = "INSERT INTO turma (turma, periodo, idescola, idprofessor) VALUES ( '$turma', '$peri', '$escola', '$idprof')";
  // $result_turma = mysqli_query($con, $prof_turma);

  mysqli_query($con, $prof_turma);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
<script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() -->
<link rel="stylesheet" href="../alert/alertaOk.css">
<script>
xdialog.alert('Cadastrado com sucesso!');
</script>
<?php
  include "../paginas/login.php";
}

?>
</html>
