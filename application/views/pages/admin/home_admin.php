    <title>Admin | Beasiswa</title>

    <!-- CSS BOOTStrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet">

    <!-- CSS sendiri/custom -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/dasbor.css') ;?>">

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

    <!-- ISI -->
    <section class="isi">
      <div class="container text-center" style="min-height: 60rem;">

        <!-- Chart -->
        <div class="row">
          <div class="col-md-6 offset-md-2">
            <div id="columnchart_material" style="width: 800px; height: 500px; margin-top: 5rem; margin-bottom: 3rem;"></div>
          </div>
        </div>
        <!-- Akhir Chart -->

        <!-- Cards -->
        <div class="row">
          <div class="col-md-4 offset-md-2 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                Akun Beasiswa
              </div>
              <div class="card-body">
                <p class="card-text">Untuk melihat lengkapnya, silakan klik Lihat Detail</p>
                <a href="<?php echo site_url('Admin/tampil_akun'); ?>" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card">
              <div class="card-header">
                Pendaftar Beasiswa
              </div>
              <div class="card-body">
                <p class="card-text">Untuk melihat lengkapnya, silakan klik Lihat Detail</p>
                <a href="<?php echo site_url('Admin/tampil_beasiswa'); ?>" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Cards -->
      </div>
    </section>
    <!-- Akhir Isi -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Jumlah', 'Laki-laki', 'Perempuan'],
          ['Akun Beasiswa', <?php echo $jumlah_akun; ?>, <?php echo $jumlah_akun_laki; ?>, <?php echo $jumlah_akun_perempuan; ?>],
          ['Pendaftar Beasiswa', <?php echo $jumlah_beasiswa; ?>, <?php echo $jumlah_beasiswa_laki; ?>, <?php echo $jumlah_beasiswa_perempuan; ?>],
          ['Lolos Beasiswa', <?php echo $tampil_peserta_lolos; ?>, <?php echo $jumlah_peserta_lolos_laki; ?>, <?php echo $jumlah_peserta_lolos_perempuan; ?>]
        ]);

        var options = {
          chart: {
            title: 'Beasiswa <?php echo $this->session->userdata("nama_beasiswa"); ?>',
            subtitle: 'Analisis data sistem informasi Beasiswa',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    