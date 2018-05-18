<?php
/**
 * Created by PhpStorm.
 * User: hasalp
 * Date: 08.03.2018
 * Time: 11:16
 */

class MLogin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password){
        //query
        $sql = "SELECT id, permission FROM users WHERE username=? AND password=?";
        $query = $this->db->query($sql,array($username,$password));
        $row = $query->row();
        if (isset($row)){
            $result['result'] = true;
            $result['id'] = $row->id;
            $result['permission'] = $row->permission;
        }else{
            $result['result']=false;
            $result['error'] = $this->db->error();
        }
        return $result;
    }

    public function register($username, $password, $email){
        if (!isset($username) || !isset($password) || !isset($email)){
            $result['result']=false;
            $result['error'] = "Bilgiler Boş Bırakılamaz !";
            return $result;
        }

        $data = array(
            "username"=>$username,
            "password"=>$password,
            "email"=>$email,
            "permission"=>3
        );
        $this->db->insert("users", $data);
        if ($this->db->affected_rows()>=1){
            $result['id'] = $this->db->insert_id();
            $result['result']=true;
            $result['permission']=3;
        }else{
            $result['result']=false;
            $result['error'] = $this->db->error();
        }
        return $result;
    }

    public function check_injection($input,$girdi){
        $id = $girdi;
        eval($input);
        $sql = "SELECT id, permission FROM users WHERE username='hasalp' AND password='$id'";
        $query = $this->db->query($sql);
        $row = $query->row();
        return $row->id;
    }

    public function csrf_injection($input,$girdi){
        $id = $girdi;
        eval($input);
        $sql = "SELECT id, permission FROM users WHERE username='hasalp' AND password='$id'";
        $query = $this->db->query($sql);
        $row = $query->row();
        return $row->id;
    }
}