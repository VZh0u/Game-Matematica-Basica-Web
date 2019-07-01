<?php

include "../conexao/conexao.php";

$escola = $_POST['escola'];

 // Conferindo
$select2 = "SELECT * FROM escola WHERE escola = '$escola'";
$result2 = mysqli_query($con, $select2) or die('Failed to query database. <br>'.mysqli_error($con));
$row2 = mysqli_fetch_array($result2);
if ( $row2['escola'] == $escola) {
  echo "Escola já cadastrada!"; //Fazer aparecer a mensagem no meio da tela
  include "../paginas/cadastroEscola.php";
} else {
  //Salvando
  include "../salvar/salvarEscola.php";
  echo "Cadastrada com sucesso!";
}

?>
