<?php


//phpmail
use PHPMailer\PHPMailer\PHPMailer;

$message = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {



    $path = './permohonan/' . $_FILES[""]["name"];
    move_uploaded_file($_FILES[""]["tmp_name"],  $path);


    $message = '
    <div style="background-color: #009879;color: #ffffff;text-align: left;padding-top:1vh;padding-bottom:1vh;">
        <h2 align="center" style="font-family: sans-serif;">PERMOHONAN INFORMASI DETAIL | PPID DINAS KESEHATAN KOTA CIMAHI</h2>
    </div>
    
    <table  width="100%" cellpadding="5" cellspacing="5" style="border-collapse: collapse;margin: 25px 0;font-size: 0.9em;font-family: sans-serif;min-width: 400px;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); ">
    
        <tr>
            <td width="30%">Jenis Pemohon</td>
            <td width="70%">' . $_POST["jenis"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">Nama lembaga/organisasi/individu/mahasiswa :</td>
            <td width="70%">' . $_POST["nama"] . '</td>
        </tr>
        <tr>
            <td width="30%">Jenis kelamin :</td>
            <td width="70%">' . $_POST["jenis_kelamin"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">Alamat</td>
            <td width="70%">' . $_POST["alamat"] . '</td>
        </tr>
        <tr>
            <td width="30%">Kecamatan</td>
            <td width="70%">' . $_POST["kecamatan"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">Kelurahan</td>
            <td width="70%">' . $_POST["kelurahan"] . '</td>
        </tr>
        <tr>
            <td width="30%">Kab / Kota</td>
            <td width="70%">' . $_POST["kab"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">Provinsi</td>
            <td width="70%">' . $_POST["provinsi"] . '</td>
        </tr>
        <tr >
            <td width="30%">Kode Pos</td>
            <td width="70%">' . $_POST["kodepos"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">Email </td>
            <td width="70%">' . $_POST["email"] . '</td>
        </tr>
        <tr>
            <td width="30%">No. Telp</td>
            <td width="70%">' . $_POST["mobile"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">NIK</td>
            <td width="70%">' . $_POST["nik"] . '</td>
        </tr>
        
        <tr>
            <td width="30%">Tema</td>
            <td width="70%">' . $_POST["tema"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">Tujuan permohonan</td>
            <td width="70%">' . $_POST["tujuan"] . '</td>
        </tr>
    </table>
    <div style="background-color: #6C757D;color: #ffffff;text-align: left;padding-top:1vh;padding-bottom:4vh;">
        <h5 align="center" style="font-family: sans-serif;">Silahkan Cek Website PPID DINAS KESEHATAN KOTA CIMAHI untuk informasi lebih lengkap !!!!<br>Copyright &copy; 2022 | PPID Dinas Kesehatan Kota Cimahi All rights reserved &bull; <a href="https://dinkes.cimahikota.go.id/">DINAS KESEHATAN KOTA CIMAHI</a></h5>
        
    </div>
 ';


    require_once "assets/class/PHPMailer.php";
    require_once "assets/class/SMTP.php";
    require_once "assets/class/Exception.php";

    $mail = new PHPMailer;


    $mail->IsSMTP();        //Seting mailer untuk menggirim pesan menggunakan SMTP 
    $mail->Host = 'smtp.gmail.com';  //Setel host SMTP dari hosting Email , ini untuk Godaddy
    $mail->Port = '587';        //Menyetel port server SMTP default
    $mail->SMTPAuth = true;       //Mengatur otentikasi SMTP. Memanfaatkan variabel Nama Pengguna dan Kata Sandi dengan nilai True
    $mail->Username = 'gdvisuel777@gmail.com';     //Setel nama pengguna SMTP dengan email 
    $mail->Password = 'wothltqzzrhaloib';     //Setel SMTP password
    $mail->SMTPSecure = 'tls';       //Menetapkan awalan koneksi. Pilihannya adalah "", "ssl" atau "tls"
    $mail->From = $_POST["email"];     //Menyetel alamat email Dari untuk pesan
    $mail->FromName = $_POST["nama"];    //Menyetel nama Dari pesan
    $mail->AddAddress('gdvisuel777@gmail.com');  //Menambahkan alamat "Kepada email yang diinputkan"
    $mail->WordWrap = 50;       //Menyetel pembungkusan kata di badan pesan ke sejumlah karakter tertentu
    $mail->IsHTML(true);       //Setel jenis pesan ke HTML
    $mail->AddAttachment($path);
    $mail->Subject = 'Permohonan informasi | PPID Dinkes KOTA CIMAHI';    //Mengatur Subjek pesan
    $mail->Body = $message;       //Badan pesan HTML atau teks biasa
    if ($mail->Send())        //Kirim Sebuah email. Mengembalikan nilai true pada keberhasilan atau false pada kesalahan
    {
        $message = '<div class="alert alert-success">Permohonan diproses , Harap tunggu , dan cek email beberapa waktu</div>';
        unlink($path);
    } else {
        $message = '<div class="alert alert-danger">Permohonan Gagal , Silahkan cek kembali</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Permohonan informasi | PPID DINKES Kota cimahi</title>

    <!-- Bootstrap CSS -->
    <link href="<?= site_url(); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="180x180" href="<?= base_url(); ?>assets/images/logofavicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/images/logofavicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/images/logofavicon.png">

    <!-- boostrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css">

    <!-- script -->
    <script src="<?= site_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>




    <!-- mycss -->

    <link href="<?= base_url(); ?>assets/css/styleKu.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fontello/css/fontello.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fonts.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/permohonan.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/media-queries.css"> -->



    <style type="text/css">
        .justify {
            text-align: justify;
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand h2" href="#">
                <img src="<?= base_url(); ?>assets/images/ppid.png" alt="" style="width:80px;" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href=" <?php echo site_url('beranda'); ?>">Beranda</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href=" <?php echo site_url('regulasi'); ?>">Regulasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi publik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href=" <?php echo site_url('InformasiPublikBerkala'); ?>">Informasi publik secara berkala</a></li>
                            <li><a class="dropdown-item" href=" <?php echo site_url('InformasiPublikSS'); ?>">informasi publik setiap saat</a></li>
                            <li><a class="dropdown-item" href=" <?php echo site_url('InformasiPublikSM'); ?>">informasi publik serta merta</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('P_informasi'); ?>">Permohonan informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('FAQ'); ?>">FAQ</a>
                    </li>
                    <!-- <li class="log">
                        <button type="button" class="btn btn-success" href="#">Login</button>
                    </li> -->
            </div>
        </div>


    </nav>
    <!-- akhir navar -->


    <div class="container permohonan">
        <div class="row">
            <div class="col-md-8" style="margin:0 auto; float:none;padding-top:90px;">
                <h2 align="center">Pendaftaran permohonan</h2>
                <hr>
                <h6 align="center">Harap diisi form dengan benar!</h6><br />
                <p class="justify">Jika Anda tidak menemukan informasi yang Anda butuhkan pada halaman Daftar Informasi Publik atau file tidak dapat di unduh, silahkan gunakan form di bawah ini untuk meminta informasi serta dilengkapi dengan IDENTITAS diri/kelompok. Khusus permohonan informasi yang mengatasnamakan kelompok/organisasi agar menyertakan nomor ijin resmi pendirian organisasi. Demi keamanan dan kenyamanan permohonan dan penggunaan informasi, PPID DINAS KESEHATAN hanya akan memproses permohonan informasi dari pemohon yang mengisi identitas diri lengkap dan resmi, Setelah semua data terisi akan diproses & Silahkan menunggu balasan informasi yang diminta beberapa waktu ...</p>

                <br>
                <?php print_r($message); ?>
                <?= $this->session->flashdata('pesan'); ?>
                <?php echo form_open_multipart('P_informasi/add'); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input value="<?= set_value('tanggal_masuk', date('Y-m-d')); ?>" name="tanggal_masuk" id="tanggal_masuk" type="text" class="form-control" readonly placeholder="Tanggal Masuk..." required>
                        </div>

                        <div class="form-group">
                            <label>Jenis Pemohon</label>
                            <select name="jenis" class="form-control" required>
                                <option value="<?= set_value('jenis'); ?>">Pilih kategori</option>
                                <option name="perorangan" value="Perorangan">Perorangan</option>
                                <option name="organisasi" value="Instansi/Organisasi">Instansi/Organisasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama lembaga/organisasi/individu/mahasiswa :</label>
                            <input type="text" name=" nama" class="form-control" placeholder="Masukan nama" required />
                        </div>


                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" placeholder="Masukan alamat anda" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Pilih jenis kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                            <span><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</span>

                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" placeholder="Masukan Kecamatan" required />
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control" placeholder="Masukan Kelurahan" required />
                        </div>
                        <div class="form-group">
                            <label>Kab/kota</label>
                            <input type="text" name="kab" class="form-control" placeholder="Masukan Kab/kota" required />
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select name="provinsi" class="form-control" required>
                                <option value="">Pilih kategori</option>
                                <option value="ACEH">ACEH</option>
                                <option value="SUMATERA UTARA">SUMATERA UTARA</option>
                                <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                                <option value="RIAU">RIAU</option>
                                <option value="JAMBI">JAMBI</option>
                                <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                                <option value="BENGKULU">BENGKULU</option>
                                <option value="LAMPUNG">LAMPUNG</option>
                                <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                                <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                                <option value="DKI JAKARTA">DKI JAKARTA</option>
                                <option value="JAWA BARAT">JAWA BARAT</option>
                                <option value="JAWA TENGAH">JAWA TENGAH</option>
                                <option value="DAERAH ISTIMEWA YOGYAKARTA">DAERAH ISTIMEWA YOGYAKARTA</option>
                                <option value="JAWA TIMUR">JAWA TIMUR</option>
                                <option value="BANTEN">BANTEN</option>
                                <option value="BALI">BALI</option>
                                <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                                <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                                <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                                <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                                <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                                <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                                <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                                <option value="SULAWESI UTARA">SULAWESI UTARA</option>
                                <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                                <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                                <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                                <option value="GORONTALO">GORONTALO</option>
                                <option value="SULAWESI BARAT">SULAWESI BARAT</option>
                                <option value="MALUKU">MALUKU</option>
                                <option value="MALUKU UTARA">MALUKU UTARA</option>
                                <option value="PAPUA">PAPUA</option>
                                <option value="PAPUA BARAT">PAPUA BARAT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="surat">Upload Surat</label>
                            <input type="file" id="surat" name="surat" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg" required />
                            <small>*Upload Lampiran Tanda Pengenal (Max : 2Mb) <br>File yang boleh diupload adalah doc , docx , pdf , jpg , jpeg , dan png .</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kode Pos</label>
                            <input type="text" name="kodepos" class="form-control" placeholder="Masukan Kode pos" required />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukan email" required />
                        </div>

                        <div class="form-group">
                            <label>No telp</label>
                            <input type="text" name="mobile" placeholder="Masukan no telp" class="form-control" pattern="\d*" required />
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" placeholder="Masukan No NIK" class="form-control" pattern="\d*" required />
                        </div>
                        <div class="form-group">
                            <label for="resume">Upload KTP/tanda pengenal</label>
                            <input type="file" id="resume" name="resume" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg" required />
                            <small>*Upload Lampiran Tanda Pengenal (Max : 2Mb) <br>File yang boleh diupload adalah doc , docx , pdf , jpg , jpeg , dan png .</small>
                        </div>
                        <div class="form-group">
                            <label>Tema</label>
                            <textarea name="tema" placeholder="Masukan tema" class="form-control" required rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tujuan permohonan informasi</label>
                            <textarea name="tujuan" placeholder="Masukan tujuan disini" class="form-control" required rows="12"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success" />
                        </div>

                    </div>
                    <?php echo form_close(); ?>
                    <p>Formulir juga dapat di download di <a href="<?php echo site_url('Formulir'); ?>">[ DOWNLOAD FORMULIR ]</a><a href="<?php echo site_url('Panduan_pemohon'); ?>">[ DOWNLOAD PANDUAN ]</a></p>




                </div>
            </div>
        </div>





        <!-- script -->
        <script src="<?= base_url(); ?>assets/js/jquery.flexslider.js"></script>
        <script src="<?= base_url(); ?>assets/js/waypoints.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.fittext.js"></script>
        <script src="<?= base_url(); ?>assets/js/magnific-popup.js"></script>
        <script src="<?= base_url(); ?>assets/js/init.js"></script>


        <!-- js boostrap -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>