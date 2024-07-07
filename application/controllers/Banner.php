<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Banner berita";
        $data['banner'] = $this->admin->get('banner');
        $this->template->load('templates/dashboard', 'banner/data', $data);
    }
    public function detail($id)
    {

        $this->load->model('Admin_model');
        $detail = $this->admin->detail_data($id);
        $data['detail'] = $detail;
        // // $data['permohonan'] = $this->admin->get('permohonan');
        // $this->template->load('templates/dashboard', 'permohonan/detail', $data);
    }
    private function _validasi()
    {
        $this->form_validation->set_rules('gambar1', 'Gambar1', 'required|trim');
    }
    public function simpan()
    {
        $config['upload_path'] = './banner_upload/';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $config['max_size'] = 2048;
        $config['max_width'] = 1600;
        $config['max_height'] = 650;

        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $file_name = $this->upload->data();


        $data = array(
            'gambar' => $file_name['file_name'],
            'status' => $this->input->post('status')
        );

        $query = $this->db->insert('banner', $data);
        if ($query = true) {
            set_pesan('data berhasil disimpan.');
            redirect('banner');
        } else {
            set_pesan('gagal menyimpan perubahan');
            redirect('banner/edit');
        }
    }

    public function add()
    {
        $data['title'] = "Banner";
        $this->template->load('templates/dashboard', 'banner/add', $data);

        $data['title'] = "Banner";
        $this->template->load('templates/dashboard', 'banner/add', $data);

        $config['upload_path'] = './banner_upload/gambar1';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $config['max_size'] = 2048;
        $config['max_width'] = 1600;
        $config['max_height'] = 650;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar1')) {
        } else {

            $config['upload_path'] = './banner_upload/gambar2/';
            $config['allowed_types'] = 'jpeg|jpg|png|';
            $config['max_size'] = 2048;
            $config['max_width'] = 1600;
            $config['max_height'] = 650;
            $media1 = $this->upload->data();
            $inputFileName = './banner_upload/gambar2/' . $media1['file_name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar2')) {
            } else {

                $config['upload_path'] = './banner_upload/gambar3/';
                $config['allowed_types'] = 'jpeg|jpg|png|';
                $config['max_size'] = 2048;
                $config['max_width'] = 1600;
                $config['max_height'] = 650;
                $media2 = $this->upload->data();
                $inputFileName = './banner_upload/gambar3/' . $media2['file_name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar3')) {
                } else {

                    $media3 = $this->upload->data();
                    $inputFileName = './banner_upload/gambar3/' . $media3['file_name'];

                    $data = array(
                        'gambar1' => $media1['file_name'],
                        'gambar2' => $media2['file_name'],
                        'gambar3' => $media3['file_name'],

                    );
                    $save = $this->admin->insert('banner', $data);
                    if ($save > 0) {
                        set_pesan('data berhasil disimpan.');
                        redirect('banner');
                    } else {
                        set_pesan('data gagal disimpan', false);
                        redirect('banner/add');
                    }
                }
            }
        }
    }


    //EDIT
    public function edit($idBanner)
    {

        // $this->_validasi();
        $config['upload_path'] = './banner_upload/gambar1';
        $config['allowed_types'] = 'jpeg|jpg|png|';
        $config['max_size'] = 2048;
        $config['max_width'] = 1600;
        $config['max_height'] = 650;

        $this->load->library('upload', $config);



        if ($this->form_validation->run() == false) {
            $data['title'] = " banner";
            $data['banner'] = $this->admin->getBannerById($idBanner);
            $this->template->load('templates/dashboard', 'banner/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            if (empty($_FILES['gambar1']['name'])) {
                $insert = $this->admin->update('banner', 'id_banner', $input['id_banner'], $input);
                if ($insert) {
                    set_pesan('perubahan berhasil disimpan.');
                    redirect('banner');
                } else {
                    set_pesan('perubahan tidak disimpan.');
                    redirect('banner/edit');
                }
            } else {
                if ($this->upload->do_upload('gambar1') == false) {
                    echo $this->upload->display_errors();
                    die;
                } else {


                    $input['gambar1'] = $this->upload->data('file_name');
                    $update = $this->admin->update('banner', 'id_banner', $input['id_banner'], $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan.');
                        redirect('banner');
                    } else {
                        set_pesan('gagal menyimpan perubahan');
                        redirect('banner/edit');
                    }
                }
            }
        }
    }


    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('banner', 'id_banner', $id)) {
            set_pesan('data berhasil dihapus.');
            redirect('banner');
        } else {
            set_pesan('data gagal dihapus', false);
            redirect('banner');
        }
        redirect('banner');
    }
}
