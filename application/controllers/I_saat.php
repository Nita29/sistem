<?php
defined('BASEPATH') or exit('No direct script access allowed');

class I_saat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('files_model_saat');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Informasi publik setiap saat";
        $data['i_saat'] = $this->admin->get('i_saat');
        $this->template->load('templates/dashboard', 'i_saat/data', $data);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail file';
        $this->load->model('Admin_model');
        $file_detail = $this->admin->detail_file_saat($id);
        $data['detail'] = $file_detail;
        // $this->load->view("templates/header", $data);
        $this->load->view("file_detail_saat", $data);
        // $this->load->view("templates/footer");
    }

    private function _config()
    {
        $config['upload_path']          = './file_saat/';
        $config['allowed_types']        = 'jpg|png|pdf|doc|docx|xlsx|pptx|json|csv';
        $config['max_size']             = 10048;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
    }
    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_saat->download($id);
        $file = './file_saat/' . $fileinfo['upload'];
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

    public function add()
    {

        $this->_validasi();
        $this->_config();
        $data['title'] = "Informasi Pubik setiap saat";

        // //inisiasi tabel dan field 
        // $table = "i_saat";
        // $field = "kode_dokumen";
        // //generate kode unik
        // $kode = 'FI-PSS-' . date('dmy');
        // $kode_terakhir = $this->admin->getMax($table, $field, $kode);
        // $kode_tambah = (int)substr($kode_terakhir, -5, 5);
        // $kode_tambah++;
        // $number = str_pad($kode_tambah, 7, '0', STR_PAD_LEFT);
        // $data['kode_dokumen'] = $kode . $number;

        $this->template->load('templates/dashboard', 'i_saat/add', $data);
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
                'kode_dokumen' => getAutoNumber('i_saat', 'kode_dokumen', 'FISS-DS', 15),
                'judul' => $judul,
                'tahun' => $tahun,
                'tanggal_masuk' => $tanggal_masuk,
                'deskripsi' => $deskripsi,
                'tipe' => $tipe,
                'upload' => $upload,
            );
            $save = $this->db->insert('i_saat', $data);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('i_saat');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('i_saat/add');
            }
        }


        // if ($this->form_validation->run() == false) {
        //     $data['title'] = "Informasi publik setiap saat";

        //     //inisiasi tabel dan field 
        //     $table = "i_saat";
        //     $field = "kode_dokumen";
        //     //generate kode unik
        //     $kode = 'F-ISS-' . date('dmy');
        //     $kode_terakhir = $this->admin->getMax($table, $field, $kode);
        //     $kode_tambah = substr($kode_terakhir, -5, 5);
        //     $kode_tambah++;
        //     $number = str_pad($kode_tambah, 7, '0', STR_PAD_LEFT);
        //     $data['kode_dokumen'] = $kode . $number;

        //     $this->template->load('templates/dashboard', 'i_saat/add', $data);
        // } else {
        //     $input = $this->input->post(null, true);
        //     $save = $this->admin->insert('i_saat', $input);
        //     if ($save) {
        //         set_pesan('data berhasil disimpan.');
        //         redirect('i_saat');
        //     } else {
        //         set_pesan('data gagal disimpan', false);
        //         redirect('i_saat/add');
        //     }
        // }
    }

    public function edit($idSaat)
    {
        $this->_validasi();
        $this->_config();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Informasi Publik setiap saat";
            $data['i_saat'] = $this->admin->getSaatById($idSaat);
            $this->template->load('templates/dashboard', 'i_saat/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            if (empty($_FILES['upload']['name'])) {
                $insert = $this->admin->update('i_saat', 'id_saat', $input['id_saat'], $input);
                if ($insert) {
                    set_pesan('perubahan berhasil disimpan.');
                    redirect('i_saat');
                } else {
                    set_pesan('perubahan tidak disimpan.');
                    redirect('i_saat/edit');
                }
            } else {
                if ($this->upload->do_upload('upload') == false) {
                    echo $this->upload->display_errors();
                    die;
                } else {

                    //unlink file
                    $file_rep = $this->admin->getSaatById($idSaat);
                    $old_file = $file_rep['upload'];

                    if (!empty($old_file)) {
                        unlink(FCPATH . 'file_saat/' . $old_file);
                    }


                    $input['upload'] = $this->upload->data('file_name');
                    $update = $this->admin->update('i_saat', 'id_saat', $input['id_saat'], $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan.');
                        redirect('i_saat');
                    } else {
                        set_pesan('gagal menyimpan perubahan');
                        redirect('i_saat/edit');
                    }
                }
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('i_saat', 'id_saat', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('i_saat');
    }
}
