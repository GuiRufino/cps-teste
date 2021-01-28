<?php

require_once "../../config.php";

$sql = "SELECT * FROM funcionario";

$query = mysqli_query($db, $sql);

if (mysqli_num_rows($query) === 0) {
    $_SESSION['funcionarios'] = [];
    header("location:../../views/cadastro/equipe.php");
    exit;
}

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $funcionarios[] = $row;
        $_SESSION['funcionarios'] = $funcionarios;
    }
    header("location:../../views/cadastro/equipe.php");
    exit;
}





