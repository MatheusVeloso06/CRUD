<?php

//definir as variaveis que serão usados para a conexão ao banco

$servidor = 'localhost';
$usuario_servidor = 'root';
$senha_servidor = 'root';
$banco_dados = 'db_clientes';

//utilizar a função msqli para executar a conexão com o banco

$conexao = new mysqli($servidor, $usuario_servidor, $senha_servidor, $banco_dados);

if(!$conexao) {
    die('Falha na conexão');
}









?>