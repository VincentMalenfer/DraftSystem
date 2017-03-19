<?php
// table.php
session_start();
require_once 'App/autoload.php';
require 'View/layout/top.php';

use Model\Player;
?>

<section>
  <p>Le plan de table généré est le suivant : </p>

<?php
$player = [];
  shuffle($player);
  foreach ($player as $players) :
?>
  <ol>
    <li><?= $player->getPrenom(), $player->getNom(); ?></li>
  </ol>
<?php
  endforeach;
?>

</section>

<aside class="table numéroté">
  <img src="" alt="plan de table numéroté">
</aside>

<?php
require 'View/layout/bottom.php';
?>
