<?php
session_start(); // Inicia a manipulação da sessão
session_destroy(); // Destrói a sessão e suas variáveis
header('location: index.php'); // Redireciona para o index
