<?php

namespace Grindstone;

class OraclePDO extends \PDO implements PDOAdapter {

	public function __construct($config) {
		parent::__construct('oci:dbname='.$config['instance'].';host='.$config['host'].';port='.$config['port'], 
			$config['username'],
			$config['password']);

		$this->setAttribute(\PDO::ATTR_CASE, 				\PDO::CASE_LOWER);
		$this->setAttribute(\PDO::ATTR_ERRMODE, 			\PDO::ERRMODE_EXCEPTION);
		$this->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, 	\PDO::FETCH_ASSOC);
	}	

	public function get($table, $id) { 
		$stmt = $this->prepare("select * from $table where id = ?");
		$stmt->execute([$id]);
		return $stmt->fetch();
	}

	public function insert($table, $data) { 

	}

	public function update($table, $data) { 

	}

	public function delete($table, $id) { 

	}

	public function select($table, $criteria) { 

	}

}
