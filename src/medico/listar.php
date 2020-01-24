<?php

// conexão com o banco
require 'src/conexao-com-banco.php'; // aberto diretamente no index/*

// pesquisar todos os médicos
$sql = "SELECT * FROM `medico`;";

$tabelaMedicos = mysqli_query($conexao, $sql);

// armazenar em array associativo
