<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

	public  function __construct() {
		parent::__construct();
	}

	public function jadwalGuru() {
		return $this->db->get('schedules')->num_rows();
	}

	public function data($number, $offset) {
		return $this->db->get('schedules', $number, $offset)->result_array();
	}

	public function get_default($id) {
		$sql = $this->db->query("SELECT * FROM schedules WHERE schedule_id =". intval($id)); 

		if ($sql->num_rows() > 0) {
			return $sql->row_array();
			return false;
		}
	}

	public function update($data, $id) {
		$this->db->set($data);
		$this->db->where('schedule_id', $id);
		return $this->db->update('schedules');
	}

	public function delete($id) {
		$this->db->where('schedule_id', $id);
		return $this->db->delete('schedules');
	}
}