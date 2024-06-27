<?php
class Files_model_merta extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllFiles()
    {
        $query = $this->db->get('i_merta');
        return $query->result();
    }

    public function insertfile($file)
    {
        return $this->db->insert('i_merta', $file);
    }

    public function download($id)
    {
        $query = $this->db->get_where('i_merta', array('id_merta' => $id));
        return $query->row_array();
    }
}
