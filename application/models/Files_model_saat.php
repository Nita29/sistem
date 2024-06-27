<?php
class Files_model_saat extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllFiles()
    {
        $query = $this->db->get('i_saat');
        return $query->result();
    }

    public function insertfile($file)
    {
        return $this->db->insert('i_saat', $file);
    }

    public function download($id)
    {
        $query = $this->db->get_where('i_saat', array('id_saat' => $id));
        return $query->row_array();
    }
}
