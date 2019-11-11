</head>
<body class="" style="background:#00000f">
  <!-- background="https://previews.123rf.com/images/lukbar/lukbar1805/lukbar180500008/101264678-colorful-numbers-background.jpg" -->
  <!-- background="https://blog.maxieduca.com.br/wp-content/uploads/2018/08/Imagem-destacada-2.jpg" -->

  <div class="p-2">

  </div>
  <div class="p-2 m-1">

  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      var dalto = document.getElementById('dalto');
      var orig = document.getElementById('orig');
      var campo = document.getElementById('campoA');
      var titulo = document.getElementById('titulo');
      var barra = document.getElementById('barra');
      var tab = document.getElementById('tabela');

      dalto.onclick = function(){
        campo.style.background = "#FFEBCD";
        titulo.style.color = "black";
        barra.style.background = "#FFDAB9";
        tab.style.background = "#FFDAB9";
      }
      orig.onclick = function(){
        campo.style.background = "#6699ff";
        titulo.style.color = "white";
        barra.style.background = "#4d88ff";
        tab.style.background = "#4d88ff";
      }
      function autoSaveRadioSelection(botao) {
        //Carrega o valor salvo
        var selectedValue = localStorage.getItem('botao');
        if (selectedValue == "dalto") {
          campo.style.background = "#FFEBCD";
          titulo.style.color = "black";
          barra.style.background = "#FFDAB9";
          tab.style.background = "#FFDAB9";
        }
        //Busca os radio boxes
        var radioboxes = document.getElementsByName('botao');

        function saveStatus(){
          //Grava o valor do radio selecionado
          localStorage.setItem(this.name, this.value);
        };

        //Navega pelos radios existentes
        for(var i = 0; i < radioboxes.length; i++) {
          radio = radioboxes[i];
          //vincula o evento de alteração a função que salva o valor
          radio.onchange = saveStatus;
          //Marca ou não o radio comparando seu valor com o valor salvo
          radio.checked = selectedValue == radio.value;
        };
      }

      autoSaveRadioSelection('test');
    });
  </script>
  <div style="margin-top:-1%;">
    <input style="margin-left:80%;" type="radio" id="orig"  name="botao" value="orig"><a style="color:white; margin-left:-5%;">Original</a><br>
    <input style="margin-left:80%;" type="radio" id="dalto" name="botao" value="dalto"><a style="color:white; margin-left:-5%;">Modo Daltônico</a>
  </div>
  <div class="container" style="background:#6699ff" id = "campoA">
    <div class="row">
      <?php include "../menu/bar.php"; ?>
        <div class="col-sm-7 pl-5 ml-4 " align="center">

          <div class="container">

            <a href="JavaScript: window.history.back();" class="pr-5 mr-5" style="margin:-50%;"><img src="https://img.icons8.com/carbon-copy/100/000000/circled-chevron-left.png" width="6%" title="Voltar Página"></a>
