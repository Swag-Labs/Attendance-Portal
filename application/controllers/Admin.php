<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_model');
    }

    public function index()
    {
        $this->load->view('admin');
    }



    public function create_user()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('user_model');
        $result = $this->user_model->read_user_information($email);
        if ($result != false) {
            $this->load->view('login_modal');
        }else {
            $this->user_model->create($name, $email, $password);
            $this->login();
        }
    }

    public function login_user()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('blog');

        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password = sha1($password);
            $result = $this->user_model->login($email, $password);
            if ($result == TRUE) {
                $result = $this->user_model->read_user_information($email);
                if ($result != false) {
                    $resultat = $this->user_model->attendance($email);
                    if ($resultat != false ) {
                        foreach ($resultat as $row)
                        {
                            $id = $row['id'];
                            $employee_id = $row['employee_id'];
                        }
                        $newdata = array(
                            'id' => $id,
                            'employee_id' => $employee_id
                        );

                        $this->session->set_userdata($newdata);
                        $this->load->view('final');
                    } else {
                        $this->load->view('blog');
                    }
                }
                else
                    {
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('no');
                    }

            }
        }
    }


    public function login()
    {

        $this->load->view('login');

    }

    public function signup()
    {

        $this->load->view('signup');

    }

    public function logout()
    {
        $id = $this->session->userdata('id');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->user_model->logout($id);
        $this->load->view('admin');
    }

}