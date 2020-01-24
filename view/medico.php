<?php 

// require arquivo de listagem
require 'src/medico/listar.php'; ?>

<br><br>
<!-- montar tabela (html) -->
<table class="table table-bordered table-hover table-striped" style="width: 100%" id="tabela-medicos">
    <caption> <!-- legenda da tabela -->
        <a class="btn btn-success" href="?pagina=salvarMedico">Cadastrar</a>
    </caption> 
    <thead>
        <tr>
            <th>Nome</th>
            <th>Área</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody> <!-- table body -->
    <?php while ($linha = mysqli_fetch_assoc($tabelaMedicos)) { ?>
    <!-- fetch = formata cada linha do while -->

    <tr>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['area'] ?></td>
        <td><?= $linha['email'] ?></td>
        <td>
            <a href="?pagina=salvarMedico&id=<?= $linha['id'] ?>">Editar</a>
            |
            <!-- apenas faz uma ação -->
            <a href="src/medico/excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
        </td>
    </tr>

    <?php } ?>
    </tbody> <!-- fim table body -->
</table>

<!-- chamar datatable (baixar e importar framework) -->

<!-- não funciona aqui
<script>
$(document).ready( function () {
    $('#tabela-medicos').DataTable();
} );
</script>
-->
