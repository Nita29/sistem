<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-secondary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Edit banner
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('banner') ?>" class="btn btn-sm  btn-secondary btn-darken-2 btn-icon-split">
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
                <?= form_open_multipart('', [], ['id_banner' => $banner['id_banner']]); ?>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="gambar1">Upload banner 1</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div>
                                <img src="<?= base_url() ?>assets/images/file.png" alt=" File" width="30">
                                <span><?= $banner['gambar']; ?> </span>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">

                            <input value="<?= set_value('gambar'); ?>" name="gambar" id="gambar" type="file" placeholder="Masukann gambar...">
                            <small>*Upload file (Max : 10Mb) <br>File yang boleh diupload adalah jpg , png , dan jpeg. dengan Ukuran gambar : Width :1600px ,dan Height : 650px</small>
                        </div>
                        <?= form_error('gambar1', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="status">Status</label>
                    <div class="col-md-9">
                        <div class="row form-group">
                            <select name="status" class="form-control" required>
                                <option value="">Pilih status</option>
                                <option value="aktif">Aktif</option>
                                <option value="tidak_aktif">Tidak Aktif</option>
                            </select>

                        </div>
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
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