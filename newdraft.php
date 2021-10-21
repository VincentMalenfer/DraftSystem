<?php
// newdraft.php
session_start();
require_once 'app/autoload.php';

use model\player;

$nom = (isset($_GET['nom'])) ? $_GET['nom'] : null;

//delete all players for a new draft
player::deleteAll();
//Next one is now useless
$players = player::fetchAll($nom);

require 'view/player.php';
