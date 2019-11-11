<?php
@session_start();
include "../conexao/conexao.php";

$nome = $_POST['aluno'];
$nick = $_POST['nick'];
$senha = $_POST['senha'];
$id = $_POST['idaluno'];

// $anick = $row['nick'];
// $asenha= $row2['senha'];

$update_aluno = "UPDATE aluno set aluno='$nome', nick='$nick', senha= '$senha' WHERE idaluno = '$id'";
// $update_prof = "UPDATE professor set nick='$nick', senha= '$senha' WHERE idprofessor = '$idprof'";
$result = mysqli_query($con, $update_aluno) or die('Failed to query database. <br>'.mysqli_error($con));
// $result2 = mysqli_query($con, $update_prof) or die('Failed to query database. <br>'.mysqli_error($con));
// $row = mysqli_fetch_array($result);

if ($result) {
  $_SESSION['nick'] = $nick;
  $_SESSION['nome'] = $nome;
  $_SESSION['senha'] = $senha;
}

header("location: ../paginas/perfil.php");
 ?>
