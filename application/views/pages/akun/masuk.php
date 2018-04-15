    <title>Masuk | Beasiswa</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/masuk.css') ;?>">

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 offset-md-4">
                <div class="account-wall">
                    <img class="profile-img" src="<?php echo base_url('assets/bootstrap/img/profil.png') ;?>"
                        alt="Profil Masuk">

                    <form class="form-signin" action="<?php echo base_url('Akun/login'); ?>" method="post">
                      <input name="nim" type="text" class="form-control" placeholder="Nim" required autofocus>
                      <input name="password" type="password" class="form-control" placeholder="Password" required>
                      <!-- cek username dan passwrod-->
                        <p style="color: red; font-style: italic" class="text-center"><?php echo $this->session->flashdata('gagal'); ?></p>
                      <!--cek-->
                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                          Masuk</button>
                      <label class="checkbox pull-left">
                          <input type="checkbox" value="remember-me">
                          Ingat saya
                      </label>
                      <a href="<?php echo site_url('Beasiswa/daftar') ?>" class="text-center new-account pull-right">Belum punya akun? </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.2.1.min.js') ;?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js') ;?>"></script>

  </body>
</html>