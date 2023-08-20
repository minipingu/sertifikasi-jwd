<?php
ob_start();
if (!defined('INDEX')) {
  include 'login/not-login.php';
} else {
  require_once '../CRUD/config.php';

  $id_get = $_GET['id'];

  $query = $pdo->prepare("SELECT * FROM daftar WHERE id=?");
  $query->bindParam(1, $id_get);
  $query->execute();

  $result = $query->fetch(PDO::FETCH_ASSOC);

  $id = $result['id'];
  $nama = $result['nama'];
  $alamat = $result['alamat'];
  $kelamin = $result['kelamin'];
  $agama = $result['agama'];
  $sekolah = $result['sekolah'];

  $agama_opt = ["Islam", "Kristen Katolik", "Kristen Protestan", "Buddha", "Hindu", "Kong Hu cu"];



?>
<div class="row">

  <div class="col-md-6 col-sm-8 ml-5 mt-4">

    <h2>Ubah Data Peserta DTS VSGA</h2>
    <div class="card card-primary mt-4">
      <div class="card-header">
        <h3 class="card-title">Junior Web Developer 2023</h3>
      </div>



      <form class="form-horizontal ml-5 mr-5 mb-4 mt-4" action="../CRUD/update.php" method="post"
        enctype="multipart/form-data">

        <input type="hidden" id="nama" name="id" value="<?= $id ?>">

        <div class=" mb-3 row align-items-center">
          <label for="nama" class="col-sm-4 form-label">NAMA</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" minlength="3"
              maxlength="35" value="<?= $nama ?>" required>
          </div>
        </div>
        <hr>
        <div class="mb-3 row align-items-center">
          <label for="alamat" class="col-sm-4 form-label">ALAMAT</label>
          <div class="col-sm-8">
            <textarea class="form-control" id="alamat" style="height: 100px" name="alamat" placeholder="Alamat"
              minlength="10" maxlength="255" required><?= $alamat ?></textarea>
          </div>
        </div>
        <hr>
        <div class="mb-3 row align-items-center">

          <label for="kelamin" class="col-sm-4 form-label">JENIS KELAMIN</label>
          <div class="col-sm-3 form-check ml-3">
            <input type="radio" class="form-check-input" id="kelamin" name="kelamin" value="L" required
              <?php if ($kelamin == "L") echo "checked" ?>> Laki-laki
          </div>
          <div class="col-sm-4 form-check">
            <input type="radio" class="form-check-input" id="kelamin" name="kelamin" value="P" required
              <?php if ($kelamin == "P") echo "checked" ?>> Perempuan
          </div>
        </div>
        <hr>
        <div class="mb-3 row align-items-center">
          <label for="agama" class="col-sm-4 form-label">AGAMA</label>
          <div class="col-sm-8">
            <select class="custom-select" name="agama" id="agama" required>
              <?php
                foreach ($agama_opt as $a) {
                  echo "<option value='$a'";
                  if ($agama == $a) echo "selected";
                  echo ">$a</option>";
                }
                ?>
            </select>
          </div>
        </div>
        <hr>
        <div class="mb-3 row align-items-center">
          <label for="sekolah" class="col-sm-4 form-label">SEKOLAH ASAL</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Sekolah"
              value="<?= $sekolah ?>" required>
          </div>
        </div>
        <hr>
        <div class="align-items-center justify-content-between d-flex ">

          <button type="submit" class="btn btn-primary w-75 mr-5">UBAH</button>
          <button type="reset" class="btn btn-secondary w-25">RESET</button>

        </div>
      </form>
    </div>
  </div>
</div>

<?php
}
?>
