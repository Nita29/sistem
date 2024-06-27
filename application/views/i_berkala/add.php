<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-secondary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah data
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('i_berkala') ?>" class="btn btn-sm  btn-secondary btn-darken-2 btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?php echo form_open_multipart('i_berkala/add'); ?>


                <!-- <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kode_dokumen">Kode dokumen</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-folder"></i></span>
                            </div>
                            <input value="<?= $kode_dokumen; ?>" name="kode_dokumen" readonly="readonly" id="kode_dokumen" type="text" class="form-control">
                        </div>
                        <?= form_error('kode_dokumen', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div> -->

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="judul">Judul informasi</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-folder"></i></span>
                            </div>
                            <input value="<?= set_value('judul'); ?>" name="judul" id="judul" type="text" class="form-control" placeholder="Masukann judul...">
                        </div>
                        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tahun">Tahun</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-folder"></i></span>
                            </div>
                            <input value="<?= set_value('tahun'); ?>" name="tahun" id="tahun" type="text" class="form-control" placeholder="Masukann tahun...">
                        </div>
                        <?= form_error('tahun', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tanggal_masuk">Tanggal</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="<?= set_value('tanggal_masuk', date('Y-m-d')); ?>" name="tanggal_masuk" id="tanggal_masuk" type="text" class="form-control date" placeholder="Tanggal Masuk...">
                        </div>
                        <?= form_error('tanggal_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="deskripsi">Deskripsi</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-folder"></i></span>
                            </div>
                            <input value="<?= set_value('deskripsi'); ?>" name="deskripsi" id="deskripsi" type="text" class="form-control" placeholder="Masukann deskripsi...">
                        </div>
                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tipe">Tipe</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-folder"></i></span>
                            </div>
                            <input value="<?= set_value('tipe'); ?>" name="tipe" id="tipe" type="text" class="form-control" placeholder="Masukann tipe...">
                        </div>
                        <?= form_error('tipe', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <!-- <form method="POST" action="<?php echo base_url(); ?>i_private/add" enctype="multipart/form-data"> -->
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="upload">Upload</label>
                    <div class="col-md-9">
                        <div class="input-group">

                            <input value="<?= set_value('upload'); ?>" name="upload" id="upload" type="file" placeholder="Masukann upload..." required>
                            <small>*Upload file (Max : 10Mb) <br>File yang boleh diupload adalah doc , docx , pdf , jpg , png , xlsx ,pptx, json,dan csv .</small>
                        </div>
                        <?= form_error('upload', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row card-footer">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        <button type="reset" class="btn btn-dark ">Reset</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>