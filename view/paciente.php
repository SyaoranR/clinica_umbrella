<?php 

// require arquivo de listagem
require 'src/paciente/listar.php'; ?>

<br><br>
<!-- montar tabela (html) -->
<table class="table table-bordered table-hover table-striped" style="width: 100%" id="tabela-pacientes">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($linha = mysqli_fetch_assoc($tabelaPacientes)) { ?>
    <!-- fetch = formata cada linha do while -->

    <tr>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['data_nascimento'] ?></td>
        <td><?= $linha['cpf'] ?></td>
        <td>
            <a href="?pagina=salvarPaciente&id=<?= $linha['id'] ?>">Editar</a>
            |
            <!-- apenas faz uma ação -->
            <a href="src/paciente/excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
        </td>
    </tr>

    <?php } ?>
    </tbody>
</table>

<!-- chamar datatable (baixar e importar framework) -->

<!-- não funciona aqui
<script>
$(document).ready( function () {
    $('#tabela-pacientes').DataTable();
} );
</script>
-->
