<?php 

$title = "Criar Equipe";

include "../header.php";
require_once "../../config.php";
?>
<body>
    <?php
    if (isset($_SESSION['funcionarios'])) {
        $funcionarios = $_SESSION['funcionarios'];
    }else{
        $funcionarios = [];
    }
    ?>
    
    <div class="container">
        <div class="row">
            <div class="input-group mb-3">
            <form action="../../actions/equipe/cadastro.php" method="post">
            <input type="text" name="nome" class="input-form" placeholder="Digite um nome para a equipe">
                <select class="custom-select" id="inputGroupSelect03" name="equipe[]" multiple>
                  <?php foreach($funcionarios as $funcionario): ?>
                  <option value="<?php echo $funcionario['matricula']; ?>"><?php echo $funcionario['nome']; ?></option>
                  <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
                <button type="submit" class="btn btn-primary">Criar Equipe</button>
            </form>
        </div>
    </div>
</body>
<script>
//     $("select").change(function () {
//       if($("select option:selected").length > 4) {
        
//       }
//   });
</script>
</html>

