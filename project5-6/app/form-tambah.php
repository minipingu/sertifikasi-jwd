<?php
if (!defined('INDEX')) {
  include 'login/not-login.php';
} else {

  $agama = ["Islam", "Kristen Katolik", "Kristen Protestan", "Buddha", "Hindu", "Kong Hu cu"]
?>
  <div class="row">
    <div class="col-md-6 col-sm-8 ml-5 mt-4">
      <h2>Form Input Peserta DTS VSGA</h2>
      <div class="card card-primary mt-4">
        <div class="card-header">
          <h3 class="card-title">Junior Web Developer 2023</h3>
        </div>
        <form class="form-horizontal ml-5 mr-5 mb-4 mt-4" action="../CRUD/insert.php" method="post" enctype="multipart/form-data">

          <div class=" mb-3 row align-items-center">
            <label for="foto" class="col-sm-4 form-label">PAS FOTO</label>
            <div class="col-sm-8">
              <div class="form-group">

                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="file" accept="image/png, image/jpeg">
                  <label class="custom-file-label" for="customFile">Pilih foto (.jpeg/.png)</label>
                </div>
              </div>
            </div>
          </div>

          <div class=" mb-3 row align-items-center">
            <label for="nama" class="col-sm-4 form-label">NAMA</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" minlength="3" maxlength="35" required>
            </div>
          </div>
          <hr>
          <div class="mb-3 row align-items-center">
            <label for="alamat" class="col-sm-4 form-label">ALAMAT</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="alamat" style="height: 100px" name="alamat" placeholder="Alamat" minlength="10" maxlength="255" required></textarea>
            </div>
          </div>
          <hr>
          <div class="mb-3 row align-items-center">

            <label for="kelamin" class="col-sm-4 form-label">JENIS KELAMIN</label>
            <div class="col-sm-3 form-check ml-3">
              <input type="radio" class="form-check-input" id="kelamin" name="kelamin" value="L" required> Laki-laki
            </div>
            <div class="col-sm-4 form-check">
              <input type="radio" class="form-check-input" id="kelamin" name="kelamin" value="P" required> Perempuan
            </div>
          </div>
          <hr>
          <div class="mb-3 row align-items-center">
            <label for="agama" class="col-sm-4 form-label">AGAMA</label>
            <div class="col-sm-8">
              <select class="custom-select" name="agama" id="agama" required>
                <option value="" selected disabled> --Pilih Agama-- </option>
                <?php
                foreach ($agama as $a) {
                  echo "<option value='$a'>$a</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <hr>
          <div class="mb-3 row align-items-center">
            <label for="sekolah" class="col-sm-4 form-label">SEKOLAH ASAL</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Sekolah" required>
            </div>
          </div>
          <hr>
          <div class="align-items-center justify-content-between d-flex ">

            <button type="submit" class="btn btn-primary w-75 mr-5">DAFTAR</button>
            <button type="reset" class="btn btn-secondary w-25">RESET</button>

          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Error!',
      text: 'File yang diunggah bukan gambar!',
    })
  </script>
<?php
}

if (isset($_GET['error'])) {
  if ($_GET['error'] == 0) {
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: 'Oops...',
      text: 'Something went wrong!',
    })
    </script>";
  } elseif ($_GET['error'] == 1) {
    echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Foto gagal di-unggah!',
    })
    </script>";
  } elseif ($_GET['error'] == 2) {
    echo "<script>
    Swal.fire({
      icon: 'warning',
      title: 'Error!',
      text: 'File yang diunggah bukan gambar!',
    })
    </script>";
  }
}
