<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper
        $type = $this->input->post('type');
        if ($type==null) {
            if ($this->isSession()){
                $data['controller'] = "page";
                $this->load->view('head',$data);
            }else{
                $data['controller'] = "error";
                $this->load->view('head',$data);
                $this->load->view('session_error');
                header( "refresh:3;url=/index.php/login");
            }
        }
    }

    public function index(){
        if ($this->isSession()){
            $this->load->view('index');
            $this->load->view('foot');
        }
    }

    public function sql_injection(){
        if ($this->isSession()) {
            $this->load->view('sql_injection');
            $this->load->view('foot');
        }
    }

    public function csrf(){
        if ($this->isSession()) {
            $this->load->view('csrf');
            $this->load->view('foot');
        }
    }

    public function xss(){
        if ($this->isSession()) {
            $this->load->view('xss');
            $this->load->view('foot');
        }

    }

    public function broken_authentication(){
        if ($this->isSession()) {
            $this->load->view('brokenAuthentication');
            $this->load->view('foot');
        }

    }

    public function file_include(){
        if ($this->isSession()) {
            $this->load->view('fileInclude');
            $this->load->view('foot');
        }
    }

    public function hash_attacks(){
        if ($this->isSession()) {
            $this->load->view('hashAttacks');
            $this->load->view('foot');
        }

    }

    public function sql_injection_bot(){
        if ($this->isSession()) {
            $this->load->view('bot');
            $this->load->view('foot');
        }
    }

    public function sql_injection_test(){
        //if ($this->isSession()) {
            $this->load->model('MLogin');
            $post_id = $this->input->post('id');
            $get_id = $this->input->get('id');
            if (!empty($post_id)){
                $data["id"] = $this->MLogin->sql_injection_test($post_id);
                $this->load->view('sqlinjectionTest',$data);
            }elseif (!empty($get_id)){
                $data["id"] = $this->MLogin->sql_injection_test($get_id);
                $this->load->view('sqlinjectionTest',$data);
            }
            $this->load->view('foot');
        //}
    }

    public function pratik(){
        if ($this->isSession()) {
            $type = $this->input->post('type');
            if ($type==null) {
                $this->load->view('pratik');
                $this->load->view('foot');
            }else{
                switch($type){
                    case 'injection':{
                        $girdi = "' or ''='";
                        //echo $girdi;
                        $this->load->model('MLogin');
                        $return = $this->MLogin->check_injection($this->input->post('code'), $girdi);
                        if((string)(int)$return==(string)$return){
                            echo "injected";
                        }else{
                            echo "prevented";
                        }
                        break;
                    }
                    case 'csrf':{
                        $_SESSION['token'] = 2333;
                        $_GET['token'] = 6778;
                        $code = $this->input->post('code');
                        $return = $this->csrf_eval($code);
                        if ($return == "prevented"){
                            $_SESSION['token'] = 2333;
                            $_GET['token'] = 2333;
                            $return = $this->csrf_eval($code);
                            if ($return == "pass"){
                                echo "prevented";
                            }else{
                                echo "injected";
                            }
                        }else{
                            echo "injected";
                        }
                    }
                    case 'xss':{
                        $code = $this->input->post('code');
                        $girdi = $this->input->get('girdi');
                        eval($code);
                        echo $girdi;
                    }
                }
            }
        }

    }

    public function isSession(){
            $id = $this->session->userdata('id');
            return isset($id);
    }

    public function csrf_eval($eval){
        $sonuc = "injected";
        eval($eval);
        return $sonuc;
    }
}