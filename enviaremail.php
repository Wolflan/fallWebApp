<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
include('verificar_sessao.php');

include_once("human_gateway_client_api/HumanClientMain.php");

$humanMultipleSend = new HumanMultipleSend("braga.api", "LYfO2lKSbt");

$tipo = HumanMultipleSend::TYPE_C;

$msg_list  = $_SESSION['usuario']['telefone1']."".";Queda;004"."\n";
$msg_list .= $_SESSION['usuario']['telefone2']."".";Queda;005";

$callBack = HumanMultipleSend::CALLBACK_INACTIVE;

$responses = $humanMultipleSend->sendMultipleList($tipo, $msg_list, $callBack);


$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: alerta@fallm.xyz\r\n"; // remetente
$headers .= "Return-Path: alerta@fallm.xyz\r\n"; // return-path

$assunto = "Queda Detectada em ".$_SESSION['usuario']['nome'];
$mensagem = "Local onde ocorreu o acidente: https://www.google.com.br/maps/@".$_POST['latitude'].",".$_POST['longitude'].","."20z";


$envio = mail($_SESSION['usuario']['email1'], $assunto, $mensagem, $headers);
//$envio2 = mail($_SESSION['usuario']['email2'], $assunto, $mensagem, $headers);
//$envio3 = mail($_SESSION['usuario']['email3'], $assunto, $mensagem, $headers);

if($envio) {
	var_dump($envio);
    header('location:posqueda.php');
    
}
else {
    echo "A mensagem não pode ser enviada";
    var_dump($msg_list);
}
