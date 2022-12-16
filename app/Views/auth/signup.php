<?= $this->extend('template/auth') ?>
<?= $this->section('content')?>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
                                </div>
                                <form class="user" method="POST"  action="<?= base_url('signup')?>">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Username...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?= base_url(); ?>" class="small">Sudah punya akun? Klik disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div>
    <form method="POST" action="<?= base_url('signup')?>">
        <div>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Type your email in here..">
        </div>
        <div>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Type your username in here..">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Type your password in here..">
        </div>
        <button type="submit">Signup</button>
    </form>
    <a href="<?= base_url('/')?>">Sudah punya akun? klik disini.</a>
</div>
<?= $this->endSection()?>