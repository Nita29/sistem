<div class="card mb-4">
    <div class="card-body border-bottom-secondary">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Edit data pemohon
                </h4>
            </div>
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
        </div>
        <br>
        <hr>
        <div class="card-body ">
            <?= $this->session->flashdata('pesan'); ?>
            <?php foreach ($permohonan as $p) : ?>
                <form action="<?= base_url() . 'permohonan_informasi/edit_aksi'; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input value="<?= $p->id_pemohon ?>" type="hidden" name="id_pemohon" class="form-control" />
                                <label>Jenis Pemohon</label>
                                <select name="jenis" class="form-control" value="<?= $p->jenis ?>">
                                    <option><?= $p->jenis ?></option>
                                    <option name=" perorangan" value="Perorangan">Perorangan</option>
                                    <option name="organisasi" value="Instansi/Organisasi">Instansi/Organisasi</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama lembaga/organisasi/individu/mahasiswa :</label>
                                <input value="<?= $p->nama ?>" type="text" name="nama" class="form-control" placeholder="Masukan nama" />
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input value="<?= $p->alamat ?>" name="alamat" placeholder="Masukan alamat anda" class="form-control"></input>
                            </div>
                            <div class="form-group">
                                <label>Pilih jenis kelamin</label><br>
                                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($p->jenis_kelamin == 'Laki-laki') echo 'checked' ?>>Laki-laki</label>
                                <span><label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($p->jenis_kelamin == 'Perempuan') echo 'checked' ?>> Perempuan</span></label>
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input value="<?= $p->kecamatan ?>" type=" text" name="kecamatan" class="form-control" placeholder="Masukan Kecamatan" />
                            </div>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <input value="<?= $p->kelurahan ?>" type=" text" name="kelurahan" class="form-control" placeholder="Masukan Kelurahan" />
                            </div>
                            <div class="form-group">
                                <label>Kab/kota</label>
                                <input value="<?= $p->kab ?>" type=" text" name="kab" class="form-control" placeholder="Masukan Kab/kota" />
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select name="provinsi" class="form-control" value="<?= $p->provinsi ?>">
                                    <option><?= $p->provinsi ?></option>
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
                                <label>Kode Pos</label>
                                <input value="<?= $p->kodepos ?>" type="text" name="kodepos" class="form-control" placeholder="Masukan Kode pos" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input value="<?= $p->email ?>" type="email" name="email" class="form-control" placeholder="Masukan email" />
                            </div>

                            <div class="form-group">
                                <label>No telp</label>
                                <input value="<?= $p->mobile ?>" type="text" name="mobile" placeholder="Masukan no telp" class="form-control" pattern="\d*" />
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input value="<?= $p->nik ?>" type="text" name="nik" placeholder="Masukan No NIK" class="form-control" pattern="\d*" />
                            </div>
                            <!-- <div class="form-group">
                                <label for="resume">Upload KTP/tanda pengenal</label>
                                <input value="<?= set_value('resume'); ?>" type="file" id="resume" name="resume" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg" />
                                <small>*Upload Lampiran Tanda Pengenal (Max : 2Mb) <br>File yang boleh diupload adalah doc , docx , pdf , jpg , jpeg , dan png .</small>
                            </div> -->
                            <div class="form-group">
                                <label>Tema</label>
                                <textarea name="tema" placeholder="Masukan tema" class="form-control"><?= $p->tema ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tujuan permohonan informasi</label>
                                <textarea name="tujuan" placeholder="Masukan tujuan disini" class="form-control" rows="12"><?= $p->tujuan ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-success float-right">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <!-- <div class="card-footer">


                            </div> -->
                        </div>
                    </div>

                </form>
            <?php endforeach; ?>
        </div>
    </div>