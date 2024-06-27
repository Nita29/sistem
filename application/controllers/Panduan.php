<?php
class Panduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "Panduan penggunaan";
        $this->template->load('templates/dashboard', 'panduan/data', $data);
    }
}
