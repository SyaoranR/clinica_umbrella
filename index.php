<?php include_once 'header.php'; ?>

<!-- mesma pasta, logo não precisa adicionar diretório -->

<div class="body-container">
    <?php
    
    /* colocar valores no espaço de página url num=78&charac=oi&ola=tudobem 
    #echo "<pre>";
    //echo '$_GET["chave"] <br>'; 
    var_dump($_GET);
    #echo "</pre>";
    */

    // include_once "view/home.php"
    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

    switch ($pagina) {
        case 'home':
            include_once 'view/home.php';
            break;
        case 'login':
            include_once 'view/login.php';
            break;
        default:
            include_once 'view/home.php'; 
    }

    ?>
</div>

<!-- mesma pasta, logo não precisa adicionar diretório -->

<?php include_once 'footer.php'; ?>