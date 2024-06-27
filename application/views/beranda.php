<!-- jumbro tron slider -->


<section class="jumbotron text-center slider">



    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
            <?php foreach ($banner as $j) : ?>
                <div class="carousel-item active">
                    <img src="<?= base_url('banner_upload/') . $j['gambar'] ?>" class="d-block w-100" alt="Banner">
                </div>
                <!-- <div class="carousel-item">
                    <img src="<?= base_url('banner_upload/gambar2/') . $j['gambar2'] ?>" class="d-block w-100" alt="Banner 2">
                </div> -->
                <!-- <div class="carousel-item">
                    <img src="<?= base_url('banner_upload/gambar3/') . $j['gambar3'] ?>" class="d-block w-100" alt="Banner 3">
                </div> -->
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</section>
<!-- akhir jumbo tron slider-->



<!-- content -->
<section id="content">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-md-3">
                <h2>PPID</h2>
                <hr>
            </div>
            <div class="col-md-9 ">
                <h3 style="text-align: start;">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</h3>
                <p class="info" style="text-align: start;">DINAS KESEHATAN<span>&bull;</span> KOTA CIMAHI</p>
                <p>Sebagai bidang Dinas kesehatan lahirnya Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik (UU KIP), Dinas Kesehatan kota cimahi hadir sebagai Badan Publik yang mendukung dan berkomitmen terhadap pelaksanaan Keterbukaan Informasi Publik di masyarakat.. Dinas Kesehatan terus berupaya untuk menjaga momentum keterbukaan informasi di masyarakat. Oleh karena itu, PPID Dinas Kesehatan bersungguh-sungguh untuk dapat :<br>
                    1. Memberikan pelayanan informasi yang cepat dan tepat waktu <br>
                    2. Memberikan kemudahan dalam mendapatkan informasi publik bidang dinas kesehatan yang diperlukan dengan murah dan sederhana <br>
                    3. Menyediakan dan memberikan informasi publik yang akurat, benar, dan tidak menyesatkan <br>
                    4. Menyediakan daftar informasi publik untuk informasi yang wajib disediakan dan diumumkan<br>
                    5. Menjamin penggunaan seluruh informasi publik dan fasilitasi pelayanan sesuai dengan ketentuan dan tata tertib yang berlaku <br>
                    6. Menyiapkan ruang dan fasilitas yang nyaman dan tertata baik <br>
                    7. Merespon dengan cepat permintaan informasi dan keberatan atas informasi publik yang disampaikan baik langsung maupun melalui media<br>
                    8. Menyiapkan petugas informasi yang berdedikasi dan siap melayani <br>
                    9. Melakukan pengawasan internal dan evaluasi kinerja pelaksana Seiring dengan perkembangan organisasi di dinas Kesehatan.<br>

                    <br><br>
                <h5> Informasi dan Informasi Publik</h5><br>
                <p><b>Informasi</b> adalah keterangan, pernyataan, gagasan, dan tanda-tanda yang mengandung nilai, makna, dan pesan, baik data, fakta, maupun penjelasannya yang dapat dilihat, didengar, dan dibaca yang disajikan dalam berbagai kemasan dan format sesuai dengan perkembangan teknologi informasi dan komunikasi secara elektronik atau non elektronik.<br>
                    <b>Informasi Publik </b>adalah informasi yang dihasilkan, disimpan, dikelola, dikirim, dan/ atau diterima oleh suatu badan publik yang berkaitan dengan penyelenggara dan penyelenggaraan negara dan/atau penyelenggara dan penyelenggaraan badan publik lainnya yang sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik serta informasi lain yang berkaitan dengan kepentingan publik.
                </p>

                </p>
            </div>
        </div>

    </div>



</section>

<!-- akhir content -->


<!-- video -->
<section id="video">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-md-12">
                <h2 style="font-family: 'Poppins' ;font-weight: 600 ;">VIDEO PPID - DINAS KESEHATAN KOTA CIMAHI</h2>

                <br>
                <div class="iframe-container">
                    <iframe width="760" height="515" src="https://www.youtube.com/embed/l-lPm9Kaq34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>


        </div>
    </div>

    </div>



</section>

<!-- akhir video -->



<!-- proses permohonan -->
<section id="proses">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-md-12">
                <h3 style="font-family: 'Poppins' ;font-weight: 600 ;">LANGKAH PERMOHONAN INFORMASI</h3>

            </div>

        </div>

        <div class="row">
            <div class="col-md-3 sm-12">
                <img src="<?= base_url(); ?>assets/images/1.png" alt="">
                <p style="text-align: justify;">Pemohon informasi melakukan scan barcode / juga dapat melalui website dan memilih menu permohonan informasi untuk mengisi form permohonan</p>
            </div>

            <div class="col-md-3 sm-12">
                <img src="<?= base_url(); ?>assets/images/2.png" alt="">
                <p style="text-align: justify;">Pemohon informasi mengisi form secara online melalui website ,di isi dengan benar dan sesuai ketentuan,setelah mengisi form pemohon menunggu beberapa waktu untuk mendapatkan balasan.</p>
            </div>

            <div class="col-md-3 sm-12">
                <img src="<?= base_url(); ?>assets/images/3.png" alt="">
                <p style="text-align: justify;"> Setelah mengisi, Pemohon informasi akan mendapatkan balasan melalui email informasi yang diminta terkirim pada email yang didaftarkan </p>
            </div>

            <div class="col-md-3 sm-12">
                <img src="<?= base_url(); ?>assets/images/4.png" alt="">
                <p style="text-align: justify;">Pemohon tidak menerima informasi , jika informasi yang diminta adalah informasi yang dikecualikan sesuai dengan UU NO .14 2008 ( tentang keterbukaan informasi publik )</p>
            </div>
        </div>



</section>

<!-- akhir proses permohonan -->
<!-- jumlah permohonan informasi -->
<section id="visitor">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-md-12">
                <h2 style="font-family: 'Poppins' ;font-weight: 600 ;">JUMLAH PERMOHONAN INFORMASI</h2>

            </div>

        </div>
        <div class="row text-center mb-4">
            <div class="col-md-12">

                <h1><?= $permohonan; ?></h1>

            </div>

        </div>
</section>
<!-- akhir jumlah permohonan informasi -->