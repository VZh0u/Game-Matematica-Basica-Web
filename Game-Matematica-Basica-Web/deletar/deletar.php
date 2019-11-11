<meta charset="utf-8">
<?php
include "../conexao/conexao.php";

$nick = $_POST['nick'];
$senha = $_POST['senha'];

$update_aluno = "DELETE FROM aluno WHERE nick = '$nick'";
$result = mysqli_query($con, $update_aluno) or die('Failed to query database. <br>'.mysqli_error($con));

include "../paginas/index.php";
 ?>
