<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST['id']))
    deleteUserAction($conn, $_POST['id']);
?>

<style>
    .container-alert-delete {
        background-color: #cccccc;
        display: flex;
        justify-content: center;
    }

    .container-alert-delete a {
        text-decoration: none;

        color: #cccccc;
        padding: .6em;
        border-radius: .3em;
    }

    .container-alert-delete button {
        text-decoration: none;
        background-color: #6a62b4;
        color: #cccccc;
        padding: .6em 1em;
        border-radius: .3em;
        margin-bottom: 1em;
        margin-top: .5em;
    }

    .btn-voltar{
        margin-left: 3em;
        color: blue;
    }
</style>
<div class="btn-voltar">
        <a class="btn btn-success text-white" href="./read.php">< Listagem</a>
    </div>
<div class="container-alert-delete">
    <div>
        <div class="row">
            <a href="../../../index.php">
                <h1>Deletar Usuários</h1>
            </a>
        </div>
        <div class="row flex-center">
            <div class="form-div">
                <form class="form" action="../../pages/user/delete.php" method="POST">
                    <label>Você realmente deseja remover o usuário?</label>
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>" required />
                    <button class="btn btn-success text-white" type="submit">Sim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>