<?php
// view/player-edit.php
require 'layout/top.php';
?>
<h2>Joueurs</h2>
<form method="post">
	<input type="hidden" name="id" value="<?= $player->getId(); ?>" />
	<div class="form-group <?php if (isset($errors['prenom'])) { echo 'has-error'; } ?>">
		<label>Prénom</label>
		<input type="text" name="prenom" class="form-control" value="<?= htmlentities($player->getPrenom()); ?>" />
		<?php  if (isset($errors['prenom'])) : ?>
		<span class="help-block"><?= $errors['prenom']; ?></span>
		<?php endif;?>
	</div>
	<div class="form-group <?php if (isset($errors['nom'])) { echo 'has-error'; } ?>">
		<label>Nom</label>
		<input type="text" name="nom" class="form-control" value="<?= htmlentities($player->getNom()); ?>" />
		<?php  if (isset($errors['nom'])) : ?>
		<span class="help-block"><?= $errors['nom']; ?></span>
		<?php endif;?>
	</div>
	<div class="form-group <?php if (isset($errors['dci'])) { echo 'has-error'; } ?>">
		<label>DCI</label>
		<input type="text" name="dci" class="form-control" value="<?= htmlentities($player->getDci()); ?>" />
		<?php  if (isset($errors['dci'])) : ?>
		<span class="help-block"><?= $errors['dci']; ?></span>
		<?php endif;?>
	</div>
	<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
<?php
require 'layout/bottom.php';
?>
