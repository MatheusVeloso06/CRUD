<?php 
//incluir o arquivo da conexão
include 'conexao.php';

//Receber os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



//definir uma variavel para o insert 
$insert = "INSERT INTO tb_usuario VALUE (NULL, '$nome', '$email', '$usuario', '$senha')";

//Utilizar a função query() para executar o insert dentro do banco

$query = $conexao->query($insert);

if ($query == true) {
   echo "<script> alert('Usuario cadastrado com sucesso!'); history.back() </script>";
}



?>