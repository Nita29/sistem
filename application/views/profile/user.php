<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-2 shadow-sm border-bottom-primary">
            <div class="card-header bg-white">
                <h4 class="font-weight-bold text-dark text-center">
                    <?= userdata('nama'); ?>
                </h4>
            </div>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-2 mb-4 mb-md-0">
                        <img src="<?= base_url() ?>assets/img/avatar/<?= userdata('foto'); ?>" alt="" class="img-thumbnail rounded mb-2">
                        <a href="<?= base_url('profile/setting'); ?>" class="btn btn-sm btn-block btn-primary btn-darken-1"><i class="fa fa-edit"></i> Edit Profile</a>
                        <a href="<?= base_url('profile/ubahpassword'); ?>" class="btn btn-sm btn-block btn-primary btn-darken-1"><i class="fa fa-lock"></i> Ubah Password</a>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th width="200">Username</th>
                                <td><?= userdata('username'); ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?= userdata('email'); ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td><?= userdata('no_telp'); ?></td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td class="text-capitalize"><?= userdata('role'); ?></td>
                            </tr>
                            <tr>
                                <th>Akun dibuat</th>
                                <td><?= date('d F Y', userdata('created_at')); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_2rbsxwen.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- animasi -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>