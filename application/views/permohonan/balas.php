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

    $path = './email/' . $_FILES["balas_file"]["name"];
    move_uploaded_file($_FILES["balas_file"]["tmp_name"], $path);
    $message = '
  
    <div style="background-color: #009879;color: #ffffff;text-align: left;padding-top:1vh;padding-bottom:1vh;">
        <h2 align="center" style="font-family: sans-serif;">Berikut ini informasi balasan | PPID DINAS KESEHATAN KOTA CIMAHI</h2>
    </div>


    <table  width="100%" cellpadding="5" cellspacing="5" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); ">
    
        <tr>
            <td width="30%">Email anda</td>
            <td width="70%" style="color:white;">' . $_POST["email_balas"] . '</td>
        </tr>
        <tr style="background-color: #E9ECEF;color: black;text-align: left;">
            <td width="30%">Subject balasan:</td>
            <td width="70%">' . $_POST["subject"] . '</td>
        </tr>
        <tr>
            <td width="30%"> Pesan balasan</td>
            <td width="70%">' . $_POST["pesan"] . '</td>
        </tr>
        
    
    </table>
 ';


    require_once "assets/class/PHPMailer.php";
    require_once "assets/class/SMTP.php";
    require_once "assets/class/Exception.php";

    $mail = new PHPMailer;
    $to = $_POST["email_balas"];
    $DINKES = 'PPID | DINAS KESEHATAN KOTA CIMAHI';

    $mail->IsSMTP();         //Seting mailer untuk menggirim pesan menggunakan SMTP 
    $mail->Host = 'smtp.gmail.com'; //Setel host SMTP dari hosting Email , ini untuk Godaddy
    $mail->Port = '587';        //Menyetel port server SMTP default
    $mail->SMTPAuth = true;       //Mengatur otentikasi SMTP. Memanfaatkan variabel Nama Pengguna dan Kata Sandi dengan nilai True
    $mail->Username = 'gdvisuel777@gmail.com';     //Setel nama pengguna SMTP dengan email
    $mail->Password = 'wothltqzzrhaloib';     //Setel SMTP password
    $mail->SMTPSecure = 'tls';      //Menetapkan awalan koneksi. Pilihannya adalah "", "ssl" atau "tls"
    $mail->From = ($_POST["email_balas"]);     //Menyetel alamat email Dari untuk pesan
    $mail->FromName = ($DINKES);   //Menyetel nama Dari pesan
    $mail->AddAddress($to); //Menambahkan alamat "Kepada email yang diinputkan"
    $mail->WordWrap = 50;      //Menyetel pembungkusan kata di badan pesan ke sejumlah karakter tertentu
    $mail->IsHTML(true);       //Setel jenis pesan ke HTML
    $mail->AddAttachment($path);
    $mail->Subject = 'Balasan Permohonan informasi | PPID Dinkes KOTA CIMAHI';    //Mengatur Subjek pesan
    $mail->Body = $message;      //Badan pesan HTML atau teks biasa
    if ($mail->Send())         //Kirim Sebuah email. Mengembalikan nilai true pada keberhasilan atau false pada kesalahan
    {
        $message = '<div class="alert alert-success">Pesan anda Terkirim !!</div>';
        // unlink($path);
    } else {
        $message = '<div class="alert alert-danger">Pesan gagal terkirim , Silahkan cek kembali</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title; ?> | PPID DINKES KOTA CIMAHI</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="180x180" href="<?= base_url(); ?>assets/images/logofavicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/images/logofavicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/images/logofavicon.png">


    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/fonts.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- custom warna -->
    <link href="<?= base_url(); ?>assets/css/colors/colors.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/colors/colors.min.css" rel="stylesheet">

    <!-- Datepicker -->
    <link href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/gijgo/css/gijgo.min.css" rel="stylesheet">

    <style>
        #accordionSidebar,
        .topbar {
            z-index: 1;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary bg-gradient-light sidebar sidebar-light accordion shadow-sm" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex text-white align-items-center bg-dark justify-content-center" href="<?= base_url('dashboard'); ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url(); ?>assets/images/logoNavbar.png" alt="" style="width:30px;" class="d-inline-block align-text-top">
                </div>
                <div class="sidebar-brand-text mx-3">PPID DINAS KESEHATAN </div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Manajement Berita
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Berita</span>
                </a>
                <div id="collapseMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('banner'); ?>">Banner</a>

                    </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseMaster2" aria-expanded="true" aria-controls="collapseMaster2">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data informasi</span>
                </a>
                <div id="collapseMaster2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">

                        <a class="collapse-item" href="<?= base_url('i_berkala'); ?>">Informasi berkala</a>
                        <a class="collapse-item" href="<?= base_url('i_merta'); ?>">Informasi serta merta</a>
                        <a class="collapse-item" href="<?= base_url('i_saat'); ?>">Informasi setiap saat</a>
                        <a class="collapse-item" href="<?= base_url('i_private'); ?>">Informasi private</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Informasi
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('permohonan_informasi'); ?>">
                    <i class="fas fa-fw fa-download"></i>
                    <span>Permohonan informasi</span>
                </a>
            </li>


            <!-- Nav Item - Dashboard -->
            <hr class="sidebar-divider">


            <div class="sidebar-heading">
                Report
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('report'); ?>">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Laporan Permohonan </span>
                </a>
            </li>
            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Report
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('laporan'); ?>">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Cetak Laporan</span>
                </a>
            </li> -->

            <?php if (is_admin()) : ?>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Settings
                </div>

                <!-- Nav Item -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user'); ?>">
                        <i class="fas fa-fw fa-user-plus"></i>
                        <span>Management User</span>
                    </a>
                </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow-sm">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link bg-transparent d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars text-white"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small text-capitalize">
                                    Selamat datang , <?= userdata('nama'); ?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/avatar/<?= userdata('foto'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('profile'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <!-- content balasan -->

                    <div class="card mb-4">
                        <div class="card-body border-bottom-secondary">
                            <div class="row">
                                <div class="col">
                                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                        Balas permohonan informasi | PPID DINAS KESEHATAN KOTA CIMAHI
                                    </h4>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('permohonan_informasi') ?>" class="btn btn-sm btn-secondary btn-darken-2 btn-icon-split">
                                        <span class="icon">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text ">
                                            Kembali
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <!-- <?php foreach ($permohonan as $hub) : ?> -->

                            <?php echo form_open_multipart('permohonan_informasi/balas_tambah'); ?>
                            <div class="row ">
                                <div class="col-md-6">


                                    <h5 style="text-align: center;font-weight: 900;">DETAIL DATA PEMOHON</h5>
                                    <hr>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card shadow mb-4 border-bottom-secondary justify-content-center item-align" style="width: 250px;">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="<?= base_url() ?>permohonan/resume/<?= $detail->resume ?>" alt="" class="img-thumbnail rounded mb-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <table class="text-dark ml-5">
                                                <tr>
                                                    <td>Jenis</td>
                                                    <td>:</td>
                                                    <td><?= $detail->jenis ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td><?= $detail->nama ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td><?= $detail->alamat ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>:</td>
                                                    <td><?= $detail->jenis_kelamin ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Kecamatan</td>
                                                    <td>:</td>
                                                    <td><?= $detail->kecamatan ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Kelurahan</td>
                                                    <td>:</td>
                                                    <td><?= $detail->kelurahan ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Kabupaten</td>
                                                    <td>:</td>
                                                    <td><?= $detail->kab ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Provinsi</td>
                                                    <td>:</td>
                                                    <td><?= $detail->provinsi ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Pos</td>
                                                    <td>:</td>
                                                    <td><?= $detail->kodepos ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>:</td>
                                                    <td><?= $detail->email ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>No. HP</td>
                                                    <td>:</td>
                                                    <td><?= $detail->mobile ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>NIK</td>
                                                    <td>:</td>
                                                    <td><?= $detail->nik ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Tema</td>
                                                    <td>:</td>
                                                    <td><?= $detail->tema ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tujuan</td>
                                                    <td>:</td>
                                                    <td><?= $detail->tujuan ?> </td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <h5 style="text-align: center;font-weight: 900;">BALAS PERMOHONAN</h5>
                                    <hr>
                                    <?php print_r($message); ?>
                                    <!-- <div class="form-group">
                                        <label>Masukan nama anda</label>
                                        <input type="text" name="user_balas" class="form-control" placeholder="Masukan nama anda" required />
                                    </div> -->
                                    <div class="form-group">
                                        <input value="<?= $hub->id_pemohon ?>" type="hidden" name="id_pemohon" class="form-control" />
                                        <label>Email:</label>
                                        <input type="hidden" name="id_pemohon" value="<?= $hub->id_pemohon ?>">
                                        <input type="text" name="email_balas" class="form-control" readonly placeholder="Masukan Email" value="<?= $hub->email ?>" required />
                                    </div>
                                    <div class="form-group">

                                        <input type="hidden" name="user_balas" class="form-control" readonly placeholder="Masukan nama anda" value="<?= userdata('nama'); ?>" required />
                                    </div>


                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" class="form-control" placeholder="Masukan Subject" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea name="pesan" rows="9" placeholder="Masukan pesan andaa .." class="form-control" required></textarea>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="cek">Upload file</label>
                                        <input type="file" id="cek" name="cek" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg" />
                                        <small>*Upload Lampiran (Max : 2Mb) <br>File yang boleh diupload adalah doc , docx , pdf , jpg , jpeg , dan png .</small>
                                    </div> -->

                                    <br>

                                    <div class="form-group">
                                        <label>Masukan Judul File</label>
                                        <input type="text" name="judul_balas" class="form-control" placeholder="Masukan Judul file dokumen" required />
                                        <small>*beri tanda '-' jika data tidak diberikan.</small>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="balas_file">Upload file </label>
                                        <input type="file" id="balas_file" name="balas_file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg,.xlsx" />
                                        <small>*Upload Lampiran (Max : 2Mb) <br>File yang boleh diupload adalah doc , docx , pdf , jpg , jpeg ,xlsx, dan png .</small>
                                    </div>





                                    <div class="card-footer">

                                        <input type="submit" name="submit" value="Kirim" class="btn btn-success float-right" />
                                        <input type="reset" name="reset" value="Reset" class="btn btn-secondary btn-darken-2" />
                                    </div>

                                </div>

                            </div>

                            <?php echo form_close(); ?>
                            <!-- <?php endforeach; ?> -->

                        </div>
                    </div>

                    <!-- akhir content balasan -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-transparent">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PPID DINAS KESEHATAN PEMERINTAH KOTA CIMAHI <?= date('Y'); ?> &bull; <?= anchor('https://dinkes.cimahikota.go.id/', 'Dinas kesehatan kota cimahi'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" dibawah ini jika anda yakin ingin logout.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>






    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Datepicker -->
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/jszip/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="<?= base_url(); ?>assets/vendor/gijgo/js/gijgo.min.js"></script>
</body>

</html>