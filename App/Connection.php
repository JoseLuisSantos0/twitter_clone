<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=twitter;charset=utf8",
				"root",
				"00134210" 
			);

			return $conn;

		} catch (\PDOException $e) {
			echo $e;
		}
	}
}