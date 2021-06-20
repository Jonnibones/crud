<?php 

require_once("interface/header.php");
require_once("config.php");
session_start();

if(!isset($_SESSION['btntype']) ){
$_SESSION['btntype'] = "btn btn-success";
$_SESSION['btnname'] = "Cadastrar";
}

 ?>

  	<main>

  	<!--Formulário-->
  	<div class="container-md">
    <form method="POST" action="processa.php">

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" value="<?php error_reporting(E_ALL ^ E_NOTICE); echo $_SESSION['valor'][0]; ?>" id="id_name" name="inp_nome">
  </div>

  <div class="mb-3">
    <label class="form-label">E-mail</label>
    <input type="email" name="inp_email" class="form-control" value="<?php error_reporting(E_ALL ^ E_NOTICE); echo $_SESSION['valor'][1]; ?>" id="id_email">
  </div>

  <button type="submit" name="btn_enviar" class="<?php echo $_SESSION['btntype']?>"><?php echo $_SESSION['btnname']?></button>
  
</form>
</div>

<?php
  unset($_SESSION['valor']);
  
  ?>

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
     //$id = "";
     $id = $listagem[$num][0];
     //$nome = "";
     $nome = $listagem[$num][1];
     //$email = "";
     $email = $listagem[$num][2];
     $lista .= "<tr>
     <td>" .$listagem[$num][0]. "</td>
     <td>" .$listagem[$num][1]. "</td>
     <td>" .$listagem[$num][2]. "</td>
     <td><a class='btn btn-info' href='processa.php?edit=$nome $email $id'>Editar</a>
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