<?php 
//incluir o arquivo da conexão
include 'conexao.php';

//Receber os dados do formulario
$nm_empresa = $_POST['nm_empresa'];
$nr_contato = $_POST['nr_contato'];
$nm_contato = $_POST['nm_contato'];


//definir uma variavel para o insert 
$insert = "INSERT INTO tb_cliente VALUE (NULL, '$nm_empresa', '$nr_contato', '$nm_contato')";

//Utilizar a função query() para executar o insert dentro do banco

$query = $conexao->query($insert);

if ($query == true) {
   echo "<script> alert('Cliente cadastrado com sucesso!'); history.back() </script>";
}



?>