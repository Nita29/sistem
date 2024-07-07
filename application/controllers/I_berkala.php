<?php
defined('BASEPATH') or exit('No direct script access allowed');

class I_berkala extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('files_model_berkala');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Informasi publik secara berkala";
        $data['i_berkala'] = $this->admin->get('i_berkala');
        $this->template->load('templates/dashboard', 'i_berkala/data', $data);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail file';
        $this->load->model('Admin_model');
        $file_detail = $this->admin->detail_file_berkala($id);
        $data['detail'] = $file_detail;
        // $this->load->view("templates/header", $data);
        $this->load->view("file_detail_berkala", $data);
        // $this->load->view("templates/footer");
    }
    private function _config()
    {
        $config['upload_path']          = './file_berkala/';
        $config['allowed_types']        = 'jpg|png|pdf|doc|docx|xlsx|pptx|json|csv';
        $config['max_size']             = 10048;
        $config['max_width']            = 10048;
        $config['max_height']           = 10048;

        $this->load->library('upload', $config);
    }


    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_berkala->download($id);
        $file = './file_berkala/' . $fileinfo['upload'];
        force_download($file, NULL);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('kode_dokumen', 'Kode_dokumen', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|numeric');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');
    }



    //TAMBAH
    public function add()
    {

        $this->_validasi();
        $this->_config();
        $data['title'] = "Informasi Publik secara berkala";

        //inisiasi tabel dan field 
        $table = "i_berkala";
        $field = "kode_dokumen";
        //generate kode unik
        $kode = 'F-IP-' . date('dmy');
        $kode_terakhir = $this->admin->getMax($table, $field, $kode);
        $kode_tambah = (int)substr($kode_terakhir, -5, 5);
        $kode_tambah++;
        $number = str_pad($kode_tambah, 7, '0', STR_PAD_LEFT);
        $data['kode_dokumen'] = $kode . $number;

        $this->template->load('templates/dashboard', 'i_berkala/add', $data);
        if (!$this->upload->do_upload('upload')) {
        } else {
            $upload = $this->upload->data();
            $upload = $upload['file_name'];
            // $kode_dokumen = $this->input->post('kode_dokumen', TRUE);
            $judul = $this->input->post('judul', TRUE);
            $tahun = $this->input->post('tahun', TRUE);
            $tanggal_masuk = $this->input->post('tanggal_masuk', TRUE);
            $deskripsi = $this->input->post('deskripsi', TRUE);
            $tipe = $this->input->post('tipe', TRUE);


            $data = array(
                'kode_dokumen' => getAutoNumber('i_berkala', 'kode_dokumen', 'FIB-DPB', 15),
                'judul' => $judul,
                'tahun' => $tahun,
                'tanggal_masuk' => $tanggal_masuk,
                'deskripsi' => $deskripsi,
                'tipe' => $tipe,
                'upload' => $upload,
            );
            $save = $this->db->insert('i_berkala', $data);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('i_berkala');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('i_berkala/add');
            }
        }


        if ($this->form_validation->run() == false) {
            $data['title'] = "Informasi publik secara berkala";

            //inisiasi tabel dan field 
            $table = "i_berkala";
            $field = "kode_dokumen";
            //generate kode unik
            $kode = 'D-IPB-' . date('dmy');
            $kode_terakhir = $this->admin->getMax($table, $field, $kode);
            $kode_tambah = substr($kode_terakhir, -5, 5);
            $kode_tambah++;
            $number = str_pad($kode_tambah, 7, '0', STR_PAD_LEFT);
            $data['kode_dokumen'] = $kode . $number;


            $this->template->load('templates/dashboard', 'i_berkala/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('i_berkala', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('i_berkala');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('i_berkala/add');
            }
        }
    }

    //EDIT
    public function edit($idBerkala)
    {

        $this->_validasi();
        $this->_config();


        if ($this->form_validation->run() == false) {
            $data['title'] = "Informasi Publik secara berkala";
            $data['i_berkala'] = $this->admin->getBerkalaById($idBerkala);
            $this->template->load('templates/dashboard', 'i_berkala/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            if (empty($_FILES['upload']['name'])) {
                $insert = $this->admin->update('i_berkala', 'id_berkala', $input['id_berkala'], $input);
                if ($insert) {
                    set_pesan('perubahan berhasil disimpan.');
                    redirect('i_berkala');
                } else {
                    set_pesan('perubahan tidak disimpan.');
                    redirect('i_berkala/edit');
                }
            } else {
                if ($this->upload->do_upload('upload') == false) {
                    echo $this->upload->display_errors();
                    die;
                } else {

                    //unlink file
                    $file_rep = $this->admin->getBerkalaById($idBerkala);
                    $old_file = $file_rep['upload'];

                    if (!empty($old_file)) {
                        unlink(FCPATH . 'file_berkala/' . $old_file);
                    }




                    $input['upload'] = $this->upload->data('file_name');
                    $update = $this->admin->update('i_berkala', 'id_berkala', $input['id_berkala'], $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan.');
                        redirect('i_berkala');
                    } else {
                        set_pesan('gagal menyimpan perubahan');
                        redirect('i_berkala/edit');
                    }
                }
            }
        }
    }


    //HAPUS
    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('i_berkala', 'id_berkala', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('i_berkala');
    }
}
