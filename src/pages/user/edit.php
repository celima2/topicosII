<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

$user = null;
if(isset($_POST["id"])){
    $user = $_POST["id"];
}else{
    $user = findUserAction($conn, $_GET['id']);
}

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]))

    if ($_POST["name"] == "" || $_POST["email"] == "") {
        echo '<p class="message">Dados inválidos, tente novamente!</p>';
    } else {
        if (isset($_POST["confirmeSenha"])) {
            if ($_POST["confirmeSenha"] == $_POST["password"]) {
                updateUserAction($conn, $_POST["id"], $_POST["name"], $_POST["email"], $_POST["password"]);
            } else {
                echo '<p class="message">Dados inválidos, tente novamente!</p>';
            }
        } else {
            echo '<p class="message">Dados inválidos, tente novamente!</p>';
        }
    }
?>

<div id="form-container">
    <h1>Cadastre-se</h1>
    <form id="register-form" action="../../pages/user/edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>" required />
        <div class="full-box">
            <label for="nome">Nome: </label>
            <input class="nome" type="text" name="name" maxlength="50" value="<?= htmlspecialchars($user['name']) ?>">
        </div>
        <div class="full-box">
            <label for="email">Email: </label>
            <input class="email" type="email" name="email" maxlength="50" value="<?= htmlspecialchars($user['email']) ?>">
        </div>
        <div class="full-box">
            <label for="senha">Senha: </label>
            <input class="senha" type="password" name="password" maxlength="50" <?= htmlspecialchars($user['password']) ?>>
        </div>
        <div class="full-box">
            <label for="confirmeSenha">Confirme a senha: </label>
            <input class="confirmeSenha" type="password" name="confirmeSenha" maxlength="50">
        </div>

        <div>
            <input class="confirmarBtn" type="submit" value="Atualizar">
            <a href="/index.html" id="cancelarBtn">Cancelar</a>
        </div>
    </form>
</div>
<?php require_once '../partials/footer.php'; ?>