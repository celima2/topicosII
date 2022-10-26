<?php

require_once '../../database/user.php';

function findUserAction($conn, $id) {
	return findUserDb($conn, $id);
}

function readUserAction($conn) {
	return readUserDb($conn);
}

function createUserAction($conn, $name, $email, $password) {
	$createUserDb = createUserDb($conn, $name, $email, $password);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./feedback.php?message=$message");
}

function updateUserAction($conn, $id, $name, $email, $password) {
	$updateUserDb = updateUserDb($conn, $id, $name, $email, $password);
	$message = $updateUserDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteUserAction($conn, $id) {
	$deleteUserDb = deleteUserDb($conn, $id);
	$message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
