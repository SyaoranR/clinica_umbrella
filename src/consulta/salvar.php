<?php

// conexão com o banco
require '../conexao-com-banco.php';

// receber dados POST
$id = isset($_POST['id']) ? $_POST['id'] : 0;
$data_consulta = isset($_POST['data_consulta']) ? $_POST['data_consulta'] : '';
$id_paciente = isset($_POST['id_paciente']) ? $_POST['id_paciente'] : 0;
$id_medico = isset($_POST['id_medico']) ? $_POST['id_medico'] : 0;
$data_agendamento = date('Y-m-d');
// M mês por extenso, D dia por extenso

// validar dados

// se dados estiverem válidos ...
if (!empty($data_consulta) && $id_paciente != 0 && $id_medico != 0) {
    // se o ID foi enviado ...
    if ($id > 0) {
        // === iguala e verifica seu tipo !== tipo diferente e iguala 
        // atualizar
        $sql = "UPDATE `consulta` SET
                    data_consulta = '$data_consulta',
                    id_paciente = $id_paciente,
                    id_medico = $id_medico
                WHERE id = $id;";    
    // senão ...    
    } else {    
        // inserir
        $sql = "INSERT INTO `consulta` (data_agendamento, data_consulta, id_paciente, id_medico) 
                VALUES ('$data_agendamento','$data_consulta', $id_paciente, $id_medico);";        
    }
    // faz a query
    mysqli_query($conexao, $sql);

    // echo mysqli_error($conexao);

    // retornar para página consultas
    header('location: http://localhost/clinica_umbrella/index.php?pagina=consultas');
// senão ...
} else {
    // retornar para a página de cadastro
    header('location: http://localhost/clinica_umbrella/index.php?pagina=salvarConsulta&erro=Dados inválidos');
}
