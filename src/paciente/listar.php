<?php

// conexão com o banco
require 'src/conexao-com-banco.php'; // aberto diretamente no index/*

// pesquisar todos os pacientes
$sql = "SELECT * FROM `paciente`;";

$tabelaPacientes = mysqli_query($conexao, $sql);

// armazenar em array associativo
