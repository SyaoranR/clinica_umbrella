<?php 

require 'src/consulta/pesquisarPorId.php'; 
// require arquivo de listagem
require 'src/paciente/listar.php';
// require arquivo de listagem
require 'src/medico/listar.php';

?>

<div class="container">
    <!-- <div class="grade"> -->
    
        <h2>Salve o consulta antes que ele morra!</h2>
        <form action="src/consulta/salvar.php" method="post">
            
            <?php if (isset($_GET['id'])) { ?>
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <?php } ?>

            <div class="form-group">
                <label for="input_data_consulta">Data da Consulta</label>
                <input value= "<?= $consulta['data_consulta'] ?>" required class="form-control" name="data_consulta" type="date" id="input_data_consulta">
            </div>

            <div class="form-group">
                <label for="select_paciente">Paciente</label>
                <select class="form-control" name="id_paciente" id="select_paciente">
                    <?php while ($paciente = mysqli_fetch_assoc($tabelaPacientes)) {  ?>
                        <option value="<?= $paciente['id'] ?>"><?= $paciente['nome'] ?></option>
                    <?php } ?>
                </select>
            </div> 
            
            <div class="form-group">
            <label for="select_medico">Médico</label>
                <select class="form-control" name="id_medico" id="select_medico">
                    <?php while ($medico = mysqli_fetch_assoc($tabelaMedicos)) {  ?>
                        <option value="<?= $medico['id'] ?>"><?= $medico['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?></span>
            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn btn-success" type="submit" value="Salvar">
        </form>
    </div>
</div>