<?php

require_once "../../config.php";

$sql_funcionario = "SELECT * FROM funcionario";
$funcionarios_query = mysqli_query($db, $sql_funcionario);


if (mysqli_num_rows($funcionarios_query) === 0) {
    $_SESSION['funcionarios'] = [];
}

if (mysqli_num_rows($funcionarios_query) > 0) {
    while ($row_funcionarios = mysqli_fetch_assoc($funcionarios_query)) {
        $funcionarios[] = $row_funcionarios;
        $_SESSION['funcionarios'] = $funcionarios;
    }
}

$sql_equipe = "SELECT equipe.id, equipe.nome_equipe, funcionario.nome_funcionario FROM equipe JOIN funcionario ON funcionario.equipe = id";

$equipes_query = mysqli_query($db, $sql_equipe);

if (mysqli_num_rows($equipes_query) === 0) {
    $_SESSION['equipes'] = [];
}

if (mysqli_num_rows($equipes_query) > 0) {
    while($row_equipes = mysqli_fetch_assoc($equipes_query)){
        $equipes[] = $row_equipes;
        $_SESSION['equipes'] = $equipes;
    }
}

header("location:../../views/cadastro/equipe.php");
