<?php
class Panduan_pemohon extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Petunjuk penggunaan Pemohon';
        $this->load->helper("url");
        $this->load->view("panduan_pemohon", $data);
    }
}
