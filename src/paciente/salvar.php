<?php

// conexão com o banco
require 'src/conexao-com-banco.php';

// receber dados POST
$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';

// validar dados

// se dados estiverem válidos ...
if (!empty($nome) && !empty($data_nascimento) && !empty($cpf)) {
    // se o ID foi enviado ...
    if ($id > 0) {
        // === iguala e verifica seu tipo !== tipo diferente e iguala 
        // atualizar
        $sql = "UPDATE `paciente` SET
                    nome = '$nome',
                    data_nascimento = '$data_nascimento',
                    cpf = '$cpf'
                WHERE id = $id;";    
    // senão ...    
    } else {    
        // inserir
        $sql = "INSERT INTO `paciente` (nome, data_nascimento, cpf) 
                VALUES ('$nome','$data_nascimento', '$cpf');";        
    }
    // faz a query
    mysqli_query($conexao, $sql);
    // retornar para página pacientes
    header('location: http://localhost/clinica_umbrella/index.php?pagina=pacientes');
// senão ...
} else {
    // retornar para a página de cadastro
    header('location: http://localhost/clinica_umbrella/index.php?pagina=cadastrarPaciente&erro=Dados inválidos');
}
