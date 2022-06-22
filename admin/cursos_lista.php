<?php
require "cabecalho-admin.php";
require "../inc/funcoes_cursos.php";
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

$cursoslido = lerCursos($conexao);
var_dump($cursoslido)
?>
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Cursos</h2>
    <p class="lead text-right">
      <a class="btn btn-primary" href="inserir-curso.php">Inserir novo Curso</a>
    </p>
            
    <div class="table-responsive"> 

      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th>nome</th>
            <th>vagas</th>
            <th colspan="2" class="text-center">Operações</th>
          </tr>
        </thead>
      
        <tbody>
<?php foreach($cursoslido as $curso){ 
            var_dump($curso);
?>          
            <tr>
            <td> <?=$curso['nome']?> </td>

            <td><?=$curso['quantidade']?> </td>

              <a class="btn btn-warning btn-sm" 
              href="post-atualiza.php?id=<?=$curso['id']?>">
                  Atualizar
              </a>
            </td>
            <td class="text-center">
              <a class="btn btn-danger btn-sm excluir"
              href="post-exclui.php?id=<?=$curso['id']?>">
                  Excluir
              </a>
            </td>
          </tr>
<?php }?>
        </tbody>                
      </table>
      
    </div>
  </article>
</div>