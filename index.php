<?php 
require_once("interface/header.php");
require_once("config.php");
 ?>

  	<main>
  	<!--Formulário-->
  	<div class="container-md">
    <form method="POST" action="processa.php">

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" value="" id="id_name" name="inp_nome">
  </div>

  <div class="mb-3">
    <label class="form-label">E-mail</label>
    <input type="email" name="inp_email" class="form-control" value="" id="id_email">
  </div>

  <button type="submit" name="btn_enviar" class="btn btn-success">Cadastrar</button>
  
</form>
</div>


</main>


 <div class="container-md">
   <table id="tab" class="table">
   	<!--Colunas-->

    <tr>
      <th>Id Funcionário</th>
      <th>Nome Funcionário</th>
      <th>Email Funcionário</th>
      <th>Ação</th>
    </tr>

    <?php
    $lista = new Usuario();
    $listagem = $lista->getList();
    $num = 0;
    $lista = "";
    foreach ($listagem as $value) {
     $id = "";
     $id = $listagem[$num][0];
     $lista .= "<tr>
     <td>" .$listagem[$num][0]. "</td>
     <td>" .$listagem[$num][1]. "</td>
     <td>" .$listagem[$num][2]. "</td>
     <td><a class='btn btn-info' href='index.php?edit=$id'>Editar</a>
     <a class='btn btn-danger' href='processa.php?delete=$id'>Deletar</a></td>
     </tr>";
     $num++;
    }
    echo $lista;
    ?>

    


</table>
</div>
</main>



  </body>

</html>