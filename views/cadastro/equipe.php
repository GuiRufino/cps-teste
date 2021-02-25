<?php

$title = "Criar Equipe";

include "../header.php";
require_once "../../config.php";

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
  ?>
  <body>
  <div class="container">
    <?php
    if (isset($_SESSION['aviso'])) {
      echo $_SESSION['aviso'];
      unset($_SESSION['aviso']);
    }
    ?>
    <div class=" mt-3">
      <div class="form-group">
        <form id="form-team">
          <input type="text" name="nome" class="form-control mb-3" id="name_team" placeholder="Digite um nome para a equipe" required>
          <select class="form-control" id="name_employee" name="equipe[]" id="options" multiple="multiple">
            <?php foreach ($funcionarios as $funcionario): ?>
            <option value="<?php echo $funcionario['matricula']; ?>"><?php echo $funcionario['nome_funcionario']; ?></option>
            <?php endforeach;?>
          </select>
        </div>
      </div>
      <div class="row justify-content-end">
        <button type="submit" class="btn btn-primary">Criar Equipe</button>
      </form>
    </div>
    <div class="alerta"></div>
    <div class="row">
      <?php if (count($equipes) > 0): ?>
      <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">Membro</th>
            <th scope="col">Equipe</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($equipes as $equipe): ?>
          <tr>
            <td><?php echo $equipe['nome_funcionario']; ?></td>
            <td><?php echo $equipe['nome_equipe']; ?></td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      <?php endif;?>
    </div>
    
  </div>
</body>
<script>
  $(document).ready(()=>{
    
    $("#form-team").submit((e)=>{
      
      e.preventDefault()
      
      let name_team = $("#name_team").val()
      let names_employee = $("#name_employee").val()
      
      $.ajax({
        method: 'post',
        type: 'json',
        url:'/actions/equipe/cadastro.php',
        data: {
          equipe: names_employee,
          nome: name_team
        },
        success:()=>{
          window.alert('Cadastrado')
          $(".alerta").text('cadastrado')
        },
        error: (request, stt, err)=>{
          window.alert(err)
        }
      })   
    })
  })
</script>
</html>

