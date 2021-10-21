<?php
// app/cnx.php
namespace app;

use PDO;

class cnx
{
	const HOST = 'localhost';
	const USER = 'vincentm_tata';
	const PASSWORD = 'wvoxGyyjo4Dkz2psow';
	const DB_NAME = 'vincentm_draft';

	/**
	 *
	 * @var PDO
	 */
	private static $instance;

	/**
	 *
	 * Constructeur privé pour qu'on ne puisse pas instancier la class
	 */
	private function __construct()
	{

	}

	public static function getInstance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new PDO(
					'mysql:dbname=' . self::DB_NAME . ';host=' . self::HOST,
					self::USER,
					self::PASSWORD,
					[
							PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					]
			);
		}
		return self::$instance;
	}
}
