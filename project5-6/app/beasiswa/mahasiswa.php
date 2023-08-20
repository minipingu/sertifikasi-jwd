<?php 
  require_once '../CRUD/config.php';
  $query = "SELECT * FROM beasiswa";
  $select = $pdo->query($query); 
  

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pilihan Beasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Pilihan Beasiswa</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row m-3">
        <!-- col-md-6 -->
        <?php 
          $nomor = 1;
        foreach ($select as $data){
          $id = $data['id'];
          $nama = $data['nama'];
          $keterangan = $data['keterangan'];
          $link = $data['link'];
          echo "
       
            <div class='card card-primary card-outline'>
              <div class='card-header'>
                <h5 class='m-0'>$nomor. $nama</h5>
              </div>
              <div class='card-body'>
                <p class='card-text'>$keterangan</p>
                <a target='_blank' href='$link' class='btn btn-primary'>Website</a>
              </div>
            </div>
         
          ";
          $nomor++;
        }
        ?>
        <!-- /.col-md-6 -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
