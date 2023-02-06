<?php
namespace Core;

use PDO;

class Model
{
	public static $link;
//    protected $tableName;

	public function __construct()
	{
		if (self::$link === NULL) {
            try {
				$dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
				self::$link = new PDO($dns, DB_USER, DB_PASS);
				self::$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$link->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES" . DB_CHARSET);
			}
			catch (\PDOException $e) {
				print "Error: " . $e->getMessage(). "<br/>";
				die();
			}
		}
	}

	protected function findOne(string $query, int $id): array
	{
		$stmt = self::$link->prepare($query);
		$stmt->execute(['id' => $id]);
		return $stmt->fetch();
	}

	protected function findMany(string $query): array
	{
		$stmt = self::$link->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
	}

    protected function createOne(string $query, array $params): bool
    {
        $stmt = self::$link->prepare($query);
        $stmt->execute($params);
        return true;
    }

    protected function updateOne(string $query, array $parms): bool
    {
        $stmt = self::$link->prepare($query);
        $stmt->execute($parms);
        return true;
    }
}