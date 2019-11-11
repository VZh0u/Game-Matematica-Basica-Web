<?php
@session_start();
include "../conexao/conexao.php";

$nome = $_POST['professor'];
$nick = $_POST['nick'];
$senha = $_POST['senha'];
$id = $_POST['idprofessor'];

// $anick = $row['nick'];
// $asenha= $row2['senha'];

$update_professor = "UPDATE professor set professor='$nome', nickProf='$nick', senha= '$senha' WHERE idprofessor = '$id'";
// $update_prof = "UPDATE professor set nick='{$_SESSION['nick']}', senha= '$senha' WHERE idprofessor = '$idprof'";
$result = mysqli_query($con, $update_professor) or die('Failed to query database. <br>'.mysqli_error($con));


if ($result) {
  $_SESSION['nick'] = $nick;
  $_SESSION['professor'] = $nome;
  $_SESSION['senha'] = $senha;
}
header("location: ../paginas/perfilProfessor.php");
 ?>
