<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Teacher_model extends CI_Model
{

	public function __construct()
    {
        parent::__construct();
    }

    public function dataGuruCount($cari = '') {

        $this->db->select('id_teachers,full_name, birthday, gender, descriptions, address, prf_teachers.city, provinces, districts, villages,id, primary_school, junior_high_school, senior_high_school, diploma, s1, s2, s3, radius_id, radius_locations.city, district');
		$this->db->from('prf_teachers');
		$this->db->join('education_background', 'education_background.id = prf_teachers.id_teachers');
		$this->db->join('radius_locations', 'radius_locations.user_id = prf_teachers.id_teachers', 'inner');
		$likeCriteria = "full_name LIKE '%". $cari ."%'";
		$this->db->where($likeCriteria);

		$query = $this->db->get();
		return count($query->result_array());
    }

     public function dataGuru($cari = '', $page, $segment) {

        $this->db->select('id_teachers,full_name, birthday, gender, descriptions, address, prf_teachers.city, provinces, districts, villages,id, primary_school, junior_high_school, senior_high_school, diploma, s1, s2, s3, radius_id, radius_locations.city, district');
		$this->db->from('prf_teachers');
		$this->db->join('education_background', 'education_background.id = prf_teachers.id_teachers');
		$this->db->join('radius_locations', 'radius_locations.user_id = prf_teachers.id_teachers', 'inner');
		$likeCriteria = "full_name LIKE '%". $cari ."%'";
		$this->db->where($likeCriteria);

		$this->db->limit($page, $segment);
		$query = $this->db->get();
		return $query->result_array();
    }

    public function data($number,$offset){
		return $this->db->get('prf_teachers',$number,$offset)->result_array();		
	}

    public function cari($batas =null,$key=null) {
	    if ($key != null) {
	       $this->db->or_like($key);
	    }
	    $query = $this->db->get('prf_teachers');
	        return $query->result_array();  
	}

    public function get_default($id){
		$this->db->select('id_teachers,full_name, birthday, gender, current_job, descriptions, address, prf_teachers.city, provinces, districts, villages, id, primary_school, junior_high_school, senior_high_school, diploma, s1, s2, s3, radius_id, radius_locations.city, district');
		$this->db->from('prf_teachers');
		$this->db->join('education_background', 'education_background.id = prf_teachers.id_teachers');
		$this->db->join('radius_locations', 'radius_locations.user_id = prf_teachers.id_teachers', 'inner');
		$this->db->where('id_teachers', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update($data, $data1, $data2, $id, $id1, $id2)
        {   
            $this->db->set($data);
            $this->db->where('id_teachers', $id);
            $this->db->update('prf_teachers');

            $this->db->set($data1);
            $this->db->where('id', $id1);
            $this->db->update('education_background');

            $this->db->set($data2);
            $this->db->where('user_id', $id2);
            $this->db->update('radius_locations');
        }

	public function delete($id)
        {   
            $this->db->where('id_teachers', $id);
            $this->db->delete('prf_teachers');

            $this->db->where('id', $id);
            $this->db->delete('education_background');

            $this->db->where('user_id', $id);
            $this->db->delete('radius_locations');
        }
}

  