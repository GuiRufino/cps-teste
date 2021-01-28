<?php
$title = "Cadastro";
include "../header.php";
?>
<body>
    <div class="container">
        <div class="row">
            <form action="../../actions/funcionario/cadastro.php" method="post">
                <input type="text" name="name" placeholder="nome">
                <input type="submit" value="cadastrar">
            </form>
            <a class="btn btn-primary" href="<?php echo $_SERVER['SERVER_NAME']; ?>">voltar</a>
        </div>
    </div>
</body>
</html>
