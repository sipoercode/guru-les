<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model
{

	public function __construct()
    {
        parent::__construct();
    }

    public function dataMuridCount($cari = '') {

        $this->db->select('id_students,full_name, birthday, gender, descriptions, address, city, provinces, districts, villages, email, username');
		$this->db->from('prf_students');
		$this->db->join('users', 'users.id_user = prf_students.id_students');
		$likeCriteria = "username LIKE '%". $cari ."%'";
		$this->db->where($likeCriteria);
		$query = $this->db->get();
		return count($query->result_array());
    }

    public function dataMurid($cari = '', $page, $segment) {

        $this->db->select('id_students,full_name, birthday, gender, descriptions, address, city, provinces, districts, villages, email, username');
		$this->db->from('prf_students');
		$this->db->join('users', 'users.id_user = prf_students.id_students');
		$likeCriteria = "username LIKE '%". $cari ."%'";
		$this->db->where($likeCriteria);
		
		$this->db->limit($page, $segment);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function get_default($id){
		$this->db->select('id_students,full_name, birthday, gender, descriptions, address, city, provinces, districts, villages, id_user, email, username');
		$this->db->from('prf_students');
		$this->db->join('users', 'users.id_user = prf_students.id_students');
		$this->db->where('id_students', $id);
		// $this->db->where('account_type', 0);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update($userInfo, $userInfo1, $userId, $userId1)
	{
		$this->db->set($userInfo);
	    $this->db->where('id_students', $userId);
	    $this->db->update('prf_students');

	    $this->db->set( $userInfo1);
	    $this->db->where('id_user', $userId1);
	    $this->db->update('users');
	}

	public function delete($userId)
	{	
	    $this->db->where('id_students', $userId);
	    $this->db->delete('prf_students');

	 
	    $this->db->where('id_user', $userId);
	    $this->db->delete('users');
	}
}

  