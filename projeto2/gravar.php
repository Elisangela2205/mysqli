<?php
date_default_timezone_set("America/Sao_Paulo");
//resgate de dados de tela
$nome= $_POST["nome"];
$email= $_POST["email"];
$telefone= $_POST["telefone"];
$dtcadastro= date("Y-m-d"); //padrão de banco

//abrir conexão com o banco de dados.
include_once'conexao.php';

//montar o sql de gravação
//(null,'ana','ana@gmail','1111-2222','2022-11-03');
$sql = "insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

//gravar

if(mysqli_query($con,$sql)){
    $msg = "Gravado com sucesso";
}else{
    $msg = "Erro ao gravar!";
}
// fechar a conexão com o banco
mysqli_close($con);
echo"<script> alert('".$msg."'); location.href='index.php';</script>";
?>
