<div class="wrapper masuk">

    <?= $this->session->flashdata('pesan'); ?>
    <form action="<?= base_url('login'); ?>" method="post">
    <a class="text-white" href="<?= base_url('page'); ?>"><i class="bi bi-arrow-left"></i></a>
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            <i class='bx bx-user-circle'></i>
        </div>
        <div class="input-box">
            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
            <label for=""><input type="checkbox">Remember Me</label>
            <a href="#">Forget Password</a>
        </div>
        <button class="btn" type="submit"> Login</button>
        <div class="register-link">
            <p>Dont Have an Account? <a class="large text-info" href="<?= base_url('login/registrasi'); ?>">Register</a></p>
        </div>
    </form>
</div>