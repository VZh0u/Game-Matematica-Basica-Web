<?php
include "../conexao/conexao.php";
@session_start();

$NICK = "";
if(isset($_POST['nick'])){
    $NICK = $_POST['nick'];
}
 $senha = "";
if(isset($_POST['senha'])){
    $senha = $_POST['senha'];
 }


$select = "SELECT aluno, nick, senha FROM aluno WHERE nick = '$NICK' AND senha = '$senha'";
$result = mysqli_query($con, $select) or die('Failed to query database. <br>'.mysqli_error($con));
$row = mysqli_fetch_assoc($result);
if ( $row['nick'] == $NICK && $row['senha'] == $senha ) {
  $_SESSION['tipoLogin'] = "Aluno";
  $_SESSION['aluno'] = $row['aluno'];
  $_SESSION['senha'] = $row['senha'];
  $_SESSION['nick'] = $row['nick'];
  include "../paginas/perfil.php";
 } else {
   $select2 = "SELECT * FROM professor WHERE nickProf = '$NICK' AND senha = '$senha'";
   $result2 = mysqli_query($con, $select2) or die('Failed to query database. <br>'.mysqli_error($con));
   $row2 = mysqli_fetch_assoc($result2);
   if ( $row2['nickProf'] == $NICK && $row2['senha'] == $senha ) {
     $_SESSION['tipoLogin'] = "Professor";
     $_SESSION['professor'] = $row2['professor'];
     $_SESSION['nick'] = $row2['nickProf'];
     $_SESSION['senha'] = $row2['senha'];
     // print_r($_SESSION['nick']);
     include "../paginas/perfilProfessor.php";
   } else {
     include "../paginas/login.php";
     ?>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
     <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() -->
     <link rel="stylesheet" href="../alert/alerta.css">
     <script>
     xdialog.alert('O login falhou!');
     <?php
       // echo "O login falhou, tente novamente!";
   }
}

?>
