<?php
$servidor = "localhost"; 
$usuario = "root";	
$senha = ""; 
$banco = "banco_oneup"; 

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");