<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('permohonan');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Laporan permohonan informasi";
        $data['permohonan'] = $this->admin->get('permohonan');
        $this->template->load('templates/dashboard', 'report/data', $data);
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('permohonan', 'id_pemohon', $id)) {
            set_pesan('data berhasil dihapus.');
            redirect('report');
        } else {
            set_pesan('data gagal dihapus', false);
            redirect('report');
        }
        redirect('report');
    }
}
