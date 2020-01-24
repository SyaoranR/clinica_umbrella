<?php

// conexão com o banco
require '../conexao-com-banco.php';

// receber dados POST
$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$area = isset($_POST['area']) ? $_POST['area'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

// validar dados

// se dados estiverem válidos ...
if (!empty($nome) && !empty($area) && !empty($email)) {
    // se o ID foi enviado ...
    if ($id > 0) {
        // === iguala e verifica seu tipo !== tipo diferente e iguala 
        // atualizar
        $sql = "UPDATE `medico` SET
                    nome = '$nome',
                    area = '$area',
                    email = '$email'
                WHERE id = $id;";    
    // senão ...    
    } else {    
        // inserir
        $sql = "INSERT INTO `medico` (nome, area, email) 
                VALUES ('$nome','$area', '$email');";        
    }
    // faz a query
    mysqli_query($conexao, $sql);

    // echo mysqli_error($conexao);

    // retornar para página médicos
    header('location: http://localhost/clinica_umbrella/index.php?pagina=medicos');
// senão ...
} else {
    // retornar para a página de cadastro
    header('location: http://localhost/clinica_umbrella/index.php?pagina=salvarMedico&erro=Dados inválidos');
}
