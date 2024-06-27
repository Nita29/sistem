<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    //mendatpatkan data pada database
    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    // INFORMASI MASTER DATA
    //mendapat kan data pada tabel i_private
    public function getPrivateById($idPrivate)
    {
        return $this->db->get_where('i_private', ['id_private' => $idPrivate])->row_array();
    }
    //mendapat kan data pada tabel i_merta
    public function getMertaById($idMerta)
    {
        return $this->db->get_where('i_merta', ['id_merta' => $idMerta])->row_array();
    }
    //mendapat kan data pada tabel i_berkala
    public function getBerkalaById($idBerkala)
    {
        return $this->db->get_where('i_berkala', ['id_berkala' => $idBerkala])->row_array();
    }
    //mendapat kan data pada tabel i_saat
    public function getSaatById($idSaat)
    {
        return $this->db->get_where('i_saat', ['id_saat' => $idSaat])->row_array();
    }

    //mendapat kan data pada tabel banner
    public function getBannerById($idBanner)
    {
        return $this->db->get_where('banner', ['id_banner' => $idBanner])->row_array();
    }



    // DATA PEMOHON
    //mendapat kan data pada tabel permohonan
    public function getPermohonanById($idPemohon)
    {
        return $this->db->get_where('permohonan', ['id_pemohon' => $idPemohon])->row_array();
    }

    // EDIT DATA ADMIN MENU PERMOHONAN INFORMASI
    //edit data permohonan
    public function edit_permohonan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    //update permohonan ( admin)
    public function update_permohonan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    //mendapat kan data pada tabel untuk fungsi balas
    public function balas($where, $table)
    {
        return $this->db->get_where($table, $where);
    }


    // LIHAT FILE (DETAIL INFORMASI MASTER DATA)
    //mendapat kan data upload pada tabel detail data pada tabel permohonan
    public function detail_file_berkala($id = NULL)
    {
        $query = $this->db->get_where('i_berkala', array('id_berkala' => $id))->row();
        return $query;
    }
    //mendapat kan data upload pada tabel detail data pada tabel permohonan
    public function detail_file_merta($id = NULL)
    {
        $query = $this->db->get_where('i_merta', array('id_merta' => $id))->row();
        return $query;
    }
    //mendapat kan data upload pada tabel detail data pada tabel permohonan
    public function detail_file_saat($id = NULL)
    {
        $query = $this->db->get_where('i_saat', array('id_saat' => $id))->row();
        return $query;
    }
    //mendapat kan data upload pada tabel detail data pada tabel permohonan
    public function detail_file_private($id = NULL)
    {
        $query = $this->db->get_where('i_private', array('id_private' => $id))->row();
        return $query;
    }


    // LIHAT DETAIL PADA TABEL PERMOHONAN INFORMASI
    //mendapat kan data pada tabel detail data pada tabel permohonan
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('permohonan', array('id_pemohon' => $id))->row();
        return $query;
    }




    //update data pada  data tabel
    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }

    //menambahkan data pada tabel
    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }
    //hapus data pada data tabel
    public function delete($table, $pk, $id)
    {
        return $this->db->delete($table, [$pk => $id]);
    }
    // untuk mendapatkan id pada tabel users
    public function getUsers($id)
    {
        /**
         * ID disini adalah untuk data yang tidak ingin ditampilkan. 
         * Maksud saya disini adalah 
         * tidak ingin menampilkan data user yang digunakan, 
         * pada managemen data user
         */
        $this->db->where('id_user !=', $id);
        return $this->db->get('user')->result_array();
    }



    // //membuat kode otomatis
    // public function getMax(
    //     $table,
    //     $field,
    //     $kode
    // ) {
    //     $this->db->select_max($field);
    //     if ($kode != null) {
    //         $this->db->like(
    //             $field,
    //             $kode,
    //             'after'
    //         );
    //     }
    //     return $this->db->get($table)->row_array()[$field];
    // }

    // MENDAPATKAN DATA PADA DASHBOARD
    //untuk menyelksi data 5 terakhir masuk  permohonan informasi kedatabase ->tabel 5data terkahir masuk yang tampil di dashboard
    public function getPermohonan()
    {
        $query = $this->db->query("SELECT * FROM `permohonan` ORDER BY id_pemohon DESC limit 5");
        return $query->result_array();
    }

    //untuk menyelksi data 5 terakhir masuk informasi private kedatabase ->tabel 5data terkahir masuk yang tampil di dashboard
    public function getDataPrivate()
    {
        $query = $this->db->query("SELECT * FROM `i_private` ORDER BY id_private DESC limit 5");
        return $query->result_array();
    }

    //untuk menyelksi data 5 terakhir masuk  informasi berkala kedatabase ->tabel 5data terkahir masuk yang tampil di dashboard
    public function getDataBerkala()
    {
        $query = $this->db->query("SELECT * FROM `i_berkala` ORDER BY id_berkala DESC limit 5");
        return $query->result_array();
    }

    //untuk menyelksi data 5 terakhir masuk  informasi merta kedatabase ->tabel 5data terkahir masuk yang tampil di dashboard
    public function getDataMerta()
    {
        $query = $this->db->query("SELECT * FROM `i_merta` ORDER BY id_merta DESC limit 5");
        return $query->result_array();
    }

    //untuk menyelksi data 5 terakhir masuk  informasi saat kedatabase ->tabel 5data terkahir masuk yang tampil di dashboard
    public function getDataSaat()
    {
        $query = $this->db->query("SELECT * FROM `i_saat` ORDER BY id_saat DESC limit 5");
        return $query->result_array();
    }

    //untuk menyelksi dan mengambil ( menjumlahkan data pada kolom untuk balas informasi) untuk hitung data
    public function getBalas()
    {
        $sql = "SELECT count(pesan) as pesan FROM permohonan";
        $result =  $this->db->query($sql);
        return $result->row()->pesan;
    }

    // mendapatkan data report
    // public function getReport()
    // {
    //     $this->db->select('*');
    //     $this->db->join('user j', 'user_id = id_user');


    //     $this->db->order_by('id_pemohon', 'DESC');
    //     return $this->db->get('permohonan')->result_array();
    // }





    //PERHITUNGAN DATA
    //hitung data pada taabel
    public function count($table)
    {
        return $this->db->count_all($table);
    }
    //sum data pada tabel   
    public function sum($table, $field)
    {
        $this->db->select_sum($field);
        return $this->db->get($table)->row_array()[$field];
    }
    //mengambil data minimum pada data tabel
    public function min($table, $field, $min)
    {
        $field = $field . ' <=';
        $this->db->where($field, $min);
        return $this->db->get($table)->result_array();
    }

    // Detail berita untuk regulasi
    public function detail_regulasi($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('regulasi');
            return $query->result_array();
        }
        $query = $this->db->get_where('regulasi', array('id_regulasi' => $id));
        return $query->row_array();
    }













    // CHART PADA DASHBOARD
    public function chartPermohonan($bulan)
    {
        $like = 'T-BM-' . date('y') . $bulan;
        $this->db->like('id_pemohon', $like, 'after');
        return count($this->db->get('permohonan')->result_array());
    }

    public function chartPrivate($bulan)
    {
        $like = 'T-BK-' . date('y') . $bulan;
        $this->db->like('id_private', $like, 'after');
        return count($this->db->get('i_private')->result_array());
    }
}
