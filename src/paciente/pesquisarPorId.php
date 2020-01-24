<?php

// conexão com o banco
require 'src/conexao-com-banco.php'; // aberto diretamente no index/*

// pegar o ID (condição ?; se sim pega o id; senão retorna 0)
$pacienteId = isset($_GET['id']) ? $_GET['id'] : 0;

// pesquisar todos os pacientes
$sql = "SELECT * FROM `paciente` WHERE id = $pacienteId;";

// $paciente = mysqli_fetch_assoc(mysqli_query($conexao, $sql));
$paciente = mysqli_query($conexao, $sql);
$paciente = mysqli_fetch_assoc($paciente);

if (!$paciente) {
    $paciente = array();
    $paciente['nome'] = "";
    $paciente['data_nascimento'] = "";
    $paciente['cpf'] = "";
}
