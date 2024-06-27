<?php
class Permohonan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllFiles()
    {
        $query = $this->db->get('permohonan');
        return $query->result();
    }

    public function insertfile($file)
    {
        return $this->db->insert('permohonan', $file);
    }

    public function download($id)
    {
        $query = $this->db->get_where('permohonan', array('id_pemohon' => $id));
        return $query->row_array();
    }
}
