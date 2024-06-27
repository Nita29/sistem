<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-secondary">
    <div class="card-header bg-white py-3">
        <div class="row">

            <div class="col-auto">
                <a href="<?= base_url('i_private/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah data
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode dokumen</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Tipe</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($i_private) :

                    foreach ($i_private as $s) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['kode_dokumen']; ?></td>
                            <td><?= $s['judul']; ?></td>
                            <td><?= $s['tahun']; ?></td>
                            <td><?php echo date("d/F/y", strtotime($s['tanggal_masuk'])); ?></td>
                            <td><?= $s['deskripsi']; ?></td>
                            <td><?= $s['tipe']; ?></td>
                            <td><?= $s['upload']; ?></td>
                            <th>

                                <a href="<?php echo base_url() . 'i_private/detail/' . $s['id_private'] ?>" class="btn btn-circle btn-dark btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="<?php echo base_url() . 'i_private/download/' . $s['id_private'] ?>" class="btn btn-circle btn-success btn-sm"><i class="fa fa-download"></i></a>
                                <a href="<?= base_url('i_private/edit/') . $s['id_private'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <?php if (is_admin()) : ?>
                                    <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('i_private/delete/') . $s['id_private'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                <?php endif; ?>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="12" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>