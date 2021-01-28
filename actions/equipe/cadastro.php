<?php 

require_once "../../config.php";

$equipe = $_POST['equipe'];
$nome = $_POST['nome'];

if (empty($nome) || empty($equipe)) {
    return false;
    exit;
}

$equipe = new Equipe;
$equipe->nome = $nome;