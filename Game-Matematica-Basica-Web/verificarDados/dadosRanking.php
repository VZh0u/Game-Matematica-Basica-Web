<!-- <script type="text/javascript" src="../formatacao/jquery-3.3.1.js"></script> -->
<script type="text/javascript" src="../formatacao/datatable.js"></script>
<!-- <script type="text/javascript" src="../formatacao/dataTables.responsive.min.js"></script> -->
<script type="text/javascript" src="../formatacao/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="..\formatacao\jquery.dataTables.min.css">
<!-- <link rel="stylesheet" href="..\formatacao\responsive.dataTables.min.css"> -->

<?php

  $aluno = mysqli_query($con, "SELECT aluno.aluno, aluno.nick, turma.turma, turma.periodo, escola.escola, professor.professor
    FROM aluno INNER JOIN turma ON aluno.idturma = turma.idturma INNER JOIN escola ON turma.idescola = escola.idescola
    INNER JOIN professor ON turma.idprofessor = professor.idprofessor ORDER BY aluno.aluno");
 ?>
 <style media="screen">
 div.container {
      width: 140%;

  }
 </style>
            <table id="teste" class="display responsive nowrap compact" style="margin-left:11%;">
          <thead>
              <tr  style="background:#6699ff">
                  <!-- nome, turma, pontuação -->
                  <th>Nome</th>
                  <th>Nick</th>
                  <th>Professor</th>
                  <th>Turma</th>
                  <th>Período</th>
                  <th>Escola</th>
                  <!-- <th>Pontuação</th> -->
              </tr>
          </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_assoc($aluno)) {?>
              <!-- Linha -->
              <tr>
                <!-- Colunas -->
              <td><?php echo "".$row['aluno']; ?></td>
              <td><?php echo "".$row['nick']; ?></td>
              <td><?php echo "".$row['professor']; ?></td>
              <td><?php echo "".$row['turma']; ?></td>
              <td><?php echo "".$row['periodo']; ?></td>
              <td><?php echo "".$row['escola']; ?></td>
              <!-- <td><?php echo "".$row['pontuacao']; ?></td> -->
              </tr>
            <?php } ?>
          </tbody>
      </table>
