<?php
// model/player.php
namespace model;

use app\cnx;

class player
{
	/**
	 *
	 * @var int
	 */
	private $id;

	/**
	 *
	 * @var string
	 */
	private $prenom;

	/**
	 *
	 * @var string
	 */
	private $nom;

	/**
	 *
	 * @var string
	 */
	private $dci;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getPrenom()
	{
		return $this->prenom;
	}

	/**
	 * @param string $prenom
	 */
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * @param string $nom
	 */
	public function setNom($nom)
	{
		$this->nom = $nom;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDci()
	{
		return $this->dci;
	}

	/**
	 * @param string $nom
	 */
	public function setDci($dci)
	{
		$this->dci = $dci;
		return $this;
	}

	public static function fetchAll($nom = null)
	{
		$cnx = Cnx::getInstance();

		$query = 'SELECT * FROM player';

		if (!empty($nom)) {
			$nom = $cnx->quote("%$nom%");
			$query.= " WHERE nom LIKE $nom";
		}

		$stmt = $cnx->query($query);

		// self::class retourne le nom complet de la classe

		return $stmt->fetchAll(\PDO::FETCH_CLASS, self::class);
	}

	public static function find($id)
	{
		$cnx = Cnx::getInstance();

		$stmt = $cnx->query('SELECT * FROM player WHERE id=' . $id);

		return $stmt->fetchObject(self::class);
	}

	public static function ValidatePrenom($prenom, &$msg)
	{
		if (empty($prenom)) {
			$msg = 'Le prénom est obligatoire';
			return false;
		} elseif (strlen($prenom) > 50) {
			$msg = 'Le prénom ne doit pas faire plus de 50 caractères';
			return false;
		}
		return true;
	}

	public static function ValidateNom($nom, &$msg)
	{
		if (empty($nom)) {
			$msg = 'Le nom est obligatoire';
			return false;
		} elseif (strlen($nom) > 100) {
			$msg = 'Le nom ne doit pas faire plus de 100 caractères';
			return false;
		}
		return true;
	}

	public static function ValidateDci($dci, &$msg)
	{
		if (empty($dci)) {
			$msg = 'Le numéro DCI est obligatoire';
			return false;
		} elseif (strlen($dci) > 10) {
			$msg = 'Le numéro DCI ne peut pas faire plus de 10 chiffres';
			return false;
		}
		return true;
	}

	public function save()
	{
		if ($this->id) {
			$this->update();
		} else {
			$this->insert();
		}
	}

	public function insert()
	{
		$cnx = Cnx::getInstance();

		$prenom = $cnx->quote($this->prenom);
		$nom = $cnx->quote($this->nom);
		$dci = $cnx->quote($this->dci);
		$query = <<<EOS
INSERT INTO player(prenom, nom, dci)
VALUES ($prenom, $nom, $dci)
EOS;
		$cnx->exec($query);

		$this->setId($cnx->lastInsertId());
	}

	public function update()
	{
		$cnx = Cnx::getInstance();

		$query = <<<EOS
UPDATE player SET
prenom = {$cnx->quote($this->prenom) },
nom = {$cnx->quote($this->nom) },
dci = {$cnx->quote($this->dci) }
WHERE id = {$this->id}
EOS;
		$cnx->exec($query);
	}

	public function delete()
	{
		$cnx = Cnx::getInstance();

		$cnx->exec('DELETE FROM player WHERE id=' . $this->id);
	}

	public static function deleteAll()
	{
		$cnx = Cnx::getInstance();

		$cnx->exec('DELETE FROM player');
	}
}
