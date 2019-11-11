<?php
@session_start();
// print_r($nome);
// print_r($nick);
// unset($_SESSION['nick']);
// unset($_SESSION['nickProf']);
// unset($nick);
@session_destroy();

header("location: ../paginas/index.php");
 ?>
