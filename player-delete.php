<?php

/*
 *  Récupérer l'utilisateur grâce à l'id en GET (cf : player-edit.php)
 *  On crée une méthode delete() dans la classe Player
 *  On l'appelle
 *  Et on redirige vers player.php avec un message
 */

session_start();
require_once 'app/autoload.php';

use model\player;

$player = player::find($_GET['id']);
$player->delete();
$_SESSION['msg'] = "Le joueur a bien été supprimé";
header('Location: player.php');
