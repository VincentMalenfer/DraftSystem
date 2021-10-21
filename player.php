<?php
// player.php
session_start();
require_once 'app/autoload.php';

use model\Player;

$nom = (isset($_GET['nom'])) ? $_GET['nom'] : null;

$players = Player::fetchAll($nom);

require 'view/player.php';
