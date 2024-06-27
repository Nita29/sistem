<?php
class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = 'Selamat datang ';
        $this->load->helper("url");
        $data['banner'] = $this->admin->get('banner');
        $data['permohonan'] = $this->admin->count('permohonan');

        $this->load->view("templates/header", $data);
        $this->load->view("beranda", $data);
        $this->load->view("templates/footer");
    }
}
