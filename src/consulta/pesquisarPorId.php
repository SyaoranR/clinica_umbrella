<?php

// conexão com o banco
require 'src/conexao-com-banco.php'; // aberto diretamente no index/*

// pegar o ID (condição ?; se sim pega o id; senão retorna 0)
$consultaId = isset($_GET['id']) ? $_GET['id'] : 0;

// pesquisar todos os consultas
$sql = "SELECT * FROM `consulta` WHERE id = $consultaId;";

// $consulta = mysqli_fetch_assoc(mysqli_query($conexao, $sql));
$consulta = mysqli_query($conexao, $sql);
$consulta = mysqli_fetch_assoc($consulta);

if (!$consulta) {
    $consulta = array();
    $consulta['data_consulta'] = "";   
}
