<div class="row">

    <div class="col-xl-4 col-4 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Pemohon</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $permohonan; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-4 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Balas informasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $balas; ?></div>
                            </div>
                            <div class="col-auto">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-4 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- data 2 -->
<div class="row">

    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Data informasi publik serta merta</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $i_merta; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Data informasi publik setiap saat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $i_saat; ?></div>
                            </div>
                            <div class="col-auto">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Data informasi publik secara berkala</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $i_berkala; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Data informasi private / pengecualian</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $i_private; ?></div>
                            </div>
                            <div class="col-auto">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- data ke3 -->
<div class="row">

    <!-- Area Chart -->


    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header  btn-success btn-lighten-1 py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">5 PERMOHONAN INFORMASI TERAKHIR YANG MASUK</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tema</th>
                            <th>Tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataTerbaru as $tbm) : ?>
                            <tr>
                                <td><strong><?= $tbm['nama']; ?></strong></td>
                                <td><?= $tbm['tema']; ?></td>
                                <td style="word-wrap: break-word"><span class="badge badge-success"><?= $tbm['tujuan']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header btn-danger btn-lighten-1 py-3">
                <h6 class="m-0 font-weight-bold text-white text-center"> DATA BALAS INFORMASI TERBARU</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Subject balasan</th>
                            <th>Pesan balasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataBalas as $tbk) : ?>
                            <tr>
                                <td><strong><?= $tbk['email_balas']; ?></strong></td>
                                <td><?= $tbk['subject']; ?></td>
                                <td><span class="badge badge-danger"><?= $tbk['pesan']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- chart pertahun -->
    <!-- <div class="card shadow mb-4"> -->
    <!-- Card Header - Dropdown -->
    <!-- <div class="card-header bg-secondary bg-gradient-dark py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Total Data informasi Perbulan pada Tahun <?= date('Y'); ?></h6>
            </div> -->
    <!-- Card Body -->
    <!-- <div class="card-body">
            <div class="chart-area">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="myAreaChart" width="669" height="320" class="chartjs-render-monitor" style="display: block; width: 669px; height: 320px;"></canvas>
            </div>
        </div> -->



    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-secondary bg-gradient-dark py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Total Data</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="myPieChart" width="302" height="245" class="chartjs-render-monitor" style="display: block; width: 302px; height: 245px;"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Permohonan informasi
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Balas informasi
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- data ke -4 -->
<div class="row">


</div>


<!-- data ke -5 -->
<div class="row">

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary bg-gradient-dark py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">DATA INFORMASI PRIVATE TERBARU UPLOAD</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Kode dokumen</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataPrivate as $tbm) : ?>
                            <tr>
                                <td><strong><?= $tbm['kode_dokumen']; ?></strong></td>
                                <td><?= $tbm['judul']; ?></td>
                                <td style="word-wrap: break-word"><span class="badge badge-dark"><?= $tbm['deskripsi']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary bg-gradient-dark py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">DATA INFORMASI BERKALA TERBARU UPLOAD</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Kode dokumen</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataBerkala as $tbk) : ?>
                            <tr>
                                <td><strong><?= $tbk['kode_dokumen']; ?></strong></td>
                                <td><?= $tbk['judul']; ?></td>
                                <td style="word-wrap: break-word"><span class="badge badge-dark"><?= $tbk['deskripsi']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- data ke -6 -->
<div class="row">

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary bg-gradient-dark py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">DATA INFORMASI SERTA MERTA TERBARU UPLOAD</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Kode dokumen</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataMerta as $tbm) : ?>
                            <tr>
                                <td><strong><?= $tbm['kode_dokumen']; ?></strong></td>
                                <td><?= $tbm['judul']; ?></td>
                                <td style="word-wrap: break-word"><span class="badge badge-dark"><?= $tbm['deskripsi']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary bg-gradient-dark py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">DATA INFORMASI SETIAP SAAT TERBARU UPLOAD</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Kode dokumen</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataSaat as $tbk) : ?>
                            <tr>
                                <td><strong><?= $tbk['kode_dokumen']; ?></strong></td>
                                <td><?= $tbk['judul']; ?></td>
                                <td style="word-wrap: break-word"><span class="badge badge-dark"><?= $tbk['deskripsi']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>