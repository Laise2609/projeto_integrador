<?php 
require "cabecalho.php";
require "inc/funcoes_cursos.php";
$cursos = lerTodosOsCursos($conexao);
?>

<div class="row my-1 mx-md-n1">

<?php foreach($cursos as $cursos)?>

  <div class="col-md-6 my-1 px-md-1">
    <article class="card shadow-sm h-100">
      <a href="curso-detalhe.php?=id<?=$cursos["id"]?>" class="card-link">
        <img class="card-img-top" src="imagens/<?=$curso['imagem']?>" alt="Imagem de destaque do curso">
        <div class="card-body">
          <h5 class="card-title"><?=$curso['nome']?></h5>
          <p class="card-text"><?=$curso['descricao']?></p>
          <p><?=$curso['quantidade']?></p>
        </div>
      </a>
    </article>
  </div>

<?php require "rodape.php" ?>