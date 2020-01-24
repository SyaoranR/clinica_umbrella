<?php

// conexão com o banco
require 'src/conexao-com-banco.php'; // aberto diretamente no index/*

// pegar o ID (condição ?; se sim pega o id; senão retorna 0)
$medicoId = isset($_GET['id']) ? $_GET['id'] : 0;

// pesquisar todos os médicos
$sql = "SELECT * FROM `medico` WHERE id = $medicoId;";

// $medico = mysqli_fetch_assoc(mysqli_query($conexao, $sql));
$medico = mysqli_query($conexao, $sql);
$medico = mysqli_fetch_assoc($medico);

if (!$medico) {
    $medico = array();
    $medico['nome'] = "";
    $medico['area'] = "";
    $medico['email'] = "";
}
