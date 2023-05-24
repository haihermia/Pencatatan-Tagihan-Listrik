<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
private $redirect = "tb_admin";
public function __construct(){
parent::__construct();
//Load model
$this->load->model('M_auth');
}
public function index(){
$this->session->sess_destroy();
$data = array(

'login' => ''
);

$this->load->view('backend/login', $data);
}
public function login(){

$kd = $this->input->post('id_admin');
$pwd = md5($this->input->post('password'));
$data = $this->M_auth->CekLogin('tb_admin','id_admin',$kd);
//jika login

if($data['password'] == $pwd AND $data['id_admin'] == $kd){
$array = array(
'id_admin' => $data['id_admin'],
'username' => $data['username'],
'Istb_admin' => 1
);
$this->session->set_userdata($array);
redirect('Home','refresh');
}else{
echo "<script>alert('Username atau Password
salah!');</script>";
redirect('Auth','refresh');
}
}
public function logout()
{
//data session akan di hancurkan
$this->session->sess_destroy();
redirect('Auth','refresh');
}
}