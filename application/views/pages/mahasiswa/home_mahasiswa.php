    <title>Beranda | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link href="<?php echo base_url('assets/bootstrap/css/home-mahasiswa.css') ;?>" rel="stylesheet">



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
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('Mahasiswa/view'); ?>">Beranda<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Mahasiswa/view/pengumuman'); ?>">Pengumuman <span class="badge badge-danger">1</span></a>
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
          <h1 class="display-1 text-white">Selamat Datang</h1>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->

      <!-- Section -->
      <section class="form-daftar">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2 mt-4">
              <h4 class="display-4 text-center">Form Pendaftaran Beasiswa</h3>
              <form action="<?php echo base_url('Mahasiswa/daftar_beasiswa'); ?>" method="post" id="formDaftar" >
                        <!-- Notif -->
                          <p style="color: blue; font-style: italic" class="text-center"><?php echo $this->session->flashdata('sukses'); ?></p>
                        <!-- Notif -->

                        <div class="form-group">
                          <label class="col-form-label" for="nama">Nama <sup class="text-danger">*</sup></label>
                          <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $this->session->userdata('nama'); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="nim">NIM <sup class="text-danger">*</sup></label>
                          <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $this->session->userdata('nim'); ?>" readonly>
                        </div>
                        <!-- Notif -->
                          <p style="color: red; font-style: italic" class="text-center"><?php echo $this->session->flashdata('gagal'); ?></p>
                        <!-- Notif -->
                        <div class="form-group">
                          <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir <sup class="text-danger">*</sup></label>
                          <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $this->session->userdata('tanggal_lahir'); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="jenis_kelamin">Jenis Kelamin <sup class="text-danger">*</sup></label>
                          <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $this->session->userdata('jenis_kelamin'); ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="gaji">Total Gaji Orang Tua/bulan <sup class="text-danger">*</sup></label>
                          <input type="text" class="form-control" name="gaji" id="gaji" required>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="saudara">Jumlah Saudara <sup class="text-danger">*</sup></label>
                          <input type="text" class="form-control" name="saudara" id="saudara" required>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="jurusan">Jurusan<sup class="text-danger">*</sup></label>
                          <select id="jurusan" name="jurusan" required>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Kimia">Teknik Kimia</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="semester">Semester <sup class="text-danger">*</sup></label>
                          <input type="text" class="form-control" name="semester" id="semester" required>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="ipk">IPK <sup class="text-danger">*</sup></label>
                          <input type="text" class="form-control" name="ipk" id="ipk" required>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="submit" class="btn btn-lg btn-primary" value="Daftar Beasiswa">
                        </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir Section -->


    
    

    
