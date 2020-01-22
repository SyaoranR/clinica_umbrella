<!DOCTYPE html>
<html lang="pt-BR">
<head> <!-- olhaaaaaaaaaa! o cometáriooooooo! -->
    <!-- Ajuda para reconhecimento 
        Reconhecimento de caracteres especiais -->
    <meta charset="UTF-8">
    <!-- Escala de tamanho de tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compatibilidade com protocolo do internet microsoft edge? -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- indica qual vai ser o arquivo (a referência para estilo) de estilo -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <title>Document</title>
</head>
<body>
<header>
    
    <!-- Cabeçalho -->
    <!-- Define um espaço sem visualização, divide em partes menores -->
    <nav class="navbar sticked-top">
    <div class="container cabecalho">
        <a href="?pagina=home">
            <!-- Alt = texto alternativo se img não aparecer --> 
            <img id="img-logo" src="img/umbrella.png" alt="Logo">
            <span id="nome-logo">Clínica Umbrella</span>
        </a>
        <div class="menu">
            <ul> <!-- unordered list -->
                <?php if (isset($_SESSION['usuario_fez_login'])) { ?>

                    <a href="?pagina=consultas">
                        <li class="botao">
                            Consultas
                        </li>
                    </a>
                    <a href="?pagina=pacientes">
                        <li class="botao">
                            Pacientes
                        </li>
                    </a>
                    <a href="?pagina=medicos">
                        <li class="botao">
                            Médicos
                        </li>
                    </a>
                    <a href="sair.php">Logoff</a>

                <?php } else { ?>}
                
                    <a href="?pagina=login">
                        <li class="botao">
                            Fazer Login
                        </li>
                    </a>
                    

                <?php } ?>
            </ul>
        </div>
        <!--
        <button>
            <a href="?pagina=login">Fazer Login</a>
        </button>
        -->
        <!-- 
        Alt = texto alternativo se img não aparecer  
        <img id="img-logo" src="img/umbrella.png" alt="Logo">
        <span id="nome-logo">Clínica Umbrella</span>
         -->
    </div>
    </nav>         
</header>    
