<div class="row">
    <div class="col-md-8">
        <div class="card shadow mb-4 border-bottom-secondary">
            <div class="card-body">
                <div class="col-auto">
                    <a href="<?= base_url('permohonan_informasi') ?>" class="btn btn-sm btn-secondary btn-darken-2 btn-icon-split">
                        <span class="icon">
                            <i class="fa fa-arrow-left"></i>
                        </span>
                        <span class="text">
                            Kembali
                        </span>
                    </a>
                </div>
                <br>
                <hr>
                <table class="text-dark mt-3">
                    <h3 style="text-align: center;font-weight:900;">DATA PEMOHON</h3>
                    <hr>
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
                <br>
                <div class="card shadow mb-4  mt-5">
                    <div class="card-body ">
                        <h3 style="text-align: center;font-weight:900;">BALASAN INFORMASI</h3>
                        <hr>
                        <table class="text-dark mt-3">

                            <tr>
                                <td>Subject balasan </td>
                                <td>: </td>
                                <td><?= $detail->subject ?></td>
                            </tr>
                            <tr>
                                <td>Pesan balasan </td>
                                <td>: </td>
                                <td><?= $detail->pesan ?></td>
                            </tr>
                            <tr>
                                <td>File balasan </td>
                                <td>: </td>
                                <td><?= $detail->judul_balas ?></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="row">
            <div class="col-md-2">
                <div class="card shadow mb-4 border-bottom-secondary" style="width: 250px;">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>permohonan/resume/<?= $detail->resume ?>" alt="" class="img-thumbnail rounded mb-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="card shadow mb-4 border-bottom-secondary" style="width: 250px;">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>permohonan/surat/<?= $detail->surat ?>" alt="" class="img-thumbnail rounded mb-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">

    </div>
</div>