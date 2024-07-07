<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan_informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('permohonan');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Permohonan informasi";
        $data['permohonan'] = $this->admin->get('permohonan');
        $this->template->load('templates/dashboard', 'permohonan/data', $data);
    }


    public function detail($id)
    {
        $data['title'] = 'Detail data pemohon';
        $this->load->model('Admin_model');
        $detail = $this->admin->detail_data($id);
        $data['detail'] = $detail;
        // $data['permohonan'] = $this->admin->get('permohonan');
        $this->template->load('templates/dashboard', 'permohonan/detail', $data);
    }
    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->permohonan->download($id);
        $file = './permohonan/resume/' . $fileinfo['resume'];

        force_download($file, NULL);
    }
    // private function _config()
    // {
    //     $config['upload_path']          = './permohonan/';
    //     $config['allowed_types']        = 'gif|jpg|png|pdf|doc|json|csv';
    //     $config['max_size']             = 2048;
    //     $config['max_width']            = 10000;
    //     $config['max_height']           = 10000;

    //     $this->load->library('upload', $config);
    // }

    private function _validasi()
    {
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|numeric');
        $this->form_validation->set_rules('jk', 'Jk', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim');
        $this->form_validation->set_rules('kab', 'Kab', 'required');
        $this->form_validation->set_rules('resume', 'Resume', 'required|trim');
        $this->form_validation->set_rules('surat', 'Surat', 'required|trim');
    }

    public function add()
    {

        $this->_validasi();
        // $this->_config();
        $data['title'] = "Input Permohonan informasi";
        $this->template->load('templates/dashboard', 'permohonan/add', $data);

        $config['upload_path']          = './permohonan/resume';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|json|csv';
        $config['max_size']             = 2048;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('resume')) {
        } else {

            $config['upload_path']          = './permohonan/surat/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|doc|json|csv';
            $config['max_size']             = 2048;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
            $media1 = $this->upload->data();
            $inputFileName = './permohonan/surat/' . $media1['file_name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('surat')) {
            } else {

                $media2 = $this->upload->data();
                $inputFileName = './permohonan/surat/' . $media2['file_name'];

                //tanda pengenal 
                $resume = $this->upload->data();
                $resume = $resume['file_name'];
                //surat
                $surat = $this->upload->data();
                $surat =  $surat['file_name'];

                $tanggal_masuk = $this->input->post('tanggal_masuk');
                $jenis = $this->input->post('jenis', TRUE);
                $nama = $this->input->post('nama', TRUE);
                $alamat = $this->input->post('alamat');
                $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
                $kecamatan = $this->input->post('kecamatan', TRUE);
                $kelurahan = $this->input->post('kelurahan', TRUE);
                $kab = $this->input->post('kab', TRUE);
                $provinsi = $this->input->post('provinsi', TRUE);
                $kodepos = $this->input->post('kodepos', TRUE);
                $email = $this->input->post('email', TRUE);
                $mobile = $this->input->post('mobile', TRUE);
                $nik = $this->input->post('nik', TRUE);
                $tema = $this->input->post('tema', TRUE);
                $tujuan = $this->input->post('tujuan', TRUE);


                $data = array(
                    'tanggal_masuk' => $tanggal_masuk,
                    'jenis' => $jenis,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'jenis_kelamin' => $jenis_kelamin,
                    'kecamatan' => $kecamatan,
                    'kelurahan' => $kelurahan,
                    'kab' => $kab,
                    'provinsi' => $provinsi,
                    'kodepos' => $kodepos,
                    'email' => $email,
                    'mobile' => $mobile,
                    'nik' => $nik,
                    'resume' => $resume,
                    'tema' => $tema,
                    'tujuan' => $tujuan,



                );
                $save = $this->admin->insert('permohonan', $data);
                if ($save > 0) {
                    set_pesan('data berhasil disimpan.');
                    redirect('permohonan_informasi');
                } else {
                    set_pesan('data gagal disimpan', false);
                    redirect('permohonan_informasi/add');
                }
            }
        }
    }


    public function edit($id)
    {
        $where = array('id_pemohon' => $id);
        $data['title'] = "Edit data pemohon";
        $data['permohonan'] = $this->admin->edit_permohonan($where, 'permohonan')->result();
        $this->template->load('templates/dashboard', 'permohonan/edit', $data);

        // $this->_validasi();
        // $this->_config();

    }

    public function edit_aksi()
    {
        $id = $this->input->post('id_pemohon', TRUE);
        $jenis = $this->input->post('jenis', TRUE);
        $nama = $this->input->post('nama', TRUE);
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        $kecamatan = $this->input->post('kecamatan', TRUE);
        $kelurahan = $this->input->post('kelurahan', TRUE);
        $kab = $this->input->post('kab', TRUE);
        $provinsi = $this->input->post('provinsi', TRUE);
        $kodepos = $this->input->post('kodepos', TRUE);
        $email = $this->input->post('email', TRUE);
        $mobile = $this->input->post('mobile', TRUE);
        $nik = $this->input->post('nik', TRUE);
        $tema = $this->input->post('tema', TRUE);
        $tujuan = $this->input->post('tujuan', TRUE);

        $data = array(
            'jenis' => $jenis,
            'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'kab' => $kab,
            'provinsi' => $provinsi,
            'kodepos' => $kodepos,
            'email' => $email,
            'mobile' => $mobile,
            'nik' => $nik,
            'tema' => $tema,
            'tujuan' => $tujuan,
        );
        $where = array(
            'id_pemohon' => $id
        );

        $this->admin->update_permohonan($where, $data, 'permohonan');
        set_pesan('data berhasil disimpan.');
        redirect('permohonan_informasi/');
    }

    public function balas($id)
    {
        $detail = $this->admin->detail_data($id);
        $data['detail'] = $detail;

        $where = array('id_pemohon' => $id);
        $data['title'] = "Balas permohonan informasi";
        $data['permohonan'] = $this->admin->balas($where, 'permohonan')->result();

        $this->load->view('permohonan/balas', $data);
    }

    public function balas_tambah()
    {
        $this->_validasi();
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|json|csv';
        $config['max_size']             = 2048;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        $detail = $this->admin->detail_data();
        $data['detail'] = $detail;

        $data['title'] = "Balas permohonan informasi";
        // $data['permohonan'] = $this->admin->get('permohonan');
        $this->load->view('permohonan/balas', $data);



        if (!$this->upload->do_upload('balas_file')) {
        } else {

            $balas_file = $this->upload->data();
            $balas_file = $balas_file['file_name'];


            $id = $this->input->post('id_pemohon', TRUE);
            $email = $this->input->post('email_balas', TRUE);
            $subject = $this->input->post('subject', TRUE);
            $pesan = $this->input->post('pesan', TRUE);
            $judul_balas = $this->input->post('judul_balas', TRUE);
            $user_balas = $this->input->post('user_balas', TRUE);


            $data = array(
                'email_balas' => $email,
                'subject' => $subject,
                'pesan' => $pesan,
                'judul_balas' => $judul_balas,
                'user_balas' => $user_balas,
                'balas_file' => $balas_file,
            );
            $where = array(
                'id_pemohon' => $id
            );

            $this->admin->update_permohonan($where, $data, 'permohonan');
            set_pesan('Pesan terkirim dan data tersimpan');
            redirect('permohonan_informasi');
        }


        if ($this->form_validation->run() == false) {


            $balas_file = $this->upload->data();
            $balas_file = $balas_file['file_name'];

            $id = $this->input->post('id_pemohon', TRUE);
            $email = $this->input->post('email_balas', TRUE);
            $subject = $this->input->post('subject', TRUE);
            $pesan = $this->input->post('pesan', TRUE);
            $judul_balas = $this->input->post('judul_balas', TRUE);
            $user_balas = $this->input->post('user_balas', TRUE);


            $data = array(
                'email_balas' => $email,
                'subject' => $subject,
                'pesan' => $pesan,
                'judul_balas' => $judul_balas,
                'user_balas' => $user_balas,
                'balas_file' => $balas_file
            );
            $where = array(
                'id_pemohon' => $id
            );

            $this->admin->update_permohonan($where, $data, 'permohonan');
            set_pesan('Pesan terkirim');
            redirect('permohonan_informasi');
        } else {
            $input = $this->input->post(null, true);
            $save = $this->db->update('permohonan', $input);
            if ($save) {
                set_pesan('Data disimpan');
                redirect('permohonan_informasi');
            } else {
                set_pesan('Data gagal disimpan', false);
                redirect('permohonan_informasi/balas');
            }
        }





        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|json|csv';
        $config['max_size']             = 2048;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
        } else {
            //tanda pengenal 
            $file = $this->upload->data();
            $file = $file['file_name'];

            $email = $this->input->post('email_balas', TRUE);
            $subject = $this->input->post('subject', TRUE);
            $pesan = $this->input->post('pesan', TRUE);


            $data = array(
                'email_balas' => $email,
                'subject' => $subject,
                'pesan' => $pesan,
                'file' => $file,
            );
            $save = $this->db->insert('permohonan', $data);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('permohonan_informasi');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('permohonan_informasi/balas');
            }
        }
    }

    public function balas_aksi()
    {
        $to_email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $config = [
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => 'gdvisuel777@gmail.com',
            'smtp_pass' => 'wothltqzzrhaloib',
            'smtp_post' =>   465,
            'crlf'  => "\r\n",
            'newline' => "\r\n"

        ];
        $this->load->library('email', $config);
        $this->email->from("PPID DINKES KOTA CIMAHI");
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);


        if ($this->email->send()) {
            echo 'terkirim';
        } else {
            echo 'gagal';
        }
    }


    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('permohonan', 'id_pemohon', $id)) {
            set_pesan('data berhasil dihapus.');
            redirect('permohonan_informasi');
        } else {
            set_pesan('data gagal dihapus', false);
            redirect('permohonan_informasi');
        }
        redirect('permohonan_informasi');
    }
}
