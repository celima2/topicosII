<?php

require_once '../../../config.php';
require_once '../../../src/actions/user.php';
require_once '../../../src/modules/messages.php';
require_once '../partials/header.php';

$users = readUserAction($conn);

?>
<div class="container">
	<div class="listagem">
		<div class="row">
			<a href="../../../" style="text-decoration: none;">
				<h1 id="tittle-list-users">Usuários</h1>
			</a>
			<div class="content-add-btn">
				<a class="btn btn-success text-white" href="./create.php">Novo<img src="http://localhost:8000/img/plus-circle.svg" alt=""></a>
			</div>
		</div>
		<div class="row flex-center alert-message">
			<?php if (isset($_GET['message'])) echo (printMessage($_GET['message'])); ?>
		</div>

		<table class="table-users">
			<tr>
				<th>NOME</th>
				<th>EMAIL</th>
			</tr>
			<?php foreach ($users as $row) : ?>
				<tr>
					<td class="user-name"><?= htmlspecialchars($row['name']) ?></td>
					<td class="user-email"><?= htmlspecialchars($row['email']) ?></td>
					<td>
						<a class="btn btn-primary text-white" href="./edit.php?id=<?= $row['id'] ?>"><img src="http://localhost:8000/img/pencil-square.svg" alt=""></a>
					</td>
					<td>
						<a class="btn btn-danger text-white" href="./delete.php?id=<?= $row['id'] ?>"><img src="http://localhost:8000/img/trash.svg" alt=""></a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
<?php require_once '../partials/footer.php'; ?>