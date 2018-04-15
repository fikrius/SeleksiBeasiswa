    <title>Pengaturan | Beasiswa</title>


    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- Data Tables -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Admin/index'); ?>">Dasbor<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Admin/tampil_feedback'); ?>">Feedback<span class="sr-only">(current)</span>
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

    <!-- Form ubah -->
    <div class="container" style="min-height: 40rem;">
      <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 6rem;">
          <h4 class="text-center" style="margin-bottom: 1rem;">Pengaturan Beasiswa</h4>
          <hr>
          <p class="text-danger">Terakhir diedit : <?php echo $this->session->userdata("tanggal_edit"); ?></p>
          <form action="<?php echo base_url('Admin/ubah_pengaturan'); ?>" method="post">
            <div class="form-group">
              <label class="col-form-label" for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" value="<?php echo $this->session->userdata('username'); ?>">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="nim">Password</label>
              <input type="password" class="form-control" name="password" id="password" value="<?php echo $this->session->userdata('password'); ?>">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="konfirmasi_password">Konfirmasi Password</label>
              <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password">
            </div>
            <!-- Notif -->
            <p style="color: red; font-style: italic" class="text-center"><?php echo $this->session->flashdata('konfirmasi'); ?></p>
            <!-- notif -->
            <div class="form-group">
              <label class="col-form-label" for="nama_beasiswa">Nama Beasiswa</label>
              <input type="text" class="form-control" name="nama_beasiswa" id="nama_beasiswa" value="<?php echo $this->session->userdata('nama_beasiswa'); ?>">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="deskripsi">Deskripsi Beasiswa</label>
              <textarea class="form-control" name="deskripsi" id="deskripsi"><?php echo $this->session->userdata('deskripsi'); ?></textarea>
            </div>
            <div class="form-group">
              <label class="col-form-label" for="syarat">Syarat Beasiswa</label>
              <textarea class="form-control" name="syarat" id="syarat"><?php echo $this->session->userdata('syarat'); ?></textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="tanggal_edit" id="tanggal_edit" value="<?php echo $this->session->userdata('tanggal_edit'); ?>">
            </div>
            <input onclick="return ambilTanggal()" class="btn btn-success" type="submit" name="submit" value="Simpan Perubahan">
            <!-- Notif -->
            <p style="color: red; font-style: italic" class="text-center"><?php echo $this->session->flashdata('gagal'); ?></p>
            <p style="color: blue; font-style: italic" class="text-center"><?php echo $this->session->flashdata('sukses'); ?></p>
            <!-- Notif -->
          </form>
        </div>
      </div>
    </div>
    <!-- Form Ubah -->  

    <script>
      
      function ambilTanggal(){
        var now = new Date();

        var format = now.getFullYear() + "-" + now.getMonth() + 1 + "-" + now.getDate() + " " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds(); 

        var x = document.getElementById("tanggal_edit").value = format;
      }

    </script>