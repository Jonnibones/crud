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
    <input type="text" class="form-control" id="id_name" name="nm_nome">
  </div>

  <div class="mb-3">
    <label class="form-label">E-mail</label>
    <input type="email" name="nm_email" class="form-control" id="id_email">
  </div>

  <button type="submit" name="btn_enviar" class="btn btn-success">Cadastrar</button>
  
</form>
</div>


</main>


 <div class="container-md">
   <table id="tab" class="table">
   	<!--Colunas-->
<thead>
  <tr>
 	<th>Id funcionário</th>
    <th>Nome funcionário</th>
    <th>Email funcionário</th>
    <th colspan="3">Ação</th>
  </tr>
</thead>

<thead>
<td>
<?php $usu_id = new Usuario();
$lista = $usu_id->getListid();
 foreach ($lista as $value) {
 $lista2 = $value;
 echo "<br>".$lista2."<br>";
}  ?>
</td>

<td>
<?php $usu_id = new Usuario();
$lista = $usu_id->getListnome();
 foreach ($lista as $value) {
 $lista2 = $value;
 echo "<br>".$lista2."<br>";
}  ?>
</td>

<td>
<?php $usu_id = new Usuario();
$lista = $usu_id->getListemail();
 foreach ($lista as $value) {
 $lista2 = $value;
 echo "<br>".$lista2."<br>";
}  ?>
</td>
</thead>

</table>
</div>
</main>



  </body>

</html>