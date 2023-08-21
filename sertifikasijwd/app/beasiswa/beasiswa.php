<?php 

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

        <!-- card -->
        <?php
        if ( $_SESSION['role']=='Admin'){
                echo "
                  <a href='?page=beasiswa/form-tambah' class='btn btn-primary mb-4'><i class='fas fa-plus-circle'></i> Tambah Beasiswa</a>
                ";
          }
        $nomor = 1;
        foreach ($select as $data) {
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
                <a target='_blank' href='$link' class='btn btn-success'>Website</a>
              </div>";
          
              
          if ( $_SESSION['role']=='Admin'){
                echo "
                <div class='card-footer'>
                  <a href='?page=beasiswa/form-edit&id=$id' class='btn btn-warning m-2'><i class='fas fa-edit'></i> Edit</a>
                  <a href='../CRUD/beasiswa-delete.php?id=$id' class='btn btn-danger m-2' onclick='return confirm(\"Anda yakin ingin menghapus?\");'><i class='fas fa-trash-alt'></i> Delete</a>
                </div>
                ";
          }
          echo "</div>";
          $nomor++;
        }
        ?>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
