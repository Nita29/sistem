<?php
class P_informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url', 'form', 'download');
        $this->load->model('permohonan');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Permohonan Informasi';
        $data['permohonan'] = $this->admin->get('permohonan');
        $this->load->view("permohonan", $data);
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

    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->files_model_berkala->download($id);
        $file = './permohonan/' . $fileinfo['resume'];
        force_download($file, NULL);
    }

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
        $data['title'] = "permohonan informasi";
        $this->load->view("permohonan", $data);

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
                $data = array(
                    'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                    'jenis' => $this->input->post('jenis'),
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kab' => $this->input->post('kab'),
                    'provinsi' => $this->input->post('provinsi'),
                    'kodepos' => $this->input->post('kodepos'),
                    'email' => $this->input->post('email'),
                    'mobile' => $this->input->post('mobile'),
                    'nik' => $this->input->post('nik'),
                    'tema' => $this->input->post('tema'),
                    'tujuan' => $this->input->post('tujuan'),
                    'resume' => $media1['file_name'],
                    'surat' => $media2['file_name'],

                );
                $save = $this->admin->insert('permohonan', $data);
                if ($save > 0) {
                    set_pesan('Permohonan diproses , Harap tunggu , dan cek email beberapa waktu .');
                    redirect('P_informasi');
                } else {
                    set_pesan('Permohonan gagal ,silahkan cek kembali', false);
                    redirect('P_informasi/add');
                }
            }
        }
















        // --------------------------------------------------------------------------------



        // if (!$this->upload->do_upload('surat')) {
        // } else {
        //     //tanda pengenal 
        //     $resume = $this->upload->data();
        //     $resume = $resume['file_name'];
        //     $surat = $this->upload->data();
        //     $surat = $surat['file_name'];

        //     $tanggal_masuk = $this->input->post('tanggal_masuk', TRUE);
        //     $jenis = $this->input->post('jenis', TRUE);
        //     $nama = $this->input->post('nama', TRUE);
        //     $alamat = $this->input->post('alamat');
        //     $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        //     $kecamatan = $this->input->post('kecamatan', TRUE);
        //     $kelurahan = $this->input->post('kelurahan', TRUE);
        //     $kab = $this->input->post('kab', TRUE);
        //     $provinsi = $this->input->post('provinsi', TRUE);
        //     $kodepos = $this->input->post('kodepos', TRUE);
        //     $email = $this->input->post('email', TRUE);
        //     $mobile = $this->input->post('mobile', TRUE);
        //     $nik = $this->input->post('nik', TRUE);
        //     $tema = $this->input->post('tema', TRUE);
        //     $tujuan = $this->input->post('tujuan', TRUE);


        //     $data = array(
        //         'tanggal_masuk' => $tanggal_masuk,
        //         'jenis' => $jenis,
        //         'nama' => $nama,
        //         'alamat' => $alamat,
        //         'jenis_kelamin' => $jenis_kelamin,
        //         'kecamatan' => $kecamatan,
        //         'kelurahan' => $kelurahan,
        //         'kab' => $kab,
        //         'provinsi' => $provinsi,
        //         'kodepos' => $kodepos,
        //         'email' => $email,
        //         'mobile' => $mobile,
        //         'nik' => $nik,
        //         'resume' => $resume,
        //         'surat' => $surat,
        //         'tema' => $tema,
        //         'tujuan' => $tujuan,
        //     );
        //     $save = $this->db->insert('permohonan', $data);
        //     if ($save) {
        //         set_pesan('Permohonan diproses , Harap tunggu , dan cek email beberapa waktu .');
        //         redirect('p_informasi');
        //     } else {
        //         set_pesan('Permohonan gagal ,silahkan cek kembali', false);
        //         redirect('p_informasi/add');
        //     }
        // }

        // if ($this->form_validation->run() == false) {

        //     $resume = $this->upload->data();
        //     $resume = $resume['file_name'];
        //     $surat = $this->upload->data();
        //     $surat = $surat['file_name'];

        //     $tanggal_masuk = $this->input->post('tanggal_masuk');
        //     $jenis = $this->input->post('jenis', TRUE);
        //     $nama = $this->input->post('nama', TRUE);
        //     $alamat = $this->input->post('alamat');
        //     $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        //     $kecamatan = $this->input->post('kecamatan', TRUE);
        //     $kelurahan = $this->input->post('kelurahan', TRUE);
        //     $kab = $this->input->post('kab', TRUE);
        //     $provinsi = $this->input->post('provinsi', TRUE);
        //     $kodepos = $this->input->post('kodepos', TRUE);
        //     $email = $this->input->post('email', TRUE);
        //     $mobile = $this->input->post('mobile', TRUE);
        //     $nik = $this->input->post('nik', TRUE);
        //     $tema = $this->input->post('tema', TRUE);
        //     $tujuan = $this->input->post('tujuan', TRUE);


        //     $data = array(
        //         'tanggal_masuk' => $tanggal_masuk,
        //         'jenis' => $jenis,
        //         'nama' => $nama,
        //         'alamat' => $alamat,
        //         'jenis_kelamin' => $jenis_kelamin,
        //         'kecamatan' => $kecamatan,
        //         'kelurahan' => $kelurahan,
        //         'kab' => $kab,
        //         'provinsi' => $provinsi,
        //         'kodepos' => $kodepos,
        //         'email' => $email,
        //         'mobile' => $mobile,
        //         'nik' => $nik,
        //         'resume' => $resume,
        //         'surat' => $surat,
        //         'tema' => $tema,
        //         'tujuan' => $tujuan,
        //     );
        //     $save = $this->db->insert('permohonan', $data);
        // } else {
        //     $input = $this->input->post(null, true);
        //     $save = $this->db->insert('permohonan', $input);
        //     if ($save) {
        //         set_pesan('Permohonan diproses , Harap tunggu , dan cek email beberapa waktu.');
        //         redirect('permohonan');
        //     } else {
        //         set_pesan('Permohonan gagal ,silahkan cek kembali', false);
        //         redirect('permohonan/add');
        //     }
        // }








        // ------------------------------------------------------------------









        // if (!$this->upload->do_upload('resume')) {
        //     echo "gagal";
        // } else {
        //     $resume = $this->upload->data();
        //     $resume = $resume['file_name'];

        //     $jenis = $this->input->post('jenis', TRUE);
        //     $nama = $this->input->post('nama', TRUE);
        //     $alamat = $this->input->post('alamat', TRUE);
        //     $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        //     $kecamatan = $this->input->post('kecamatan', TRUE);
        //     $kelurahan = $this->input->post('kelurahan', TRUE);
        //     $kab = $this->input->post('kab', TRUE);
        //     $provinsi = $this->input->post('provinsi', TRUE);
        //     $kodepos = $this->input->post('kodepos', TRUE);
        //     $email = $this->input->post('email', TRUE);
        //     $mobile = $this->input->post('mobile', TRUE);
        //     $nik = $this->input->post('nik', TRUE);
        //     $tema = $this->input->post('tema', TRUE);
        //     $tujuan = $this->input->post('tujuan', TRUE);


        //     $data = array(
        //         'jenis' => $jenis,
        //         'nama' => $nama,
        //         'alamat' => $alamat,
        //         'jenis_kelamin' => $jenis_kelamin,
        //         'kecamatan' => $kecamatan,
        //         'kelurahan' => $kelurahan,
        //         'kab' => $kab,
        //         'provinsi' => $provinsi,
        //         'kodepos' => $kodepos,
        //         'email' => $email,
        //         'mobile' => $mobile,
        //         'nik' => $nik,
        //         'resume' => $resume,
        //         'tema' => $tema,
        //         'tujuan' => $tujuan,
        //     );
        //     $this->db->insert('permohonan', $data);
        // }






        // --------------------------------------------------------------------










        // if ($this->form_validation->run() == false) {


        //     $jenis = $this->input->post('jenis', TRUE);
        //     $nama = $this->input->post('nama', TRUE);
        //     $alamat = $this->input->post('alamat');
        //     $jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
        //     $kecamatan = $this->input->post('kecamatan', TRUE);
        //     $kelurahan = $this->input->post('kelurahan', TRUE);
        //     $kab = $this->input->post('kab', TRUE);
        //     $provinsi = $this->input->post('provinsi', TRUE);
        //     $kodepos = $this->input->post('kodepos', TRUE);
        //     $email = $this->input->post('email', TRUE);
        //     $mobile = $this->input->post('mobile', TRUE);
        //     $nik = $this->input->post('nik', TRUE);
        //     // $resume = $this->input->post('resume', TRUE);
        //     $tema = $this->input->post('tema', TRUE);
        //     $tujuan = $this->input->post('tujuan', TRUE);

        //     $data = array(
        //         'jenis' => $jenis,
        //         'nama' => $nama,
        //         'alamat' => $alamat,
        //         'jenis_kelamin' => $jenis_kelamin,
        //         'kecamatan' => $kecamatan,
        //         'kelurahan' => $kelurahan,
        //         'kab' => $kab,
        //         'provinsi' => $provinsi,
        //         'kodepos' => $kodepos,
        //         'email' => $email,
        //         'mobile' => $mobile,
        //         'nik' => $nik,
        //         // 'resume' => $resume,
        //         'tema' => $tema,
        //         'tujuan' => $tujuan,

        //     );
        //     $this->admin->insert('permohonan', $data);

        //     $this->load->view("permohonan", $data);
        // } else {
        //     $input = $this->input->post(null, true);
        //     $save = $this->admin->insert('permohonan', $input);
        //     if ($save) {
        //         set_pesan('data berhasil disimpan.');
        //         redirect('permohonan');
        //     } else {
        //         set_pesan('data gagal disimpan', false);
        //         redirect('permohonan/add');
        //     }
        // }
    }
}
