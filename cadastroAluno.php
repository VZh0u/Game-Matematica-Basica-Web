<?php
include "chamarformatacao.php";
include "../conexao/conexao.php";
?>

<html lang="pt-br" dir="ltr">
  <head>

    <title>Tela Aluno</title>
    <script src="../formatacao/jquery-3.4.1.js"></script>


    <!-- Personalizar alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/xxjapp/xdialog@3/xdialog.min.js"></script> <!-- Import xdialog, para formatar o alert() -->
    <link rel="stylesheet" href="../alert/alerta.css">


    <!-- verificando campos -->
    <script type="text/javascript">
    function validar(){

      var escola = formAluno.escola.value;
      var turma = formAluno.turma.value;
      var periodo = formAluno.periodo.value;

      var esc = document.formAluno.escola.options[document.formAluno.escola.selectedIndex].text;
      var tur = document.formAluno.turma.options[document.formAluno.turma.selectedIndex].text;
      var peri = document.formAluno.periodo.options[document.formAluno.periodo.selectedIndex].text;


      if (escola == "") {
        xdialog.alert('Escola não selecionada!');
        formAluno.escola.focus();
        return false;
      }
      if (turma == "") {
        xdialog.alert('Turma não selecionada!');
        formAluno.turma.focus();
        return false;
      }

      if (periodo == "") {
        xdialog.alert('Período não selecionado!');
        formAluno.turma.focus();
        return false;
      }
    }
        </script>

  </head>
  <body class="bg-dark">
    <div class="p-1">

    </div>
    <div class="container bg-warning">
      <div class="row">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" alt="" width=60 height=40>
          <div class="col-sm-11 pl-5 ml-4 " align="center">
            <div class="p-5 m-2">

            </div>
            <div class="container">
            <form action="../verificarDados/verificarAluno.php" name="formAluno" method="post" class="pl-5 pt-5 pb-5 text-left w-50">
            <!-- action, informa para onde os dados iram -->
            <!-- post esconde os dados privados da url -->
            <label>Nome: </label>
            <input type="text" name="nome" value="" required><br>

            <?php
            require '../conexao/conexao.php';
            $query = mysqli_query($con, "SELECT idescola, escola FROM escola ORDER BY escola");
            ?>

            <label>Escola: </label>
            <select class="pr-5 pl-1" name="escola">
              <option value=""  >Selecione a sua escola</option>
              <?php while($row = mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $row['idescola'] ?>"  ><?php echo $row['escola'] ?></option>
              <?php } ?>
            </select>
            <br><label>Turma: </label>
            <select class="pr-3" name="turma">
             <!-- para relacionar a cidade escrita com a cidade no banco -->
             <option value="" >Selecione o ano de sua turma</option>
             <option value="1 Ano" >1 Ano</option>
             <option value="2 Ano" >2 Ano</option>
             <option value="3 Ano" >3 Ano</option>
             <option value="4 Ano" >4 ano</option>
             <option value="5 Ano" >5 Ano</option>
           </select><br>
            <label>Período: </label>
            <select class="pr-3" name="periodo">
             <!-- para relacionar a cidade escrita com a cidade no banco -->
             <option value="" >Selecione o periodo da turma</option>
             <option value="Matutino" >Matutino</option>
             <option value="Vespertino" >Vespertino</option>
           </select><br>
            <label>Nick: </label>
            <input type="text" name="nick" value="" required><br>
            <label>Senha: </label>
            <input type="password" name="senha" value="" required><br>

            <div class="text-center pr-5">
              <input type="submit" value="Cadastrar" class="p-2 mt-1 btn-danger" id="btn-save" onclick="return validar()"></input>
            </div>

            </form>
            <br>

            <br>
            <div class="p-4 m-4">

            </div>
        </div>
      </div>
    </div>
    <div class="p-3">

    </div>
  </body>
</html>
