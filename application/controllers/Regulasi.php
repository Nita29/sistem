<?php
class Regulasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Regulasi';
        $this->load->helper("url");
        $this->load->view("templates/header", $data);
        $this->load->view("regulasi");
        $this->load->view("templates/footer");
    }
}
