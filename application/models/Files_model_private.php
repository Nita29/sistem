<?php
class Files_model_private extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllFiles()
    {
        $query = $this->db->get('i_private');
        return $query->result();
    }

    public function insertfile($file)
    {
        return $this->db->insert('i_private', $file);
    }

    public function download($id)
    {
        $query = $this->db->get_where('i_private', array('id_private' => $id));
        return $query->row_array();
    }
}
