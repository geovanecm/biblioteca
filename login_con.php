<?php


if(isset($_SESSION['email'])){

  die("<script type='text/javascript'> window.top.location='index.php';</script>");


}else{



if(!empty($_POST)){

include "conexao.php";

  //resgata dados pela url
$email = $_POST['email'];
$senha = $_POST['senha'];




//Comando SQL de verifica��o de autentica��o
$sql = "SELECT email, senha
FROM admin
WHERE email = '$email'
AND senha = '$senha'";

$res = mysqli_query($con, $sql) or die ("Erro na seleção da tabela.");

if (mysqli_num_rows($res) > 0) {

// session_start inicia a sess�o
session_start();

$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;

die("<script type='text/javascript'>alert('login realizado com sucesso!!'); window.top.location='admin/index.php';</script>");

}else{


die("<script type='text/javascript'>alert('E-mail ou senha não conferem!!'); window.top.location='login.php';</script>");

  }

}
}

?>