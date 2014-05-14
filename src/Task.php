<?php

namespace Grindstone;

class Task {

	protected $table = 'task';

	public function __construct($dbAdapter) {
		$this->db = $dbAdapter;
	}
	
	public function get($id) {
		return $this->db->get($this->table, $id);
	}

	public function save($data) {
		if(isset($data['id'])) {
			return $this->db->update($this->table, $data);
		} else {
			return $this->db->insert($this->table, $data);
		}
	}

	public function query($criteria) {
		return $this->db->select($this->table, $criteria);
	}

	public function delete($id) {
		return $this->db->delete($this->table, $id);
	}

}
