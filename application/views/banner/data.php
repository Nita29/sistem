<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-secondary">
    <div class="card-header bg-white py-3">
        <div class="row">

            <div class="col-auto">
                <a href="<?= base_url('banner/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah gambar
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
                    <th>Banner</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $no = 1;
                if ($banner) :

                    foreach ($banner as $j) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><img src="<?= base_url() ?>banner_upload/<?= $j['gambar']; ?>" width="100px"></td>
                            <td><?= $j['status']; ?></td>

                            <th>
                                <!-- <a href="<?= base_url('banner/edit/') . $j['id_banner'] ?>" class="btn btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit banner</a>
                            <?php if (is_admin()) : ?> -->
                                <a onclick="return confirm('Yakin anda ingin hapus?')" href="<?= base_url('banner/delete/') . $j['id_banner'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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