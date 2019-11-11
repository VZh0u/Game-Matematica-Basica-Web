<?php
// header("Location: ?pagina=perfilPessoa");
  include "../conexao/conexao.php";
  $_SESSION['logou']=$_POST['logado'];
  if(isset($_SESSION['logou'])){
      $logado = $_POST['logado'];
  }
?>
