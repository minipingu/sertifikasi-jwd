<?php 
$query = "SELECT * FROM daftar";
$stmt = $pdo->prepare($query);
$stmt->execute();
$tabelhasil = $stmt->fetchAll(PDO::FETCH_ASSOC);
$rowTabelHasil = $stmt->rowCount();

if ($rowTabelHasil>0){
?>
<div class="content-wrapper" style="min-height: 1301.76px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>List Pengajuan Beasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">List Pengajuan</li>
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
          $nomor = 1;
          foreach ($tabelhasil as $hasil){
            $verifikasi = 'verifikasi';
            $tolak = 'tolak';
            
            echo "
          <div class='card'>
            <div class='card-header'>
              <h3 class='card-title'><strong>{$nomor}. {$hasil['beasiswa']}</strong></h3>
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
                    <td  class='";

                    if($hasil['status']==$verifikasi){
                      echo 'bg-info';
                    } elseif ($hasil['status'] == $tolak) {
                      echo 'bg-danger'; 
                    } else {
                    echo 'bg-warning';
                    }
                    
                    echo "'>{$hasil['status']}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class='card-footer'>
              <a 
              href='?page=hasil/admin&acc=verifikasi&id={$hasil['id']}' 
              onclick='return confirm(\"Anda yakin verifikasi?\");'>
              <button 
              class='btn btn-info m-2'";
              
              if($hasil['status']==$verifikasi) echo 'disabled';
              
              echo ">Verifikasi
              </button>
              </a>
              <a 
              href='?page=hasil/admin&acc=tolak&id={$hasil['id']}' 
              onclick='return confirm(\"Anda yakin tolak?\");'><button 
              class='btn btn-danger m-2'";
              
              if($hasil['status']==$tolak) echo 'disabled';
              
              echo ">Tolak
              </button></a>
            </div>
          </div>
            ";
            $nomor++;
          }

          //untuk acc pengajuan 
          if(isset($_GET['id']) && isset($_GET['acc'])){
            $id = $_GET['id'];
            $valueTombolReview = $_GET['acc'];

            if($valueTombolReview=='verifikasi'){
              $query = $pdo->prepare("UPDATE daftar SET status=? WHERE id=?");
              $query->bindParam(1, $valueTombolReview);
              $query->bindParam(2, $id);
              $query->execute();

              header("location:../app?page=hasil/admin");

            } elseif ($valueTombolReview=='tolak') {
              $query = $pdo->prepare("UPDATE daftar SET status=? WHERE id=?");
              $query->bindParam(1, $valueTombolReview);
              $query->bindParam(2, $id);
              $query->execute();

              header("location:../app?page=hasil/admin");
            }
            
          }

          
          
          
          ?>
          <!-- tombol edit dan delete kalau sempat
            <div class='card-footer'>
              <a href='../CRUD/update.php' class='btn btn-warning m-2'><i class='far fa-edit'></i> Edit Data</a>
              <a href='../CRUD/delete.php' class='btn btn-danger m-2'><i class='far fa-edit'></i> Batalkan Pengajuan </a>
            </div> -->
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
          <h1>Tidak ada data, belum ada mahasiswa yang mengajukan beasiswa</h1>
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
