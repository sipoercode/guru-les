<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';


class Murid extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
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

            $this->global['pageTitle'] = 'Guru Les : Data Murid';

            $cari = $this->input->post('cari');
            $data['cari'] = $cari;

            $this->load->library('pagination');
            $count = $this->student_model->DataMuridCount($cari);
            $returns = $this->paginationCompress ( "murid/", $count, 2 );

            $data['data_murid'] = $this->student_model->dataMurid($cari,$returns['page'], $returns['segment']);
            $this->loadViews("murid/index", $this->global, $data, NULL);
        }
    }

    function edit($id)
    {
        $this->load->model('student_model');
        $this->global['pageTitle'] = 'Guru Les : Edit User';
        
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($id == null)
            {
                redirect('murid');
            }
        
            $data['default'] = $this->student_model->get_default($id);          
            $this->loadViews("murid/edit", $this->global, $data, NULL);

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
            
            $userId = $this->input->post('id_students');
            $userId1 = $this->input->post('id_user');
            
            $this->form_validation->set_rules('username','Username','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
             $this->form_validation->set_rules('full_name','Nama','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('birthday','Tempat, Tanggal Lahir','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('gender','Jenis Kelamin','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('descriptions','Deskripsi','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('address','Alamat','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('city','Kota','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('provinces','Provinsi','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('districts','Kecamatan','trim|required|max_length[128]|xss_clean');
             $this->form_validation->set_rules('villages','Desa','trim|required|max_length[128]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->edit($userId, $userId1);
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('username')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                $userInfo1 = array();

                $full_name = $this->input->post('full_name');
                $birthday = $this->input->post('birthday');
                $gender = $this->input->post('gender');
                $descriptions = $this->input->post('descriptions');
                $address = $this->input->post('address');
                $city = $this->input->post('city');
                $provinces = $this->input->post('provinces');
                $districts = $this->input->post('districts');
                $villages = $this->input->post('villages');
                
                $userInfo = array();
                
                if(empty($password))
                {

                    $userInfo = array(
                        'full_name'=>$full_name,
                        'birthday'=>$birthday,
                        'gender'=>$gender,
                        'descriptions'=>$descriptions,
                        'address'=>$address,
                        'city'=>$city,
                        'provinces'=>$provinces,
                        'districts'=>$districts,
                        'villages'=>$villages,
                    );

                     $userInfo1 = array(
                        'username'=>$name,
                        'email'=>$email,
                        'updated_by'=>$this->vendorId, 
                        'updated_at'=>date('Y-m-d H:i:sa')
                    );
                }
                else
                {
                    $userInfo = array(
                        'full_name'=>$full_name,
                        'birthday'=>$birthday,
                        'gender'=>$gender,
                        'descriptions'=>$descriptions,
                        'address'=>$address,
                        'city'=>$city,
                        'provinces'=>$provinces,
                        'districts'=>$districts,
                        'villages'=>$villages, 
                    );

                    $userInfo1 = array(
                        'username'=>ucwords($name),
                        'email'=>$email, 
                        'password'=>getHashedPassword($password), 
                        'updated_by'=>$this->vendorId, 
                        'updated_at'=>date('Y-m-d H:i:sa')
                    );
                }
                
                $result = $this->student_model->update($userInfo, $userInfo1 ,$userId, $userId1);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('murid');
            }
        }
    }


    function delete($userId)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        { 
            
            $this->student_model->delete($userId);
            redirect('murid');
            
        }
    }
    
    
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'Guru Les : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>