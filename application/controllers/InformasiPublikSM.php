<?php
class InformasiPublikSM extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('files_model_merta');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Informasi publik serta merta';
        $data['i_merta'] = $this->admin->get('i_merta');
        $this->load->view("templates/header", $data);
        $this->load->view("ipsm", $data);
        $this->load->view("templates/footer");
    }

    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_merta->download($id);
        $file = './file_merta/' . $fileinfo['upload'];
        force_download($file, NULL);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail file';
        $this->load->model('Admin_model');
        $file_detail = $this->admin->detail_file_merta($id);
        $data['detail'] = $file_detail;
        // $this->load->view("templates/header", $data);
        $this->load->view("file_detail_merta", $data);
        // $this->load->view("templates/footer");
    }
}
