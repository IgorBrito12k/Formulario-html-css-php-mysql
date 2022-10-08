<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'name');
$nasc = filter_input(INPUT_POST, 'nasc');
$cpf = filter_input(INPUT_POST, 'cpf');
$celular = filter_input(INPUT_POST, 'fone');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'ende');
$obs = filter_input(INPUT_POST, 'obs');


// echo "Nome: $nome <br>";
// echo "data de nascimento: $nasc <br>";
// echo "cpf: $cpf <br>";
// echo "celular: $celular <br>";
// echo "email: $email <br>";
// echo "obs: $obs <br>";

$result_usuarios = "INSERT INTO usuarios(nome, nasc, cpf, celular, email, endereco, obs) VALUES ('$nome', '$nasc', '$cpf', '$celular', '$email', '$endereco', '$obs')";

//executar a query
$resultado_usuario = mysqli_query($conn, $result_usuarios);

//verificar se foi salvo e voltar para a tela de cadastro
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso</p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'> Usuário não foi cadastrado com sucesso</p>";
    header("Location: index.php");
}