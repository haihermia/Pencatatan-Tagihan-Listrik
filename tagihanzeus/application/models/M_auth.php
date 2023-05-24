<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_auth extends CI_Model {
public function CekLogin($table,$pk,$kd){
$this->db->where($pk, $kd);
return $this->db->get($table)->row_array();
}
}