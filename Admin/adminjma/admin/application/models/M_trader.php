<?php

class M_trader extends CI_Model {

	function ambilData(){
		return $this->db->get('trader')->result_array();
	}

	function tambah_data($data, $table) {
		$this->db->insert($table, $data);
	}

}