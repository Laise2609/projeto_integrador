<?php require "cabecalho.php" ?>

<div class="row my-1 mx-md-n1">
  <div class="col-md-6 my-1 px-md-1">
    <article class="card shadow-sm h-100">
      <a href="post-detalhe.php class="card-link">
        <img class="card-img-top" src="imagens/<?=$post['imagem']?>" alt="Imagem de destaque do curso">
        <div class="card-body">
          <h5 class="card-title">Curso</h5>
          <p class="card-text">Descricao do curso</p>
        </div>
      </a>
    </article>
  </div>

<?php require "rodape.php" ?>