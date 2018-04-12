<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Jadwal extends BaseController {

     public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model');
        $this->isLoggedIn();   
    }

	public function index() {

		if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {

            $this->global['pageTitle'] = 'Guru Les : Data Guru';

            $count = $this->jadwal_model->jadwalGuru();
            $this->load->library('pagination');
            $config['total_rows'] = $count;
            $config['per_page'] = 5;
            $this->pagination->initialize($config);
            $from = $this->uri->segment(2);
            $this->paginationCompress ( "jadwal/", $count, 5 );
            $data['jadwal_guru'] = $this->jadwal_model->data($config['per_page'], $from);
            $this->loadViews("jadwal/index", $this->global, $data, NULL);
        }
	}

    public function edit($id) {

        $this->load->model('teacher_model');
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
        
            $data['default'] = $this->jadwal_model->get_default($id);          
            $this->loadViews("jadwal/edit", $this->global, $data, NULL);

        }

    }

    public function editUser() {

        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }

         else {

            $id = $this->input->post('schedule_id');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('schedule_times','Jam','trim|required|max_length[128]|xss_clean');

            if ($this->form_validation->run() == FALSE) {

                $this->edit($id);

            } else {

                $data = array(
                    'schedule_days' => $this->input->post('schedule_days'),
                    'schedule_times' => $this->input->post('schedule_times')
                    );
                $result = $this->jadwal_model->update($data, $id); 

                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }

                redirect('jadwal');
            }
        }
    }

    public function delete($id) {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else {
            $this->jadwal_model->delete($id);
            redirect('jadwal');

            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
}