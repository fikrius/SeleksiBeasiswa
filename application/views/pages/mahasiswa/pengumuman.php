    <title>Pengumuman | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="<?php echo base_url('assets/bootstrap/css/pengumuman.css') ;?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="<?php echo base_url('assets/bootstrap/img/logo.png'); ?>" style="width: 50px;">
        <a style="font-weight: bold;" class="navbar-brand" href="<?php echo site_url('Mahasiswa/view'); ?>">BEASISWA<span style="color: #fc9700; text-transform: uppercase;"><?php echo $this->session->userdata('nama_beasiswa'); ?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Mahasiswa/view'); ?>">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('Mahasiswa/view/pengumuman'); ?>">Pengumuman</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" role="button" aria-haspopup="true" aria-expanded="false">
              Menu
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="Preview">
                <!-- <img src="" alt="gambar profil" class="img-circle"> -->
                <h6>Halo, <span style="color: #fc9700;"><?php echo $this->session->userdata('nama'); ?></span></h6>
                <hr>
                <a class="dropdown-item" href="<?php echo base_url('Akun/logout'); ?>">Keluar</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigation -->

    <!-- Header -->
    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <form method="post" action="<?php echo base_url('Mahasiswa/peserta_lolos'); ?>">
                <div class="form-group">
                  <input type="hidden" class="form-control" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
                  <input type="hidden" class="form-control" name="nim" value="<?php echo $this->session->userdata('nim'); ?>">
                  <input onclick="return confirm('Apakah Anda yakin ingin melihat pengumuman, <?php echo $this->session->userdata('nama');  ?>')" style="width: 15rem;" class="btn btn-lg btn-success" type="submit" name="submit" value="Lihat Pengumuman">
                </div>
          </form>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- Section -->
    <section class="pengumuman">
      <div class="container mt-4 mb-4" style="height: 400px;">
        <div class="row">

          <div class="col-md-8 offset-md-2">
            <h3 class="display-4 text-center" style="margin-bottom: 2rem;">Pengumuman</h3>
            <?php if($this->session->userdata("sukses") == "berhasil" ){ ?>
              <div class="alert alert-success" role="alert" style="height: 5rem; font-size: 20px;">
                Selamat <?php echo $this->session->userdata('nama'); ?> ! Anda lolos seleksi beasiswa PPA! Langkah selanjutnya, silakan datang ke kantor Rektorat untuk mengambil dana beasiswa.
              </div>
            <?php } else if($this->session->userdata("gagal") == "gagal" ){ ?>
              <div class="alert alert-danger" role="alert" style="height: 5rem; font-size: 20px;">
                Maaf <?php echo $this->session->userdata('nama'); ?>, Anda belum lolos seleksi beasiswa PPA. Anda bisa mendaftar lagi semester depan.
              </div>
            <?php }else{ ?>
              <!-- jika selain sukses dan gagal, maka kosong/tidak mengeluarkan apa-apa -->
            <?php } ?>
          </div>

          <div class="col-md-4 offset-md-4">
            
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Section -->
