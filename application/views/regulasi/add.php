<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-secondary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Portal berita
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('berita_regulasi') ?>" class="btn btn-sm  btn-secondary btn-darken-2 btn-icon-split">
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
                <?php echo form_open_multipart('berita-regulasi/add'); ?>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="judul">Judul berita</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-folder"></i></span>
                            </div>
                            <input value="<?= set_value('judul'); ?>" name="judul" id="judul" type="text" class="form-control" placeholder="Masukan judul berita...">
                        </div>
                        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="text">Isi berita</label>
                    <div class="col-md-9">
                        <div class="input-group">

                            <textarea id="editor" name="editor" cols="12" rows="12" required></textarea><br />
                        </div>
                        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>



                <div class="row card-footer">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary float-right">Post berita</button>
                        <button type="reset" class="btn btn-dark ">Reset</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url() . 'assets/ckeditor/ckeditor5/ckeditor.js' ?>"></script>