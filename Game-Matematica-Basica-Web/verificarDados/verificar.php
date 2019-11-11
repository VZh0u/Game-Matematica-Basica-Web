<?php
include "../alert/alerta.php";
include "../paginas/chamarformatacao.php";
include "../conexao/conexao.php";

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$escola = $_POST['escola'];
$turma = $_POST['turma'];
$peri = $_POST['periodo'];
$nick = $_POST['nick'];
$senha = $_POST['senha'];

//Conferindo
$select_nicka = "SELECT nick FROM aluno WHERE nick = '$nick'";
$result_nicka = mysqli_query($con, $select_nicka) or die('Failed to query database. <br>'.mysqli_error($con));
$row_nicka = mysqli_fetch_assoc($result_nicka);

$select_nickp = "SELECT nickProf FROM professor WHERE nickProf = '$nick'";
$result_nickp = mysqli_query($con, $select_nickp) or die('Failed to query database. <br>'.mysqli_error($con));
$row_nickp = mysqli_fetch_assoc($result_nickp);

$select = "SELECT * FROM aluno INNER JOIN turma ON aluno.idturma = turma.idturma INNER JOIN professor
ON turma.idprofessor = professor.idprofessor INNER JOIN escola ON turma.idescola = escola.idescola";
// $row_inner = mysqli_fetch_array($result2);
  if ($cargo == 'aluno' && $row_nicka['nick'] != $nick && $row_nickp['nickProf'] != $nick) {
  //Salvando
  // $select_aluno = "SELECT * FROM aluno WHERE nick = '$nick'";
  // $result_aluno = mysqli_query($con, $select_aluno) or die('Failed to query database. <br>'.mysqli_error($con));
  $select2 = "SELECT * FROM turma WHERE idescola = '$escola' AND turma = '$turma' AND periodo = '$peri'";
  $result2 = mysqli_query($con, $select2) or die(mysqli_error($con));
  $row2 = mysqli_fetch_array($result2);
  if ($row2['turma'] != $turma && $row2['idescola'] != $escola && $row2['periodo'] != $peri) {
    ?>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() --> -->
    <!-- <link rel="stylesheet" href="../alert/alerta.css"> -->
    <script>
    // xdialog.alert('Erro! Turma não cadastra!');
      Alert.error('Turma não cadastrada!');
    </script>
    <?php
    include "../paginas/cadastro.php";

  }if($row2['turma'] == $turma && $row2['idescola'] == $escola && $row2['periodo'] == $peri) {
    $idturma = $row2['idturma'];
    // $idturma = mysqli_insert_id($con);
    $info_aluno = "INSERT INTO aluno (aluno, nick, senha, idturma) VALUES ('$nome', '$nick', '$senha', '$idturma')";
    mysqli_query($con, $info_aluno) or die('Failed to query database. <br>'.mysqli_error($con));
    include "../alert/alertaOK.php";
    ?>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() --> -->
    <!-- <link rel="stylesheet" href="../alert/alertaOk.css">
    <script>
    xdialog.alert('Cadastrado com sucesso!');
    </script> -->
    <?php
    include "../paginas/login.php";

  }

} else if($cargo == 'professor' && $row_nicka['nick'] == $nick && $row_nickp['nickProf'] == $nick) {?>

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
  <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() --> -->
  <!-- <link rel="stylesheet" href="../alert/alerta.css"> -->
  <script>
  // xdialog.alert('Nick já cadastrado!');
  Alert.error('Nick já cadastrado!');
  </script>

  <?php
  include "../paginas/cadastro.php";

}else {
  //Salvando
  $info_prof = "INSERT INTO professor (professor, nickProf, senha) VALUES ('$nome', '$nick', '$senha')";
  mysqli_query($con, $info_prof);

  $idprof = mysqli_insert_id($con);

  $prof_turma = "INSERT INTO turma (turma, periodo, idescola, idprofessor) VALUES ( '$turma', '$peri', '$escola', '$idprof')";
  mysqli_query($con, $prof_turma);
  include "../alert/alertaOK.php";
  ?>

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
  <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() --> -->
  <!-- <link rel="stylesheet" href="../alert/alertaOk.css"> -->
  <!-- <script>
  xdialog.alert('Cadastrado com sucesso!');
  </script> -->
  <?php
  include "../paginas/login.php";

  }
  ?>
