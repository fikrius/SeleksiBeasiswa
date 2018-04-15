    <title>Admin | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->

    <!-- Data Tables -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="<?php echo base_url('assets/bootstrap/img/logo.png'); ?>" style="width: 50px;">
        <a style="font-weight: bold;" class="navbar-brand" href="<?php echo site_url('Admin/index'); ?>">BEASISWA<span style="color: #fc9700;text-transform: uppercase;"><?php echo $this->session->userdata("nama_beasiswa"); ?></span></a>
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

    <!-- Judul -->
    <section class="judul text-left" style="margin-top: 7rem;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Akun yang terdaftar di sistem Beasiswa <span style="color: #fc9700;">PPA</span> :</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- Judul -->

    <!-- Tabel Jumlah User yang membuat akun -->
    <section class="jumlah-user">
      <div class="container" style="min-height: 45rem;">
        <div class="row-md-12">
          <table id="table_user" class="table table-hover">
            <thead>
              
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th class="text-center" scope="col">Nim</th>
                <th class="text-center" scope="col">Tanggal Lahir</th>
                <th class="text-center" scope="col">Jenis Kelamin</th>
                <th class="text-center" scope="col">Aksi</th>
              
            </thead>

            <tbody>
            	<?php $i = 1; ?>
            	<?php foreach($akun->result() as $row){ ?>
	                <tr>
	                  <td><?php echo $i; ?></td>
	                  <td><?php echo $row->nama; ?></td>
	                  <td class="text-center"><?php echo $row->nim; ?></td>
	                  <td class="text-center"><?php echo $row->tanggal_lahir; ?></td>
	                  <td class="text-center"><?php echo $row->jenis_kelamin; ?></td>
	                  <td class="text-center"><a href="<?php echo site_url('Admin/tampil_ubah_akun/'.$row->id_mhs); ?>" class="btn btn-primary">Ubah</a> | <a href="<?php echo site_url('Admin/hapus_akun/'.$row->id_mhs); ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">Hapus</a></td>
	                </tr>
	            	<?php $i++; ?>
            	<?php } ?>
            	
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Akhir tabel -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.2.1.min.js'); ?>"></script>

    <script>
      $(document).ready(function(){
          $('#table_user').DataTable();
      });
    </script>

    <!-- Include dataTables  -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js'); ?>"></script>