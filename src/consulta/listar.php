<?php

// conexão com o banco
require 'src/conexao-com-banco.php'; // aberto diretamente no index/*

// pesquisar todas as consultas
$sql = "SELECT 
        consulta.id AS id, 
        consulta.data_agendamento AS data_agendamento,
        consulta.data_consulta AS data_consulta,
        paciente.nome AS nome_paciente,
        medico.nome AS nome_medico
        FROM `consulta`
        INNER JOIN `paciente` ON paciente.id = consulta.id_paciente
        INNER JOIN `medico` ON medico.id = consulta.id_medico;";

$tabelaConsultas = mysqli_query($conexao, $sql);

// armazenar em array associativo
