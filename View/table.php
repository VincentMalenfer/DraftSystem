<?php
//View/table.php
require 'View/layout/top.php';
use Model\Player;
?>

<section>
  <p>Le plan de table généré est le suivant : </p>

<?php
  shuffle($players);
  echo("<ol>");
  foreach ($players as $player) :
  ?>
    <li><?= $player->getPrenom()," ", $player->getNom(); ?></li>
  <?php
  endforeach;
  echo("</ol>");
?>
</section>

<aside class="table numéroté">
  <img src="assets/img/tablenum.jpg" alt="plan de table numéroté">
</aside>

<?php
require 'View/layout/bottom.php';
?>