<?php
class InformasiPublikSS extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('files_model_saat');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Informasi publik setiap saat';
        $data['i_saat'] = $this->admin->get('i_saat');
        $this->load->view("templates/header", $data);
        $this->load->view("ips", $data);
        $this->load->view("templates/footer");
    }
    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_saat->download($id);
        $file = './file_saat/' . $fileinfo['upload'];
        force_download($file, NULL);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail file';
        $this->load->model('Admin_model');
        $file_detail = $this->admin->detail_file_saat($id);
        $data['detail'] = $file_detail;
        // $this->load->view("templates/header", $data);
        $this->load->view("file_detail_saat", $data);
        // $this->load->view("templates/footer");
    }
}
