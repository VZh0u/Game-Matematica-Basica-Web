<?php
include "../paginas/chamarformatacao.php";
@session_start();
 ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<nav style="background:#4d88ff" class="navbar navbar-expand-lg navbar-dark" id="barra">
  <div class="container-fluid">

  <a class="" href="index.php">
    <!-- icone -->
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" width="60" height="40" alt="" content="0;url=../paginas/index.php">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">    <span class="navbar-toggler-icon"></span>
  </button>
<style media="screen">
table, tr, td {
border: 0px;
}
.margem:hover{
  margin-right: 30%;
  background-color: white;
}
#icones:hover {
  margin-right: 50%;
  background-color: white;
  /* background-color: rgba(0,0,0,0.06); */
}

</style>
  <div>
    <table>
      <tr style="background:#4d88ff" id="tabela">
        <td>
          <a class="nav-link margem" href="../paginas/index.php" onmouseover="style='color:black'; background:#6699ff; border-style:"
           onmouseout="style='color:black'" style="color:black;">
                <img src="https://image.flaticon.com/icons/svg/263/263115.svg" width="10%" title="Página Inicial">
                Início<span class="sr-only"></span></a>
              </li>
        </td>
        <td>
          <a class="nav-link" href="../paginas/comojogar.php" id="icones" style="color:black;margin-left:-40%;">
            <img src="https://img.icons8.com/ios/100/000000/question-mark.png" width="8%" title="Página Inicial">
            Como Jogar?<span class="sr-only"></span></a>
        </td>
        <td>

          <a class="nav-item dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-left:-65%;" onmouseover="style='cursor: pointer; color:black; margin-left:-65%;'">
              <img src="https://img.icons8.com/dotty/80/000000/student-registration.png" width="14%" title="Página Inicial">Cadastrar</a>
              <ul class="dropdown-menu" style="margin-left:50%; margin-top:-2.5%;">
                <li><a href="../paginas/cadastro.php">Aluno / Professor</a></li>
                <li><a href="../paginas/cadastroEscola.php">Escola</a></li>
              <!-- <li><a href="../paginas/cadastro.php">Professor</a></li> -->
            </ul>
          </a>
        </td>

        <td>
            <a class="nav-link" href="../paginas/login.php" id="icones" style="color:black; margin-left:-70%;">
              <img src="https://img.icons8.com/ios/100/000000/enter-2.png" width="8%" title="Página Inicial">Login<span class="sr-only"></span></a>
        </td>
<!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      <td>
        <?php if (isset($_SESSION['nick'])) { ?>
            <a class="nav-item dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-left: -200%;" onmouseover="style='cursor: pointer; color:black; margin-left:-200%;'">
                <?php echo $_SESSION['nick'];  ?></a>
                <ul class="dropdown-menu" style="margin-top: -2.5%;margin-left:81%">
                  <?php if ($_SESSION['tipoLogin'] == "Aluno"): ?>
                    <li><a href="../paginas/perfil.php">Perfil</a></li>
                  <?php endif; ?>
                  <?php if ($_SESSION['tipoLogin'] == "Professor"): ?>
                    <li><a href="../paginas/perfilProfessor.php">Perfil</a></li>
                  <?php endif; ?>
                  <li><a href="../verificarDados/deslogar.php">Sair</a></li>
              </ul>
            </a>
      </td>
                      <!-- <li class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><?php?></a>
                        <ul class="dropdown-menu">
                          <li><a href="../verificarDados/deslogar.php" class="dropdown-item">Sair</a></li>
                        </ul>
                      </li>
                    </ul>
                  </ul> -->


              <?php } ?>
            </div>
          </div>

    </table>
    </ul>
    </ul>
  </div>
</nav>
