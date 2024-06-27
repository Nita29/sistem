<?php
defined('BASEPATH') or exit('No direct script access allowed');

class I_merta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('files_model_merta');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Informasi publik serta merta";
        $data['i_merta'] = $this->admin->get('i_merta');
        $this->template->load('templates/dashboard', 'i_merta/data', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail file';
        $this->load->model('Admin_model');
        $file_detail = $this->admin->detail_file_merta($id);
        $data['detail'] = $file_detail;
        // $this->load->view("templates/header", $data);
        $this->load->view("file_detail_merta", $data);
        // $this->load->view("templates/footer");
    }
    private function _config()
    {
        $config['upload_path']          = './file_merta/';
        $config['allowed_types']        = 'jpg|png|pdf|doc|docx|xlsx|pptx|json|csv';
        $config['max_size']             = 10048;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
    }

    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_merta->download($id);
        $file = './file_merta/' . $fileinfo['upload'];
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
        $data['title'] = "Informasi Publik Serta merta";


        // //inisiasi tabel dan field 
        // $table = "i_merta";
        // $field = "kode_dokumen";
        // //generate kode unik
        // $kode = 'FI-PSM' . date('dmy');
        // $kode_terakhir = $this->admin->getMax($table, $field, $kode);
        // $kode_tambah = (int)substr($kode_terakhir, -5, 5);
        // $kode_tambah++;
        // $number = str_pad($kode_tambah, 7, '0', STR_PAD_LEFT);
        // $data['kode_dokumen'] = $kode . $number;

        $this->template->load('templates/dashboard', 'i_merta/add', $data);
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
                'kode_dokumen' => getAutoNumber('i_merta', 'kode_dokumen', 'FIM-DSM', 15),
                'judul' => $judul,
                'tahun' => $tahun,
                'tanggal_masuk' => $tanggal_masuk,
                'deskripsi' => $deskripsi,
                'tipe' => $tipe,
                'upload' => $upload,
            );
            $save = $this->db->insert('i_merta', $data);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('i_merta');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('i_merta/add');
            }
        }


        // if ($this->form_validation->run() == false) {
        //     $data['title'] = "Informasi publik serta merta";

        //     //inisiasi tabel dan field 
        //     $table = "i_merta";
        //     $field = "kode_dokumen";
        //     //generate kode unik
        //     $kode = 'F-ISM-' . date('dmy');
        //     $kode_terakhir = $this->admin->getMax($table, $field, $kode);
        //     $kode_tambah = substr($kode_terakhir, -5, 5);
        //     $kode_tambah++;
        //     $number = str_pad($kode_tambah, 7, '0', STR_PAD_LEFT);
        //     $data['kode_dokumen'] = $kode . $number;

        //     $this->template->load('templates/dashboard', 'i_merta/add', $data);
        // } else {
        //     $input = $this->input->post(null, true);
        //     $save = $this->admin->insert('i_merta', $input);
        //     if ($save) {
        //         set_pesan('data berhasil disimpan.');
        //         redirect('i_merta');
        //     } else {
        //         set_pesan('data gagal disimpan', false);
        //         redirect('i_merta/add');
        //     }
        // }
    }

    public function edit($idMerta)
    {
        $this->_validasi();
        $this->_config();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Informasi Publik serta merta";
            $data['i_merta'] = $this->admin->getMertaById($idMerta);
            $this->template->load('templates/dashboard', 'i_merta/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            if (empty($_FILES['upload']['name'])) {
                $insert = $this->admin->update('i_merta', 'id_merta', $input['id_merta'], $input);
                if ($insert) {
                    set_pesan('perubahan berhasil disimpan.');
                    redirect('i_merta');
                } else {
                    set_pesan('perubahan tidak disimpan.');
                    redirect('i_merta/edit');
                }
            } else {
                if ($this->upload->do_upload('upload') == false) {
                    echo $this->upload->display_errors();
                    die;
                } else {

                    //unlink file
                    $file_rep = $this->admin->getMertaById($idMerta);
                    $old_file = $file_rep['upload'];

                    if (!empty($old_file)) {
                        unlink(FCPATH . 'file_merta/' . $old_file);
                    }



                    $input['upload'] = $this->upload->data('file_name');
                    $update = $this->admin->update('i_merta', 'id_merta', $input['id_merta'], $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan.');
                        redirect('i_merta');
                    } else {
                        set_pesan('gagal menyimpan perubahan');
                        redirect('i_merta/edit');
                    }
                }
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('i_merta', 'id_merta', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('i_merta');
    }
}
