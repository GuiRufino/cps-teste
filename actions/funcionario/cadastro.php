<?php

require_once "../../config.php";

$name      = addslashes($_POST['name']);
$matricula = rand(10000, 99999);

if (empty($name) || empty($matricula)) {
    $_SESSION['aviso'] = "Campos Vazios!";
    header("location:../../views/cadastro/equipe.php");
    exit;
}

$vigilante            = new Vigilante($db);
$vigilante->name      = $name;
$vigilante->matricula = $matricula;

$vigilante->cadastrar();

$db->close();

$_SESSION['aviso'] = "Cadastrado com sucesso!";

header("location:../../views/cadastro/equipe.php");