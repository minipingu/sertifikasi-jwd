<?php 

//mengambil data pendaftaran
$query_daftar = "SELECT * FROM daftar";
$select_daftar = $pdo->query($query_daftar);
//jumlah pendaftaran
$rowCountDaftar = $select_daftar->rowCount();

//mengambil data mahasiswa
$query_mahasiswa = "SELECT * FROM mahasiswa";
$select_mahasiswa = $pdo->query($query_mahasiswa);
//jumlah pendaftaran
$rowCountMahasiswa = $select_mahasiswa->rowCount();

//mengambil data beasiswa
$query_beasiswa = "SELECT * FROM beasiswa";
$select_beasiswa = $pdo->query($query_beasiswa);
//jumlah beasiswa
$rowCountBeasiswa = $select_beasiswa->rowCount();
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?=$rowCountDaftar?></h3>
              <p>Pengajuan Beasiswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-list"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?=$rowCountMahasiswa?></h3>
              <p>Total Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?=$rowCountBeasiswa?></h3>
              <p>Macam Beasiswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-university"></i>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
