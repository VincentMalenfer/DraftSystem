<?php
// player-edit.php
session_start();
require_once 'app/autoload.php';

use model\Player;

$player = new Player();
$errors = [];

if (!empty($_POST)) {

	if (!Player::ValidatePrenom($_POST['prenom'], $msg)) {
		$errors['prenom'] = $msg;
	}

	if (!Player::ValidateNom($_POST['nom'], $msg)) {
		$errors['nom'] = $msg;
	}

	if (!Player::ValidateDci($_POST['dci'], $msg)) {
		$errors['dci'] = $msg;
	}

	$player
		->setPrenom($_POST['prenom'])
		->setNom($_POST['nom'])
		->setDci($_POST['dci'])
	;

	if (!empty($_POST['id'])) { // Modification
		$player->setId($_POST['id']);
	}

	if (empty($errors)) {
		$player->save();
		$_SESSION['msg'] = "Le joueur a bien été enregistré";
		header('Location: player.php');
	}

	// Traitement de retour de formulaire
} elseif (isset($_GET['id'])) {
	$player = Player::find($_GET['id']);
}
require 'view/player-edit.php';
