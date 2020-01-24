<?php 

// require arquivo de listagem
require 'src/consulta/listar.php'; 
// require arquivo de listagem
require 'src/paciente/listar.php'

?>

<br><br>
<!-- montar tabela (html) -->
<table class="table table-bordered table-hover table-striped" style="width: 100%" id="tabela-consultas">
    <caption> <!-- legenda da tabela -->
        <a class="btn btn-success" href="?pagina=salvarConsulta">Cadastrar</a>
    </caption> 
    <thead>
        <tr>
            <th>Data de Agendamento</th>
            <th>Data da Consulta</th>
            <th>Paciente</th>
            <th>Médico</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody> <!-- table body -->
    <?php while ($linha = mysqli_fetch_assoc($tabelaConsultas)) { ?>
    <!-- fetch = formata cada linha do while -->

    <tr>
        <td><?= $linha['data_agendamento'] ?></td>
        <td><?= $linha['data_consulta'] ?></td>
        <td><?= $linha['nome_paciente'] ?></td>
        <td><?= $linha['nome_medico'] ?></td>
        <td>
            <a href="?pagina=salvarConsulta&id=<?= $linha['id'] ?>">Editar</a>
            |
            <!-- apenas faz uma ação -->
            <a href="src/consulta/excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
        </td>
    </tr>

    <?php } ?>
    </tbody> <!-- fim table body -->
</table>

<!-- chamar datatable (baixar e importar framework) -->

<!-- não funciona aqui
<script>
$(document).ready( function () {
    $('#tabela-consultas').DataTable();
} );
</script>
-->
