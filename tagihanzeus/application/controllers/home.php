<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Home extends CI_Controller
{
    private $view = "backend/v_home/";
    private $redirect = "Home";
    public function __construct()
    {
        parent::__construct();

        //mengaktifkan session dengan demikian halaman ini jika dipanggil kini membutuhkan session
        Istb_admin();
    }
    public function index()
    {
        $data = array(
            'judul' => "BERANDA",
            'sub' => "Halaman Beranda"
        );
        /*
        $this->template memanggil libraries template,
        load('backend/template' artinya memanggil file template.php,
        $this->view.'read' memanggil file read.php
        catatan: setelah kita mengetahui untuk view kali ini script ada penambahan
        template,
        maka CRUD Admin pembalajaran sebelumnya mengikuti script seperti pada
        control Home */
        $this->template->load('backend/template', $this->view . 'read', $data);
    }
}