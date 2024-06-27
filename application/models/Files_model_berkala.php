<?php
class Files_model_berkala extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllFiles()
    {
        $query = $this->db->get('i_berkala');
        return $query->result();
    }

    public function insertfile($file)
    {
        return $this->db->insert('i_berkala', $file);
    }

    public function download($id)
    {
        $query = $this->db->get_where('i_berkala', array('id_berkala' => $id));
        return $query->row_array();
    }
}
