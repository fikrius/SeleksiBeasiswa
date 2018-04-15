    <title>Admin | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->

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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Admin/tampil_feedback'); ?>">Feedback<span class="badge badge-danger"><?php echo $jumlah_feedback; ?></span>
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

    <?php foreach($bea as $row){ ?>
      <!-- Form Ubah -->
      <section class="ubah" style="margin-top: 5rem;">
      	<div class="container mt-5">
      		<h4 class="text-center">Ubah data beasiswa mahasiswa yang terdaftar apabila terjadi kekeliruan input</h4>
      		<div class="row">
      			<div class="col-md-8 offset-md-2">
      				<form action="<?php echo base_url('Admin/ubah_beasiswa'); ?>" method="post">
      				          <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $row->id_bea; ?>">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="gaji">Gaji Ortu/bln</label>
                          <input type="text" class="form-control" name="gaji" id="gaji" value="<?php echo $row->gaji; ?>">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="saudara">Saudara</label>
                          <input type="text" class="form-control" name="saudara" id="saudara" value="<?php echo $row->saudara; ?>">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="jurusan">Jurusan</label>
                          <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?php echo $row->jurusan; ?>">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="ipk">Smt</label>
                          <input type="text" class="form-control" name="semester" id="semester" value="<?php echo $row->semester; ?>">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label" for="ipk">IPK</label>
                          <input type="text" class="form-control" name="ipk" id="ipk" value="<?php echo $row->ipk; ?>">
                        </div>
                        <div class="form-group">
                          <input type="submit" name="submit" class="btn btn-lg btn-primary" value="Ubah Data">
                        </div>
              </form>
      			</div>
      		</div>
      	</div>
      </section>
      <!-- akhir form -->
    <?php } ?>
