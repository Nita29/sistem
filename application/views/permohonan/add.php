<?= $this->session->flashdata('pesan'); ?>
<div class="card mb-4">
    <div class="card-body border-bottom-secondary">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Tambahkan data pemohon
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('permohonan_informasi') ?>" class="btn btn-sm btn-secondary btn-darken-2 btn-darken-2 btn-icon-split">
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
        <?php echo form_open_multipart('Permohonan_informasi/add'); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input value="<?= set_value('tanggal_masuk', date('Y-m-d')); ?>" name="tanggal_masuk" id="tanggal_masuk" type="text" class="form-control date" placeholder="Tanggal Masuk..." required>
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
                <div class="form-group" name="jenis_kelamin" required>
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
                    <label for="surat">Upload SURAT</label>
                    <input type="file" id="surat" name="surat" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg" required />
                    <small>*Upload Lampiran (Max : 2Mb) <br>File yang boleh diupload adalah doc , docx , pdf , jpg , jpeg , dan png .</small>
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
                    <label>No telp / WA</label>
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
                    <textarea name="tema" placeholder="Masukan tema" class="form-control" required rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Tujuan permohonan informasi</label>
                    <textarea name="tujuan" placeholder="Masukan tujuan disini" class="form-control" required rows="12"></textarea>
                </div>

                <div class="card-footer">
                    <input type="submit" name="submit" value="Submit" class="btn btn-success float-right" />
                    <input type="reset" name="reset" value="Reset" class="btn btn-secondary " />
                </div>

            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>