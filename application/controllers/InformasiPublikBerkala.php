<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiPublikBerkala extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('files_model_berkala');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Informasi publik berkala';
        $data['i_berkala'] = $this->admin->get('i_berkala');
        $this->load->view("templates/header", $data);
        $this->load->view('ipb', $data);
        $this->load->view("templates/footer");
    }
    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_berkala->download($id);
        $file = './file_berkala/' . $fileinfo['upload'];
        force_download($file, NULL);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail file';
        $this->load->model('Admin_model');
        $file_detail = $this->admin->detail_file_berkala($id);
        $data['detail'] = $file_detail;
        // $this->load->view("templates/header", $data);
        $this->load->view("file_detail_berkala", $data);
        // $this->load->view("templates/footer");
    }
}
