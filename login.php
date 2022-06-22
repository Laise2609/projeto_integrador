<?php
require "cabecalho.php";
require "inc/funcoes_sessao.php";
require "inc/funcoes_usuario.php";

/* Mensagens para os processos de erros no login */
if( isset($_GET['acesso_proibido']) ){
  $feedback = "Usuário não encontrado!";
}   elseif( isset($_GET['logout']) ) {
    $feedback = "Você saiu do sistema!";
  } elseif( isset($_GET['nao_encontrado']) ) {
    $feedback = "Usuário não encontrado!";
  } elseif( isset($_GET['senha_incorreta']) ) {
    $feedback = "A senha está errada!";          
  } elseif( isset($_GET['campos_obrigatorios']) ) {
    $feedback = "Você deve preencher todos os campos!";
  } else {
  $feedback = "";
}

if(isset($_POST['entrar'])){
    if(empty($_POST['email']) || empty($_POST['senha'])){
      header("location:login.php?campos_obrigatorios");
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $senha = $_POST['senha'];
      $usuario = buscarUsuario($conexao, $email);
      
//---------------------------------------------------------------------------------------------------
  
    if($usuario != null){ 
        if(password_verify($senha, $usuario['senha'])){
          login($usuario['id'], $usuario['nome'], $usuario['email'], $usuario['tipo']);
          header("location:index.php");
        } else {
          header("location:login.php?senha_incorreta");
        }
  
      } else {
        header("location:login.php?nao_encontrado");
      }
    }
  }
?>
<div class="row">
  <article >
    <h2 >Bem vindo novamente!</h2>

    <form action="" method="post" id="form-login" name="form-login" >

      <p><?=$feedback?></p>

      <div >
        <label for="email">E-mail:</label>
        <input  type="email" id="email" name="email">
      </div>
      <div >
        <label for="senha">Senha:</label>
        <input  type="password" id="senha" name="senha">
      </div>

      <button name="entrar" type="submit">Entrar</button>

    </form>
  </article>

</div>
