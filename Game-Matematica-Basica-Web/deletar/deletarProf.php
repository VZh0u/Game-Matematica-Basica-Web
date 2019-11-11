<meta charset="utf-8">
<?php
session_start();
include "../conexao/conexao.php";
$id = $_POST['idturma'];
$nick = $_POST['nick'];
$senha = $_POST['senha'];
// echo $id;
// Quando for excluir a tabela professor, tem que excluir a turma dele.
// $update_aluno = "DELETE turma.*, professor.*
//         FROM turma, professor
//         WHERE professor.nickProf = '.$nick'
//         AND professor.senha = '$senha'"; //Não está funcionando

//$select ="SELECT idturma FROM professor WHERE nick = '$nick'";
// $r = mysqli_query($con, $select);
// $v = mysqli_fetch_array($r);
$delete_aluno = "DELETE FROM aluno WHERE idturma='$id'";
$result2 = mysqli_query($con, $delete_aluno);

$delete_turma = "DELETE FROM turma WHERE idturma='$id'";
$result = mysqli_query($con, $delete_turma);

$delete_prof = "DELETE FROM professor WHERE nickProf = '$nick'";
$result3 = mysqli_query($con, $delete_prof);

include "../paginas/index.php";
 ?>
