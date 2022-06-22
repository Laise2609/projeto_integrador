<?php 
require "cabecalho.php";
require "inc/funcoes_cursos.php";
require "inc/funcoes_sessao.php";
$idCurso = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$cursos = lerDetalhes($conexao, $idCurso);

$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];


?>
<div class="row">
	<!-- INÍCIO ROW -->

	<article class="col-12 bg-white rounded shadow my-1 py-4">
		<h2><?=$cursos['nome']?></h2>
		<img src="imagem/<?=$cursos['imagem']?>" alt="Imagem de destaque do curso" class="float-left pr-2 img-fluid">
		<p><?=$cursos['descricao']?></p>
		<p><?=$cursos['quantidade']?></p>
	</article>
	<?php if($tipoUsuarioLogado == 'admin'){?>
        <div class="text-center">
        <a class="btn btn-warning btn-sm" 
        href="post-atualiza.php?id=<?=$cursos['id']?>">
        Atualizar
    	</a>
		</div>

        <div class="text-center">
        <a class="btn btn-danger btn-sm excluir"
        href="post-exclui.php?id=<?=$cursos['id']?>">
        Excluir
    	</a>
		</div>
	<?php } ?>
<?php require "rodape.php"?>