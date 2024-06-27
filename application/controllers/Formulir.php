<?php
class Formulir extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Formulir';
        $this->load->helper("url");
        $this->load->view("formulir", $data);
    }
}
