<?php
// newdraft.php
session_start();
require_once 'app/autoload.php';

use model\Player;

$nom = (isset($_GET['nom'])) ? $_GET['nom'] : null;

//delete all players for a new draft
Player::deleteAll();
//Next one is now useless
$players = Player::fetchAll($nom);

require 'view/player.php';
