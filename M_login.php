<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_login extends CI_Model
{
	
	function __construct() {
		parent::__construct();
		$this->tbl = 'data_pendaftar';
	}

	function count_user ($user, $pass) {
		$this->db->where('nama', $user);
		$this->db->where('password', $pass);

		$query = $this->db->->get($this->tbl);

		return $query->num_rows();
	}

	function ambil_user($user) {
		$query = $this->db->get_where($this->tbl, array('nama' => $user));
		$query = $query->result_array();
		if($query) {
			return $query[0];
		}
	}
}