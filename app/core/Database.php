<?php

namespace App\core;

class Database
{

    public \PDO $pdo;

	/**
	 *
	 */
	public function __construct(array $dbConf)
	{
		$dsn=$dbConf['dsn'] ?? '';
		$user=$dbConf['user'] ?? '';
		$password=$dbConf['password'] ?? '';

		$this->pdo = new \PDO($dsn, $user, $password);
		$this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
	}


}