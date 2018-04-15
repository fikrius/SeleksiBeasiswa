
    <title>Beasiswa | Tentang</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="<?php echo base_url('assets/bootstrap/css/tentang.css') ;?>" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Beasiswa/view') ;?>">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
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
          <h1 class="display-1 text-white">Tentang Kami</h1>
          <h2 class="display-4 text-white">Tim Developer</h2>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- Profil Tim -->
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/fikri.jpg') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Fikri Ahmadi</h2>
              <p>Hidup itu berproses, bersyukur, nikmati saja...</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/lantang.jpg') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5">
              <h2 class="display-4">Nur Jati Lantang</h2>
              <p>Hi, I'm Nur Jati Lantang Marfu'ah a 19 years old. A student of Informatics. Energetic and friendly person (I think).  I write poem and articles.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?php echo base_url('assets/bootstrap/img/endro.jpg') ;?>" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <h2 class="display-4">Rauf Endro Widagdo</h2>
              <p>Music addict.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Profil Tim -->