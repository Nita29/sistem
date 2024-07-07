<?php
defined('BASEPATH') or exit('No direct script access allowed');

class I_private extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('files_model_private');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Informasi Private";
        $data['i_private'] = $this->admin->get('i_private');
        $this->template->load('templates/dashboard', 'i_private/data', $data);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail file';
        $this->load->model('Admin_model');
        $file_detail = $this->admin->detail_file_private($id);
        $data['detail'] = $file_detail;
        // $this->load->view("templates/header", $data);
        $this->load->view("file_detail_private", $data);
        // $this->load->view("templates/footer");
    }

    private function _config()
    {
        $config['upload_path']          = './file_private/';
        $config['allowed_types']        = 'jpg|png|pdf|doc|docx|xlsx|pptx|json|csv';
        $config['max_size']             = 10048;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
    }

    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_private->download($id);
        $file = './file_private/' . $fileinfo['upload'];
        force_download($file, NULL);
    }

    private function _validasi()
    {
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
        $data['title'] = "Informasi Private";

        $this->template->load('templates/dashboard', 'i_private/add', $data);
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
                'kode_dokumen' => getAutoNumber('i_private', 'kode_dokumen', 'FIP-PRV', 15),
                'judul' => $judul,
                'tahun' => $tahun,
                'tanggal_masuk' => $tanggal_masuk,
                'deskripsi' => $deskripsi,
                'tipe' => $tipe,
                'upload' => $upload,
            );
            $save = $this->db->insert('i_private', $data);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('i_private');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('i_private/add');
            }
        }
        if ($this->form_validation->run() == false) {
        } else {

            $input = $this->input->post(null, true);
            $save = $this->admin->insert('i_private', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('i_private');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('i_private/add');
            }
        }






    }

    //EDIT
    public function edit($idPrivate)
    {

        $this->_validasi();
        $this->_config();


        if ($this->form_validation->run() == false) {
            $data['title'] = "Informasi Private";
            $data['i_private'] = $this->admin->getPrivateById($idPrivate);
            $this->template->load('templates/dashboard', 'i_private/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            if (empty($_FILES['upload']['name'])) {
                $insert = $this->admin->update('i_private', 'id_private', $input['id_private'], $input);
                if ($insert) {
                    set_pesan('perubahan berhasil disimpan.');
                    redirect('i_private');
                } else {
                    set_pesan('perubahan tidak disimpan.');
                    redirect('i_private/edit');
                }
            } else {
                if ($this->upload->do_upload('upload') == false) {
                    echo $this->upload->display_errors();
                    die;
                } else {

                    //unlink file
                    $file_rep = $this->admin->getPrivateById($idPrivate);
                    $old_file = $file_rep['upload'];

                    if (!empty($old_file)) {
                        unlink(FCPATH . 'file_private/' . $old_file);
                    }


                    $input['upload'] = $this->upload->data('file_name');
                    $update = $this->admin->update('i_private', 'id_private', $input['id_private'], $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan.');
                        redirect('i_private');
                    } else {
                        set_pesan('gagal menyimpan perubahan');
                        redirect('i_private/edit');
                    }
                }
            }
        }
    }


    //HAPUS
    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('i_private', 'id_private', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('i_private');
    }
}
