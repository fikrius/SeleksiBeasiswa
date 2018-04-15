
    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="<?php echo base_url('assets/bootstrap/css/daftar.css') ;?>" rel="stylesheet">

  </head>
  <body>
    
    <!-- Navigasi -->
    <nav class="navbar fixed-top bg-dark mb-5">
          <a style="font-weight: bold; color: white;" class="navbar-brand text-left" href="<?php echo site_url('Beasiswa/view') ;?>">BEASISWA<span style="color: #fc9700; text-transform: uppercase;">
              <?php foreach($nama_beasiswa->result() as $row): ?>
                <?php echo $row->nama_beasiswa; ?>
              <?php endforeach; ?>
            </span>
          </a>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          </button> -->
          <a class="btn btn-primary" role="button" href="<?php echo site_url('Beasiswa/masuk') ?>">Masuk
          </a>
    </nav>
    <!-- Akhir Navigasi -->
    
    <!-- section -->
    <div class="container" style="margin-top: 7rem; margin-bottom: 5rem;">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-xs-6 offset-xs-3">
                <div class="account-wall" style="padding: 40px 0px 20px 0px;
                    background-color: #f7f7f7; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);">
                    <form class="form-signin" action="<?php echo base_url('Akun/daftar'); ?>" method="post" style="margin-left: 1rem; margin-right: 1rem;">
                      <!-- Notif -->
                        <p style="color: blue; font-style: italic" class="text-center"><?php echo $this->session->flashdata('sukses'); ?></p>
                      <!-- Notif -->

                      <div class="form-group">
                        <label class="col-form-label" for="nama">Nama <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nim">NIM <sup class="bintang">*</sup></label>
                        <input type="text" class="form-control" name="nim" id="nim" required>
                      </div>
                      <!-- Notif NIM sudah terdaftar atau belum-->
                        <p style="color: red; font-style: italic" class="text-center"><?php echo $this->session->flashdata('gagal'); ?></p>
                      <!-- Notif NIM sudah terdaftar atau belum -->
                      <div class="form-group">
                        <label class="col-form-label" for="password">Password <sup class="bintang">*</sup></label>
                        <input type="password" class="form-control" name="password" id="password" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="konfirmasi">Konfirmasi Password <sup class="bintang">*</sup></label>
                        <input type="password" class="form-control" name="konfirmasi" id="konfirmasi" required>
                      </div>
                      <!-- Konfirmasi password -->
                        <p style="color: red; font-style: italic" class="text-center"><?php echo $this->session->flashdata('konfirmasi'); ?></p>
                      <!-- Konfirmasi Password -->
                      <div class="form-group">
                        <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir <sup class="bintang">*</sup></label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jenis_kelamin">Jenis Kelamin <sup class="bintang">*</sup></label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                          <option value="p">Pria</option>
                          <option value="w">Wanita</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Daftar</button>
                      </div>
                      
                    </form>
                </div>
            </div>

            <div class="col-md-8 text-center">
              <h4 style="margin-bottom: 4rem; margin-top: 2rem; margin-left: 4rem;" class="display-4">Daftar Sekarang!</h4>
              <div>
                <img src="<?php echo base_url('assets/bootstrap/img/devices.png'); ?>">
              </div>
              <p style="margin-top: 2rem; margin-left: 4rem;" class="display-5">Kompatibel untuk seluruh layar perangkat Anda!</p>

            </div>
        </div>
    </div>
    <!-- Akhir section -->

