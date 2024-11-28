<!-- Sing in Form -->
<section class="sign-in" style="background-color: #FFFFFF; padding: 40px;">
    <div class="container">
        <div class="signin-content">
            <div class="signin-form" style="background-color: #2196F3; padding: 30px; border-radius: 8px; color: white; max-width: 400px; margin: auto;">
                <h2 class="form-title" style="text-align: center; color: white;">Login</h2>
                <form action="<?= base_url() ?>auth/prosesLoginPegawai" method="POST" class="register-form" id="login-form">
                    <?= $this->session->flashdata('message'); ?><br>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="email" style="color: white;">Email</label>
                        <div style="position: relative;">
                            <i class="zmdi zmdi-account material-icons-name" style="position: absolute; left: 10px; top: 12px; color: black;"></i>
                            <input type="text" name="email" id="email" placeholder="Masukkan Email" autofocus required style="width: 100%; padding: 10px 10px 10px 40px; border-radius: 5px; border: none;" />
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="password" style="color: white;">Password</label>
                        <div style="position: relative;">
                            <i class="zmdi zmdi-lock" style="position: absolute; left: 10px; top: 12px; color: black;"></i>
                            <input type="password" name="password" id="password" placeholder="Masukkan Password" required style="width: 100%; padding: 10px 10px 10px 40px; border-radius: 5px; border: none;" />
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px; text-align: right;">
                        <a href="<?= base_url() ?>lupapassword/reset" style="color: white;">Lupa Password?</a>
                    </div>
                    <div class="form-group form-button" style="text-align: center;">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" style="background-color: #1976D2; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px;" />
                    </div>
                </form>
                <!-- Tombol kembali ke home -->
                <div class="additional-links" style="margin-top: 20px; text-align: center;">
                    <a href="<?= base_url() ?>" style="text-decoration: none;">
                        <button style="background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px;">Kembali ke Home</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
