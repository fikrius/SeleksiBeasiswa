    <title>Admin | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="<?php echo base_url('assets/bootstrap/img/logo.png'); ?>" style="width: 50px;">
        <a style="font-weight: bold;" class="navbar-brand" href="<?php echo site_url('Admin/index'); ?>">BEASISWA<span style="color: #fc9700; text-transform: uppercase;"><?php echo $this->session->userdata("nama_beasiswa"); ?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('Admin/index'); ?>">Dasbor<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" role="button" aria-haspopup="true" aria-expanded="false">
              Menu
              </a>
              <div class="dropdown-menu" aria-labelledby="Preview">
                <!-- <img src="" alt="gambar profil" class="img-circle"> -->
                <h6 class="text-center" style="color: #fc9700;">Admin</h6>
                <hr>
                <a class="dropdown-item text-left" href="<?php echo site_url('Admin/pengaturan'); ?>">Pengaturan</a>
                <a class="dropdown-item text-left" href="<?php echo site_url('Akun/logout'); ?>">Keluar</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigation -->

    <?php foreach($akun as $row){ ?>
    <!-- Form Ubah -->
    <section class="ubah" style="margin-top: 5rem;">
      <div class="container mt-5" style="min-height: 45rem;">
        <h4 class="text-center">Ubah data akun yang terdaftar</h4>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            
            <form action="<?php echo base_url('Admin/ubah_akun'); ?>" method="post">
                      <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $row->id_mhs; ?>">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row->nama; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $row->nim; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $row->tanggal_lahir; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $row->jenis_kelamin; ?>" required>
                      </div>
                      <div class="form-group">
                        <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Ubah Akun">
                      </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir form -->
    <?php } ?>
   

    
