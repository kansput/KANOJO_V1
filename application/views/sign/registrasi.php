<div class="container">

<div class="o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-white mb-4">Registrasi</h1>
                    </div>
                    <form class="user" method="post" action="<?= base_url('login/registrasi'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select class="form-control rounded-pill" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= set_value('jenis_kelamin'); ?>">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan" >Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Daftar Menjadi Member
                        </button>
                    </form>
                    <hr>
                    <div class="text-white text-center">
                        Sudah Menjadi Member?<a class="large text-info" href="<?= base_url('login'); ?>"> Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>