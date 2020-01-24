<?php

// conexão com o banco
require '../conexao-com-banco.php';

// pegar o ID (condição ?; se sim pega o id; senão retorna 0)
$medicoId = isset($_GET['id']) ? $_GET['id'] : 0;

// tentar excluir do BD
$sql = "DELETE FROM `medico` WHERE id =$medicoId";
mysqli_query($conexao, $sql);

// retornar para a página médicos
header('location: http://localhost/clinica_umbrella/index.php?pagina=medicos');
