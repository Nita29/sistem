<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_regulasi extends CI_Controller
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
        $data['title'] = "Berita regulasi";
        $data['regulasi'] = $this->admin->get('regulasi');
        $this->template->load('templates/dashboard', 'regulasi/data', $data);
    }

    public function add()
    {
        $data['title'] = "Berita regulasi";
        $this->template->load('templates/dashboard', 'regulasi/add', $data);
    }
}
