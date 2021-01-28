<?php

require_once "../../config.php";

$name      = addslashes($_POST['name']);
$matricula = rand(1000, 9999);

if (empty($name) || empty($matricula)) {
    header("location:../../views/cadastro/index.php");
    exit;
}

$vigilante            = new Vigilante($db);
$vigilante->name      = $name;
$vigilante->matricula = $matricula;

$vigilante->cadastrar();

$db->close();

header("location:../../views/cadastro/index.php");