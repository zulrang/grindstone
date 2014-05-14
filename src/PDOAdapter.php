<?php

namespace Grindstone;

interface PDOAdapter {
	
	public function get($table, $id);
	public function insert($table, $data);
	public function update($table, $data);
	public function delete($table, $id);
	public function select($table, $criteria);

}
