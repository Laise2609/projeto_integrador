<?php
require "inc/funcoes_sessao.php";
require "cabecalho.php";
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
      header("location:index.php?campos_obrigatorios");
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $senha = $_POST['senha'];
      $usuario = buscarUsuario($conexao, $email);
      var_dump($usuario);
    }}
      
      
//---------------------------------------------------------------------------------------------------
  
    /* if($usuario != null){ 
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
  } */
?>
<main>
    <div class="content">
      <div id="login">
          <form method="POST"> 
            <h1>Bem vindo!</h1> 
            <p> 
              <label for="nome_login">E-mail:</label>
              <input id="nome_login" name="nome_login" required="required" type="text" placeholder="Digite seu e-mail"/>
            </p>

            <?php echo $feedback ?> 
            
            <p> 
              <label for="email_login">Senha:</label>
              <input id="email_login" name="email_login" required="required" type="password" placeholder="Digite sua senha" /> 
            </p>
            
            <p> 
              <input type="submit" value="entrar" /> 
            </p>
            
            <p class="link">
              Ainda não tem conta?
              <a href="cadastro.php">Cadastre-se</a>
            </p>
          </form>
        </div>
      </div>
    </main>

</div>
