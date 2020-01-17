<?php

include "conexao-com-banco.php";

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';

$sql = "SELECT * FROM `atendente` 
        WHERE login = '$login' AND senha = '$senha';";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    // Prepara o ambiente: inicia a sessão e formata os dados do usuário    
    session_start();
    $usuario = mysqli_fetch_assoc($resultado);
    
    // Salva as informações do usuário
    $_SESSION['usuario_fez_login']  = true;
    $_SESSION['nome_do_usuario'] = $usuario['nome'];
    
    // Fecha a conexão com o banco de dados e redireciona
    mysqli_close($conexao);
    header("location: http://localhost/clinica_umbrella/index.php?pagina=home");
} else {
    mysqli_close($conexao);
    header('location: http://localhost/clinica_umbrella/index.php?pagina=login&erro=Login ou Senha inválidos');
}
