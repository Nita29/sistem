<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-secondary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div style="text-align: center;">
                <img src="<?= base_url() ?>assets/images/logo.png" alt="Logo pemerintah kota cimahi" style="width: 200px;" />
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
                    <th>Nama</th>
                    <th width="10">Email</th>
                    <th>Tema & Uraian </th>
                    <th>Tujuan</th>
                    <th>Subject Balasan</th>
                    <th>Pesan balasan</th>
                    <th>File dokumen balasan</th>
                    <th>User</th>
                    <th></th>
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
                            <td><?php echo date("d/F,Y", strtotime($j['tanggal_masuk'])); ?></td>
                            <td><?= $j['jenis']; ?></td>
                            <td><?= $j['nama']; ?></td>
                            <td><?= $j['email']; ?></td>
                            <td><?= $j['tema']; ?></td>
                            <td><?= $j['tujuan']; ?></td>
                            <td><?= $j['subject']; ?></td>
                            <td><?= $j['pesan']; ?></td>
                            <td><?= $j['judul_balas']; ?></td>
                            <td><?= $j['user_balas']; ?></td>


                            <th>

                                <?php if (is_admin()) : ?>
                                    <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('report/delete/') . $j['id_pemohon'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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