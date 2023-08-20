<?php
require_once '../CRUD/config.php';

$semester = [
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  8
];

$query = "SELECT * FROM beasiswa";
$beasiswa = $pdo->query($query);

//fungsi apabila ipk dibawah 3
function ipkUnderThree(){
  if (intval($_SESSION['ipk'])<3){
    return 'disabled';
  }
}

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Form Pendaftaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Form Pendaftaran</li>
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
        <div class="col-lg-8">
          <!-- card  -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Isi form dibawah ini untuk mendaftar beasiswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../CRUD/insert.php" method="post" enctype="multipart/form-data">
              <div class="card-body">

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Nama</label>
                  <div class="col-sm-8">
                    <input required type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="nama"
                      value='<?=$_SESSION['nama']?>'>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input required type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"
                      value='<?=$_SESSION['email']?>'>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">No. HP</label>
                  <div class="col-sm-8">
                    <input required type="number" class="form-control" id="inputPassword3" placeholder="Nomor handphone"
                      name="handphone">
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Semester saat ini</label>
                  <div class="col-sm-8">
                    <select required class="custom-select rounded-0" id="exampleSelectRounded0" name="semester">
                      <?php 
                        foreach ($semester as $angka){
                          echo "<option value='$angka'";
                          if( $_SESSION['semester']==$angka) echo "selected";
                          echo ">Semester $angka</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">IPK terakhir</label>
                  <div class="col-sm-8">
                    <input required type="number" class="form-control" id="inputPassword3" placeholder="IPK" name="ipk"
                      value='<?=$_SESSION['ipk']?>'>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Pilihan beasiswa</label>
                  <div class="col-sm-8">
                    <select <?= ipkUnderThree()?> required class="custom-select rounded-0" id="exampleSelectRounded0"
                      name="beasiswa">
                      <option hidden disabled selected value="">-- pilih beasiswa --</option>
                      <?php 
                        foreach ($beasiswa as $data){
                        echo "<option value='{$data["nama"]}'>{$data["nama"]}</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <hr>

                <div class="form-group row mb-1">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Upload Berkas Syarat</label>
                  <div class="col-sm-8">
                    <input <?= ipkUnderThree()?> required type="file" class="custom-file-input" id="customFile"
                      name="file">
                    <label class="custom-file-label mr-2 ml-2" for="customFile">Format File (.jpeg/.png/.pdf)</label>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button <?= ipkUnderThree()?> type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-default float-right">Reset</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- ./card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
