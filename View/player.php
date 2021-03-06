<?php
// view/player.php
require 'layout/top.php';
?>

<div class="cRetour"></div>

<h2>Joueurs</h2>

<?php
	if (isset($_SESSION['msg'])) {
		echo '<div class="alert alert-success" role="alert">' . $_SESSION['msg'] . '</div>';
		unset($_SESSION['msg']);
	}
?>

<div class="well">
	<form>
		<div class="form-group">
			<label>Nom</label>
			<input type="text" name="nom" class="form-control" value="<?= $nom; ?>" placeholder="Votre recherche"/>
		</div>
		<button type="submit" class="btn btn-default">Rechercher</button>
	</form>
</div>

<table class="table">
	<tr>
		<th>Prénom</th>
		<th>Nom</th>
		<th>DCI</th>
	</tr>
	<?php
		foreach ($players as $player) :
	?>
	<tr>
		<td><?= $player->getPrenom(); ?></td>
		<td><?= $player->getNom(); ?></td>
		<td><?= $player->getDci(); ?></td>
		<td>
			<a href="player-edit.php?id=<?= $player->getId();?>">Modifier</a>
			<a href="player-delete.php?id=<?= $player->getId();?>">Supprimer</a>
		</td>
	</tr>
	<?php
	endforeach;
	?>
</table>

<p>
	<?php if (count($players) >= 8): ?>
		<a class="btn btn-danger">Complet !</a>
	<?php else : ?>
		<a class="btn btn-primary" href="player-edit.php">Ajouter un joueur</a>
	<?php endif ?>
</p>

<?php
require 'layout/bottom.php';
?>
