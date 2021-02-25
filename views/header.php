<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="http://escala-vigilantes.test">Escala CPN</a>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-employee">
                        Cadastrar Vigilante
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $server; ?>/actions/equipe/show-equipe.php">Criar equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $server; ?>/actions/escala/index.php"/>Ver Escala</a>
                </li>
            </ul>
        </div>
    </nav>  

    <!-- Modal -->
<div class="modal fade" id="modal-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro de Vigilante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline" id="form-employee">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="name" id="name" class="form-control" id="inputName" placeholder="Nome do Vigilante" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success mb-2">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>