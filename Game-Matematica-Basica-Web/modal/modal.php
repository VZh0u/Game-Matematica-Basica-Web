<div class="container">
  <?php
  // include ("../componentes/head.php");
  include "../paginas/chamarformatacao.php";
  ?>
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">

      <div class="modal-content bg-warning">
        <div class="row-5">
          <button type="button" class="close" data-dismiss="modal"aria-label="Close"> <!---->
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-header-2">
          <div class="text-center log ml-4">
            <h4 style="color: rgb(51, 51, 51); font-size: 32px"
            class="modal-title centro" id="exampleModalLabel"><img src="../img/logo2.png" alt=""height="100px"><br><b>Bem-vindo(a) <br> ao Hígia</b></h4>
          </div>
        </div>
        <div class="modal-body text-center  m-1 ml-4">
          <form action="" method="post">

            <input placeholder="Email"type="text" name="login" value="" class="form-control" style="width: 420px"><br>

            <input placeholder="Senha "type="password" name="senha" value="" class="form-control"style="width: 420px"><br>

            <ul class="nav  justify-content-center">

              <li class="nav-item mr-3">
                <button type="button"class="btn btn-danger  m-1 ml-3" style="width: 350px">Entrar</button>
              </li>
              <li class="nav-item mr-3">
                <button type="button"class="btn btn-danger  m-1 ml-3" style="width: 350px">Recuperar Senha</button>
              </li>

            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
