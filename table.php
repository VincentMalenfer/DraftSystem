<?php
// table.php
session_start();
require_once 'app/autoload.php';

use model\player;

$nom = (isset($_GET['nom'])) ? $_GET['nom'] : null;

$players = player::fetchAll($nom);

require 'view/table.php';
