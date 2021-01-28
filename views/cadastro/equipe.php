<?php

$title = "Criar Equipe";

include "../header.php";
require_once "../../config.php";
?>
<body>
    <?php
if (isset($_SESSION['funcionarios'])) {
    $funcionarios = $_SESSION['funcionarios'];
} else {
    $funcionarios = [];
}

if (isset($_SESSION['equipes'])) {
    $equipes = $_SESSION['equipes'];
} else {
    $equipes = [];
}

if (isset($_SESSION['aviso'])) {
    echo $_SESSION['aviso'];
    unset($_SESSION['aviso']);
}
?>

    <div class="container">
        <div class="row mt-3">
            <div class="input-group mb-3">
            <form action="../../actions/equipe/cadastro.php" method="post">
            <input type="text" name="nome" class="input-form" placeholder="Digite um nome para a equipe" required>
                <select class="custom-select" id="inputGroupSelect03" name="equipe[]" multiple>
                  <?php foreach ($funcionarios as $funcionario): ?>
                  <option value="<?php echo $funcionario['matricula']; ?>"><?php echo $funcionario['nome_funcionario']; ?></option>
                  <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="row">
                <button type="submit" class="btn btn-primary">Criar Equipe</button>
            </form>
        </div>
        <div class="row">
        <?php if (count($equipes) > 0) : ?>
        <table class="table mt-4">
          <thead>
            <tr>
              <th scope="col">#Id</th>
              <th scope="col">Nome Equipe</th>
              <th scope="col">Nome Membro</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($equipes as $equipe): ?>
            <tr>
              <td><?php echo $equipe['id']; ?></td>
              <td><?php echo $equipe['nome_equipe']; ?></td>
              <td><?php echo $equipe['nome_funcionario']; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?php endif; ?>
        </div>
        <div class="row">
        <a href="../../index.php" class="btn btn-danger">Voltar</a>
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

