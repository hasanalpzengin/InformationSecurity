<?php
/**
 * Created by PhpStorm.
 * User: hasalp
 * Date: 07.03.2018
 * Time: 20:25
 */

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper
        $data['controller'] = "login";
        $this->load->view('head',$data);
    }

    public function index(){
        $this->load->helper('form');
        $this->load->view('login');
        $this->load->view('foot');
    }

    public function login(){
        $this->load->model('MLogin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->MLogin->login($username, $password);
        if ($result['result']){
            $session_data = array(
                'id' => $result['id'],
                'permission' => $result['permission']
            );
            $this->session->set_userdata($session_data);
        }
        $this->load->view('loginResult', $result);
        $this->load->view('foot');
    }

    public function register(){
        $this->load->model('MLogin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $result = $this->MLogin->register($username, $password, $email);
        //session work
        if ($result['result']){
            $session_data = array(
                'id' => $result['id'],
                'permission' => $result['permission']
            );
            $this->session->set_userdata($session_data);
        }
        $this->load->view('registerResult', $result);
        $this->load->view('foot');
    }
}