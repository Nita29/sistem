<?php
class FAQ extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'FAQ';
        $this->load->helper("url");
        $this->load->view("templates/header", $data);
        $this->load->view("faq");
        $this->load->view("templates/footer");
    }
}
 