<!-- content -->
<section id="content">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-md-12">
                <h1 style="font-family: opensans-bold ;font-weight: 600 ;">INFORMASI PUBLIK SETIAP SAAT</h2>
                    <hr>
                    <br>
            </div>
            <div class="col ">
                <table id="example" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th width="10">No.</th>
                            <th width="30">Kode dokumen</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        if ($i_saat) :
                            foreach ($i_saat as $s) :
                        ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $s['kode_dokumen']; ?></td>
                                    <td><?= $s['judul']; ?></td>
                                    <td><?= $s['deskripsi']; ?></td>

                                    <th>
                                        <a href="<?php echo base_url() . 'InformasiPublikSS/detail/' . $s['id_saat'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo base_url() . 'InformasiPublikSS/download/' . $s['id_saat'] ?>" class="btn btn-circle btn-success btn-sm"><i class="fa fa-download"></i></a>
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

    </div>



</section>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/app.js"></script>


<!-- akhir content -->