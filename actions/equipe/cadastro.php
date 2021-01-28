<?php 

require_once "../../config.php";

$funcionarios = $_POST['equipe'];
$nome = addslashes($_POST['nome']);

if (empty($nome) || empty($funcionarios)) {
    $_SESSION['aviso'] = "Campos vazios!";
    header("location:../../views/cadastro/equipe.php");
    return false;
    exit;
}

$equipe = new Equipe($db);
$equipe->name = $nome;

if ($equipe->criar_equipe() == false) {
    $_SESSION['aviso'] = "Não foi possivel criar a equipe!";
    header("location:../../views/cadastro/equipe.php");
    return false;
    exit;
}

if ($equipe->vigilante_equipe($funcionarios) == false) {
    $_SESSION['aviso'] = "Não foi possivel inserir os funcionarios!";
    header("location:../../views/cadastro/equipe.php");
    return false;
    exit;
}

header("location:../../views/cadastro/index.php");


