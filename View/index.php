<?php
// view/index.php
require 'layout/top.php';
?>

<div class="image">
  <img class="img-responsive" src="assets/img/logo.png" alt="logo magic">
</div>

<div class="boutons">
  <a class="btn btn-danger" href="newdraft.php" role="button">Nouveau Draft</a>
  <a class="btn btn-success" href="player.php" role="button">Draft en cours</a>
</div>

<?php
require 'layout/bottom.php';
?>
