<?php
// reglement.php
require 'View/layout/top.php';
?>

<article>
  <h2>Réglement</h2>
  <p>
    Au début du Draft, chaque joueur ouvre un booster et choisit une seule carte (Ne montrez pas ce que vous choisissez aux autres joueurs !) Tout le monde passe ensuite le reste de son booster au joueur se trouvant sur sa gauche ; chaque joueur choisit alors une carte du booster qu'il vient de recevoir avant de le faire passer à nouveau. L'opération continue jusqu'à ce que toutes les cartes de ces boosters aient été choisies. Ensuite, chaque joueur ouvre un nouveau booster, mais cette fois, vous devez passer les cartes au joueur situé à votre droite. Une fois que toutes ces cartes ont été choisies, vous faites la même chose avec le troisième booster, en passant à nouveau les cartes au joueur situé à gauche.
  </p>

  <p>
    Voici un schéma du processus :
  </p>
</article>

<div class="plan">
  <img class="img-responsive col-md-4" src="assets/img/plan1.jpg" alt="plan de table 1">
  <img class="img-responsive col-md-4" src="assets/img/plan2.jpg" alt="plan de table 2">
  <img class="img-responsive col-md-4" src="assets/img/plan3.jpg" alt="plan de table 3">
</div>

<article>
  <p>
    Une fois le draft terminé, les joueurs construisent leur deck à partir des cartes qu'ils ont sélectionnées. Vous pouvez ajouter autant de terrains de base (plaines, îles, marais, montagnes et forêts) à votre deck que vous le souhaitez, mais chaque deck doit avoir au moins 40 cartes.
  </p>

  <p>
    Durée : construction + 3 rondes de 45 minutes.
  </p>

  <ul>
    <li>victoire = 3 points</li>
    <li>égalité = 1 point</li>
    <li>défaite = 0 point</li>
  </ul>
</article>


<?php
require 'View/layout/bottom.php';
?>