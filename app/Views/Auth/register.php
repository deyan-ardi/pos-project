<?= $this->extend($config->viewLayout) ?>

<?= $this->section('title') ?>
Halaman Registrasi Akun
<?= $this->endSection() ?>

<?= $this->section('main') ?>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="<?= base_url(); ?>/assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">
                        <h4 class="mb-3 f-w-400">Daftar Akun Baru</h4>
                        <?= view('App\Auth\_message_block') ?>

                        <form action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label for="email"><?= lang('Auth.email') ?></label>
                                <input type="email"
                                    class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>"
                                    value="<?= old('email') ?>">
                                <small id="emailHelp"
                                    class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="username"><?= lang('Auth.username') ?></label>
                                <input type="text"
                                    class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                    name="username" placeholder="<?= lang('Auth.username') ?>"
                                    value="<?= old('username') ?>">
                            </div>

                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" name="password"
                                    class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                    placeholder="********" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="pass_confirm">Ulang Kata Sandi</label>
                                <input type="password" name="pass_confirm"
                                    class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                    placeholder="********" autocomplete="off">
                            </div>

                            <br>

                            <button type="submit"
                                class="btn btn-primary btn-block">Buat Akun</button>
                        </form>


                        <hr>

                        <p><?= lang('Auth.alreadyRegistered') ?> <a
                                href="<?= route_to('login') ?>">Sudah Punya Akun? Masuk</a></p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="<?= base_url(); ?>/assets/images/auth/auth-bg.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->
<?= $this->endSection() ?>