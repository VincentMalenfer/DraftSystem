<?php
// newdraft.php
session_start();
require_once 'App/autoload.php';

use Model\Player;

$nom = (isset($_GET['nom'])) ? $_GET['nom'] : null;

//delete all players for a new draft
Player::DeleteAll();
//Next one is now useless
$players = Player::fetchAll($nom);

require 'view/player.php';
