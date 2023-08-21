<?php

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
function ipkUnderThree($underThree, $moreThanThree=""){
  if (intval($_SESSION['ipk'])<3){
    return $underThree;
  } else {
    return $moreThanThree;
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
          <div class="card <?= ipkUnderThree('card-danger','card-primary')?>">
            <div class="card-header">
              <h3 class="card-title ">

                <?= ipkUnderThree('Anda tidak bisa mendaftar karena IPK Anda kurang dari 3.0','Silahkan isi form di bawah ini')?>
              </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../CRUD/insert.php" method="post" enctype="multipart/form-data">
              <div class="card-body">

                <div class="form-group row">
                  <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                  <div class="col-sm-8">
                    <input required type="text" class="form-control" id="nama" placeholder="Nama" name="nama"
                      value='<?=$_SESSION['nama']?>'>
                  </div>
                </div>
                <hr>

                <div class="form-group row">
                  <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                  <div class="col-sm-8">
                    <input required type="text" class="form-control" id="nama" placeholder="NIM" name="nim"
                      value='<?=$_SESSION['nim']?>'>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="email" class="col-sm-4 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input required type="email" class="form-control" id="email" placeholder="Email" name="email"
                      value='<?=$_SESSION['email']?>'>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="handphone" class="col-sm-4 col-form-label">No. HP</label>
                  <div class="col-sm-8">
                    <input required type="number" class="form-control" id="handphone" placeholder="Nomor handphone"
                      name="handphone">
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="semester" class="col-sm-4 col-form-label">Semester saat ini</label>
                  <div class="col-sm-8">
                    <select required class="custom-select rounded-0" id="semester" name="semester">
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
                  <label for="ipk" class="col-sm-4 col-form-label">IPK terakhir</label>
                  <div class="col-sm-8">
                    <input required type="number" class="form-control" id="ipk" placeholder="IPK" name="ipk"
                      value='<?=$_SESSION['ipk']?>'>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="beasiswa" class="col-sm-4 col-form-label">Pilihan beasiswa</label>
                  <div class="col-sm-8">
                    <select <?= ipkUnderThree('disabled')?> required class="custom-select rounded-0" id="beasiswa"
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
                  <label for="berkas" class="col-sm-4 col-form-label">Upload Berkas Syarat</label>
                  <div class="col-sm-8 form-group">
                    <div class="custom-file">
                      <input <?= ipkUnderThree('disabled')?> required type="file" class="custom-file-input"
                        id="customFile" name="file">
                      <label class="custom-file-label" for="customFile">Format File (.jpeg/.png/.pdf)</label>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button <?= ipkUnderThree('disabled')?> type="submit" class="btn btn-primary">Simpan</button>
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
