<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';


class Guru extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('teacher_model');
        $this->isLoggedIn();   
    }

    function index()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }

        else
        {

            $this->global['pageTitle'] = 'Guru Les : Data Guru';
            $cari = $this->input->post('cari');
            $data['cari'] = $cari;

            $this->load->library('pagination');
            $count = $this->teacher_model->DataGuruCount($cari);
            $returns = $this->paginationCompress ( "guru/", $count, 2 );
            $data['data_guru']  = $this->teacher_model->dataGuru($cari, $returns['page'], $returns['segment']);
            $this->loadViews("guru/index", $this->global, $data, NULL);
        }
    }


    function edit($id)
    {
        $this->global['pageTitle'] = 'Guru Les : Edit User';
        
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($id == null)
            {
                redirect('index');
            }
        
            $data['default'] = $this->teacher_model->get_default($id);          
            $this->loadViews("guru/edit", $this->global, $data, NULL);

        }
    }
    
    
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');

            $id = $this->input->post('id_teachers');
            $id1 = $this->input->post('id');
            $id2 = $this->input->post('radius_id');

             $this->form_validation->set_rules('full_name','Nama','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('birthday','Tempat, Tanggal Lahir','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('gender','Jenis Kelamin','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('current_job','Pekerjaan Saat Ini','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('descriptions','Deskripsi','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('address','Alamat','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('city','Kota','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('provinces','Provinsi','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('districts','Kecamatan','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('villages','Desa','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('primary_school','Nama SD','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('junior_high_school','Nama SMP','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('senior_high_school','Nama SMA','trim|required|max_length[128]|xss_clean');
            if ($this->form_validation->run() == FALSE) {

                 $this->edit($id, $id1, $id2);

            } else {
            
                $data = array(
                    'user_id' => $this->input->post('user_id'),
                    'full_name' => $this->input->post('full_name'),
                    'birthday' => $this->input->post('birthday'),
                    'gender' => $this->input->post('gender'),
                    'current_job' => $this->input->post('current_job'),
                    'descriptions' => $this->input->post('descriptions'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'provinces' => $this->input->post('provinces'),
                    'districts' => $this->input->post('districts'),
                    'villages' => $this->input->post('villages')
                    
                    );

                $data1 = array(
                    'primary_school' => $this->input->post('primary_school'),
                    'junior_high_school' => $this->input->post('junior_high_school'),
                    'senior_high_school' => $this->input->post('senior_high_school'),
                    'diploma' => $this->input->post('diploma'),
                    's1' => $this->input->post('s1'),
                    's2' => $this->input->post('s2'),
                    's3' => $this->input->post('s3')
                    );

                $data2 = array(
                    'city' => $this->input->post('city'),
                    'district' => $this->input->post('district')
                    );
            }

                $result = $this->teacher_model->update($data, $data1, $data2, $id, $id1, $id2);

                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }

            redirect('guru'); 
        }
    }


    function delete($id)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        { 
           $this->teacher_model->delete($id);
           redirect('guru');

        }
    }
    
    
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'Guru Les : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>