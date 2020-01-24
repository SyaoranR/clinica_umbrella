<?php require 'src/medico/pesquisarPorId.php'; ?>

<div class="container">
    <!-- <div class="grade"> -->
    
        <h2>Cadastre os médicos logo! Hora de salvar vidas!</h2>
        <form action="src/medico/salvar.php" method="post">
            
            <?php if (isset($_GET['id'])) { ?>
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <?php } ?>

            <div class="form-group">
                <label for="input_login">Nome</label>
                <input value="<?= $medico['nome'] ?>" required class="form-control" type="text" name="nome" id="input_nome">
            </div>

            <div class="form-group">
                <label for="Select">Área</label>
                <select class="form-control" name="area"> 
                    <option value="Anestesia">Anestesia</option>
                    <option value="Oncologia">Oncologia</option>
                    <option value="Cardiologia">Cardiologia</option>
                    <option value="Cirurgia">Cirurgia</option>
                    <option value="Dermatologia">Dermatologia</option>
                    <option value="Endocrinologia">Endocrinologia</option>
                    <option value="Hematologia">Hematologia</option>
                    <option value="Forense">Forense</option>
                    <option value="Neuorologia">Neuorologia</option>
                    <option value="Oftalmologia">Oftalmologia</option>
                    <option value="Pscicologia">Pscicologia</option>
                </select>                
            </div> 
            
            <div class="form-group">
                <label for="input_login">E-mail</label>
                <input value="<?= $medico['email'] ?>" required class="form-control" type="email" name="email" id="input_email">
            </div>

            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?></span>
            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn btn-success" type="submit" value="Salvar">
        </form>
    </div>
</div>