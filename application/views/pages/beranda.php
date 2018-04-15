
    <title>Beasiswa | Beranda</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/beranda.css') ;?>">

    <!-- Data Tables -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css') ;?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="<?php echo base_url('assets/bootstrap/img/logo.png') ;?>" style="width: 50px;">
        <a style="font-weight: bold;" class="navbar-brand" href="<?php echo site_url('Beasiswa/view') ;?>">BEASISWA<span style="color: #fc9700; text-transform: uppercase;"><?php echo $this->session->userdata('nama_beasiswa'); ?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('Beasiswa/view') ;?>">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Beasiswa/view/tentang') ;?>">Tentang
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Beasiswa/masuk') ;?>">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Beasiswa/view/kontak') ;?>">Kontak</a>
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
          <h1 class="display-1 text-white">Selamat Datang</h1>
          <h2 class="display-4 text-white">di Website Beasiswa</h2>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- Deskripsi Beasiswa -->
    <section class="deskripsi" id="deskripsi">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Beasiswa</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <?php foreach($deskripsi_beasiswa->result() as $row): ?>
              <p><?php echo $row->deskripsi; ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Deskripsi -->

    <!-- Syarat Beasiswa -->
    <section class="syarat">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Syarat Beasiswa</h2>
            <hr>
          </div>
        </div>

        <div class="row align-items-justify">
          <div class="col-md-12">
            <p>Syarat</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-11 offset-md-1">
            <?php foreach($syarat_beasiswa->result() as $row): ?>
                <p><?php echo $row->syarat; ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Syarat Beasiswa -->

    <!-- Sistem Beasiswa -->
    <section class="buat-akun">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/buat-akun.png') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Buat Akun</h2>
              <p>Buat akun Anda terlebih dahulu untuk bisa mengakses pendaftaran Beasiswa.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="daftar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/daftar_beasiswa.png') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3">
              <h2 class="display-4">Daftar Beasiswa</h2>
              <p>Setelah mendaftarkan akun, Anda bisa masuk ke halaman untuk mendaftar Beasiswa.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pengumuman">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/pengumuman.png') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Pengumuman</h2>
              <p>Pastikan diri Anda lolos atau tidak dengan melihat pengumuman yang sudah ditentukan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Sistem Beasiswa -->
