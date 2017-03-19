<?php
// player.php
session_start();
require_once 'App/autoload.php';

use Model\Player;

$nom = (isset($_GET['nom'])) ? $_GET['nom'] : null;

$players = Player::fetchAll($nom);

require 'view/player.php';
