<?php
include "../alert/alerta.php";
include "../paginas/chamarformatacao.php";
include "../conexao/conexao.php";

$escola = $_POST['escola'];

 // Conferindo
$select  = "SELECT escola FROM escola WHERE escola = '$escola'";
$result  = mysqli_query($con, $select ) or die('Failed to query database. <br>'.mysqli_error($con));
$row = mysqli_fetch_array($result);

if( $row['escola'] != $escola) {
  //Salvando
  $nome_escola = "INSERT INTO escola (escola) VALUES ('$escola')";
  mysqli_query($con, $nome_escola);
  include "../alert/alertaOK.php";
  ?>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
  <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() --> -->
  <!-- <link rel="stylesheet" href="../alert/alertaOk.css"> -->
  <!-- <script>
  xdialog.alert('Cadastrado com sucesso!');

  </script> -->

  <?php
  include "../paginas/cadastroEscola.php";
}else if($row['escola'] == '') {?>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
  <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() --> -->
  <!-- <link rel="stylesheet" href="../alert/alerta.css"> -->

  <script>
  // xdialog.alert('Adicione a escola!');
  Alert.error('Adicione a escola!');
  </script>
  <?php
  include "../paginas/cadastroEscola.php";
}
else if( $row['escola'] == $escola) {
  ?>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
  <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() --> -->
  <!-- <link rel="stylesheet" href="../alert/alerta.css"> -->

  <script>
  // xdialog.alert('Escola já cadastrada!');
  Alert.error('Escola já cadastrada!');
  </script>
<?php
  include "../paginas/cadastroEscola.php";

}

?>
