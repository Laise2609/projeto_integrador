<?php
require "inc/funcoes_cursos.php";
require "inc/funcoes_sessao.php";
verificaAcesso();

$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirPost($conexao, $id, $idUsuarioLogado, $tipoUsuarioLogado);
header("location:cursos.php");