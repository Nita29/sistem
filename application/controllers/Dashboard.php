<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        //title
        $data['title'] = "Dashboard";

        //data informasi untuk di dashboard
        $data['i_private'] = $this->admin->count('i_private');
        $data['i_saat'] = $this->admin->count('i_saat');
        $data['i_merta'] = $this->admin->count('i_merta');
        $data['i_berkala'] = $this->admin->count('i_berkala');
        
        //permohonan informasi untuk di dashboard
        $data['permohonan'] = $this->admin->count('permohonan');
        $data['balas'] = $this->admin->getBalas();

        //data terbaru yang diupload untuk di dashboard yang table
        $data['dataTerbaru'] = $this->admin->getPermohonan();
        $data['dataBalas'] = $this->admin->getPermohonan();
        $data['dataPrivate'] = $this->admin->getDataPrivate();
        $data['dataBerkala'] = $this->admin->getDataBerkala();
        $data['dataMerta'] = $this->admin->getDataMerta();
        $data['dataSaat'] = $this->admin->getDataSaat();

        //user
        $data['user'] = $this->admin->count('user');

        // Line Chart
        $bln = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $data['cbm'] = [];
        $data['cbk'] = [];

        foreach ($bln as $b) {
            $data['cbm'][] = $this->admin->chartPermohonan($b);
            $data['cbk'][] = $this->admin->chartPrivate($b);
        }

        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
