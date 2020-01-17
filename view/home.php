<!-- ?php session_start(); ?> -->
<?php if (isset($_SESSION['usuario_fez_login'])) { ?>
<h1>Bem vindo, <?php echo $_SESSION['nome_do_usuario'] ?> </h1>
<?php } else { ?>
    <h1>Bem vindo à Clínica Umbrella!</h1>
<?php } ?>

<!--
<h1>Bem vindo à Clínica Umbrella!</h1> -->

<hr>
<div class="center">
    <img id="img-home" src="img/umbrella.png" alt="Umbrella">
</div>
