
    <title>Beasiswa | Tentang</title>
    
    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="<?php echo base_url('assets/bootstrap/css/kontak.css') ;?>" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Beasiswa/view/tentang') ;?>">Tentang
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Beasiswa/masuk') ;?>">Daftar</a>
            </li>
            <li class="nav-item active">
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
          <h1 class="display-1 text-white">Kontak</h1>
          <h2 class="display-4 text-white">"Kritik dan saran sangat beguna bagi kami"</h2>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

    <!-- KOntak -->
    <section class="kontak" id="kontak">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <br>
            <!-- Notif masukan berhasil dimasukkan-->
            <p style="color: blue; font-style: italic" class="text-center"><?php echo $this->session->flashdata('sukses'); ?></p>
            <!-- Notif masukan berhasil dimasukkan -->

            <!-- Notif masukan gagal dimasukkan-->
            <p style="color: red; font-style: italic" class="text-center"><?php echo $this->session->flashdata('gagal'); ?></p>
            <!-- Notif masukan gagal dimasukkan -->
          </div>

          <div class="col-md-8 offset-md-2 mt-5">
            <form action="<?php echo base_url('Beasiswa/kirim_masukan'); ?>" method="post">
              <div class="form-group">
                <label for="nama">Nama<sup class="text-danger">*</sup></label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required>
              </div>
              <div class="form-group">
                <label for="email">Email<sup class="text-danger">*</sup></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
              </div>
              <div class="form-group">
                <label for="pesan">Pesan<sup class="text-danger">*</sup></label>
                <textarea name="pesan" class="form-control" rows="10" placeholder="Masukkan pesan" required></textarea>
              </div>
              <button name="submit" type="submit" class="btn btn-lg btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <br><br>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Kontak -->
