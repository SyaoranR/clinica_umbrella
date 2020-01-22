<div class="container">
    <!-- <div class="grade"> -->
    
        <h2>Salve o paciente antes que ele morra!</h2>
        <form action="src/paciente/salvar.php" method="post">
            
            <div class="form-group">
                <label for="input_login">Nome</label>
                <input required class="form-control" type="text" name="nome" id="input_nome">
            </div>

            <div class="form-group">
                <label for="input_login">Data de nascimento</label>
                <input required class="form-control" type="date" name="data_nascimento" id="input_data">
            </div> 
            
            <div class="form-group">
                <label for="input_login">CPF</label>
                <input required class="form-control" type="text" name="cpf" id="input_cpf">
            </div>

            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?></span>
            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn btn-success" type="submit" value="Salvar">
        </form>
    </div>
</div>