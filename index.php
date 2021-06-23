<?php 
//Carrega o cabeçalho
require_once("interface/header.php");
//Carrega a página config.php
require_once("config.php");
//Inicia a sessão
session_start();
/*Verifica se a variável Super global está definida.
Caso não esteja ela inicia com os valores abaixo para o texto e tipo do botão de cadastro*/
if(!isset($_SESSION['btntype']) ){
$_SESSION['btntype'] = "btn btn-success";
$_SESSION['btnname'] = "Cadastrar";
}
 ?>

<main>
<!--Div para mensagem para quando uma ação é executada -->
<div class="<?php echo $_SESSION['msgcolor']?>"><p><?php
  error_reporting(E_ALL ^ E_NOTICE);
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
  unset($_SESSION['msgcolor']);
?></p></div>

  	<!--Formulário-->
<div class="container-md">
  <form method="POST" action="processa.php">
    <div class="mb-3">
    <label class="form-label">Nome</label>
    <input required type="text" class="form-control" value="<?php error_reporting(E_ALL ^ E_NOTICE); echo $_SESSION['valor'][0]; ?>" id="id_name" name="inp_nome">
    </div>
    <div class="mb-3">
    <label class="form-label">E-mail</label>
    <input required type="email" name="inp_email" class="form-control" value="<?php error_reporting(E_ALL ^ E_NOTICE); echo $_SESSION['valor'][1]; ?>" id="id_email">
    </div>
    <button type="submit" name="btn_enviar"class="<?php echo $_SESSION['btntype']?>"><?php echo $_SESSION['btnname']?></button>
  </form>
</div>

<!--Tabela-->
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
    //Instância da classe
    $lista = new Usuario();
    //Chamada para o método
    $listagem = $lista->getList();
    //Contador que incrementa durante o laço foreach
    $num = 0;
    //Variável que inicia como string
    $lista = "";
    //Verifica se a variável não retorna NULL(se o array com os dados da tabela não está vazio)
   if($listagem != NULL){
    //Caso verdadeiro, enquanto o array é percorrido estará sendo imprimida uma linha com os valores de cada coluna da tabela.  
    foreach ($listagem as $value) {
     //Variáveis que recebem valores da tabela, para serem passados via GET
     $id = $listagem[$num][0];
     $nome = $listagem[$num][1];
     $email = $listagem[$num][2];
     //Linhas, colunas com valores do banco de dados e botões para ação
     $lista .= "<tr>
     <td>" .$listagem[$num][0]. "</td>
     <td>" .$listagem[$num][1]. "</td>
     <td>" .$listagem[$num][2]. "</td>
     <td><a class='btn btn-info' href='processa.php?edit=$nome,$email,$id'>Editar</a>
     <a class='btn btn-danger' href='processa.php?delete=$id'>Deletar</a></td>
     </tr>";
     //Incremento do contador
     $num++;
    }
    //Imprime os registros contidos na variável
    echo $lista;
    //Caso a variável $listagem retorne NULL
  }else{
    echo "<h3>Sem registros na tabela.</h3>";
  }
    ?>
    </table>
  </div>
</main>
  </body>

</html>