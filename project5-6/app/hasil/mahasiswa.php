<?php 
require_once '../CRUD/config.php';
$nim = $_SESSION['nim'];
$query = "SELECT * FROM daftar WHERE nim = :nim";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':nim', $nim);
$stmt->execute();
$tabelhasil = $stmt->fetchAll(PDO::FETCH_ASSOC);
$rowTabelHasil = $select->rowCount();

if ($rowTabelHasil>0){
?>
<div class="content-wrapper" style="min-height: 1301.76px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hasil Pengajuan Beasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Hasil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
          <?php 
          foreach ($tabelhasil as $hasil){
            echo "
          <div class='card'>
            <div class='card-header'>
              <h3 class='card-title'><strong>1. {$hasil['beasiswa']}</strong></h3>
            </div>
            <!-- /.card-header -->
            <div class='card-body p-0'>
              <table class='table table-striped text-left'>
                <thead>
                  <tr>
                    <th style='width: 10px'>id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>no. Handphone</th>
                    <th>Semester</th>
                    <th>IPK</th>
                    <th>Berkas</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class=''>
                    <td>{$hasil['id']}</td>
                    <td>{$hasil['nama']}</td>
                    <td>{$hasil['email']}</td>
                    <td>{$hasil['handphone']}</td>
                    <td>{$hasil['semester']}</td>
                    <td>{$hasil['ipk']}</td>
                    <td><a href='../app/uploads/{$hasil['berkas']}'>{$hasil['berkas']}</a></td>
                    <td>{$hasil['tanggal']}</td>
                    <td  class='bg-warning'>{$hasil['status']}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
            ";
          }
          
          ?>

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php
} else {
?>
<div class="content-wrapper" style="min-height: 1301.76px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hasil Pengajuan Beasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Hasil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
</div>
<?php   
}
?>
