<?php
$title = "Cadastro";
include "../header.php";

?>
<body>
    <div class="container">
        <div class="row">
        <?php
            if (isset($_SESSION['aviso'])) {
                echo $_SESSION['aviso'];
                unset($_SESSION['aviso']);
            }
        ?>
            <form action="../../actions/funcionario/cadastro.php" method="post">
                <input type="text" name="name" placeholder="nome">
                <input type="submit" value="cadastrar">
            </form>
        </div>
        <div class="row">
        <a class="btn btn-primary" href="<?php echo $_SERVER['SERVER_NAME']; ?>">voltar</a>
        </div>
    </div>
</body>
</html>
