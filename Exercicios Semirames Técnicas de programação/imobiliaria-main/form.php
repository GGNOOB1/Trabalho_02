<?php

//Incluindo as classes
include_once('./classes/casa.class.php');
include_once('./classes/apartamento.class.php');

//Credenciais do Banco de Dados
$db = "fatecgrupo4";
$host = "fatecgrupo4.mysql.dbaas.com.br";
$user = "fatecgrupo4";
$senha = "grupo4124";

//Informações do Formulário
$tipo = $_POST['Tipo'];
$quartos = $_POST['Quartos'];
$preco = $_POST['Preço'];
$endereco = $_POST['Endereço'];
$descricao = $_POST['Descrição'];
if(isset($_POST['Quintal'])){
    $quintal = $_POST['Quintal'];
} else {
    $quintal = "Nao";
}

if($_POST['Condomínio'] !== '') {
    $condominio =  $_POST['Condomínio'];
} else {
    $condominio = 0;
}

$imovel = "";

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($tipo == "Casa") {
    $imovel = new Casa($quartos, $preco, $endereco, $quintal, $descricao);
    $sql = "INSERT INTO imovel (tipo, quartos, preco, endereco, quintal, descricao) VALUES (?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tipo, $imovel->quartos, $imovel->valor, $imovel->endereco, $imovel->quintal, $imovel->descricao]);
} elseif($tipo == "Apartamento") {
    $imovel = new Apartamento($quartos, $preco, $endereco, $condominio, $descricao);
    $sql = "INSERT INTO imovel (tipo, quartos, preco, endereco, quintal, condominio, descricao) VALUES (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tipo, $imovel->quartos, $imovel->valor, $imovel->endereco, $quintal, $imovel->condominio, $imovel->descricao]);
}





header("Location: index.php");
exit();