<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]))

    if ($_POST["name"] == "" || $_POST["email"] == "") {
        echo '<p class="message">Dados inválidos tente novamente</p>';
    } else {
        if (isset($_POST["confirmeSenha"]) && isset($_POST["check-terms"])) {
            if ($_POST["confirmeSenha"] == $_POST["password"]) {
                createUserAction($conn, $_POST["name"], $_POST["email"], $_POST["password"]);
            } else {
                echo '<p class="message">Dados inválidos tente novamente</p>';
            }
        } else {
            echo '<p class="message">Dados inválidos tente novamente</p>';
        }
    }
?>

<header id="cabecalho">
    <h1>Curso de PHP</h1>
</header>

<main id="form-container">
    <h1>Cadastre-se</h1>
    <form id="register-form" action="../../pages/user/create.php" method="POST">
        <div class="full-box">
            <label for="nome">Nome: </label>
            <input class="nome" type="text" name="name" maxlength="50">
        </div>
        <div class="full-box">
            <label for="email">Email: </label>
            <input class="email" type="email" name="email" maxlength="50">
        </div>
        <div class="full-box">
            <label for="senha">Senha: </label>
            <input class="senha" type="password" name="password" maxlength="50">
        </div>
        <div class="full-box">
            <label for="confirmeSenha">Confirme a senha: </label>
            <input class="confirmeSenha" type="password" name="confirmeSenha" maxlength="50">
        </div>

        <div class="terms-of-use">
            <input type="checkbox" name="check-terms" id="check-terms">
            <label for="check-terms">Aceito todos os <a href="../termsAndConditions.php">Termos e condições</a> de uso da
                plataforma</label>
        </div>
        <div>
            <input class="confirmarBtn" type="submit" value="Confirmar">
            <a href="/index.html" id="cancelarBtn">Cancelar</a>
        </div>
    </form>
</main>

<footer id="rodape">
    <h1>Ana Cecília, Matheus Sousa</h1>
    <h1>2022</h1>
    
</footer>


<?php require_once '../partials/footer.php'; ?>