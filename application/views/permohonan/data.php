<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-secondary">
    <div class="card-header bg-white py-3">
        <div class="row">

            <div class="col-auto">
                <a href="<?= base_url('permohonan_informasi/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        input permohonan
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive wrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Jenis</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Tema</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $no = 1;
                if ($permohonan) :

                    foreach ($permohonan as $j) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?php echo date("d/F/y", strtotime($j['tanggal_masuk'])); ?></td>
                            <td><?= $j['jenis']; ?></td>
                            <td><?= $j['nik']; ?></td>
                            <td><?= $j['nama']; ?></td>
                            <td><?= $j['email']; ?></td>
                            <td><?= $j['mobile']; ?></td>
                            <td><?= $j['tema']; ?></td>
                            <td style="color:red;"><?= $j['tujuan']; ?></td>
                            <th>
                                <a href="<?php echo base_url() . 'permohonan_informasi/balas/' . $j['id_pemohon'] ?>" class="btn btn btn-secondary btn-darken-2 btn-sm">Balas</i></a>
                                <a href="<?php echo base_url() . 'permohonan_informasi/download/' . $j['id_pemohon'] ?>" class="btn btn-circle btn-info btn-sm"><i class="fa fa-download"></i></a>
                                <a href="<?php echo base_url() . 'permohonan_informasi/detail/' . $j['id_pemohon'] ?>" class="btn btn-circle btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="<?= base_url('permohonan_informasi/edit/') . $j['id_pemohon'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <?php if (is_admin()) : ?>
                                    <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('permohonan_informasi/delete/') . $j['id_pemohon'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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