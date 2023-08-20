<?php
ob_start();
if (!defined('INDEX')) {
  include 'login/not-login.php';
} else {



  require_once '../CRUD/config.php';
  $query = "SELECT * FROM daftar";
  $select = $pdo->query($query);

?>
  <div class="pr-4 pl-4 pt-2">


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Siswa yang sudah mendaftar VSGA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">JWD Digitalent 2023</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr class='text-center align-items-center bg-gradient-blue'>
                      <th width='2' class='align-middle'>NO</th>
                      <th class='align-middle'>PAS FOTO</th>
                      <th class='align-middle'>NAMA</th>
                      <th class='align-middle'>ALAMAT</th>
                      <th class='align-middle'>JENIS KELAMIN</th>
                      <th class='align-middle'>AGAMA</th>
                      <th class='align-middle'>SEKOLAH ASAL</th>
                      <th class='align-middle'>AKSI</th>
                    </tr>
                  </thead>
                  <?php
                  $nomor = 1;
                  foreach ($select as $data) {
                    $no = $nomor++;
                    $id = $data['id'];
                    $foto = $data['foto'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];
                    $kelamin = $data['kelamin'];
                    $agama = $data['agama'];
                    $sekolah = $data['sekolah'];


                    echo "<tr class='text-center align-items-center'>";
                    echo "<td class='align-middle'>$no</td>";
                    echo "<td class='align-middle'><img src='../images/foto/$foto' width='100' height='100'></td>";
                    echo "<td class='align-middle'>$nama</td>";
                    echo "<td class='align-middle'>$alamat</td>";
                    echo "<td class='align-middle'>";
                    if ($kelamin == "L") {
                      echo "Laki-Laki";
                    } else {
                      echo "Perempuan";
                    }
                    echo "</td>";
                    echo "<td class='align-middle'>$agama</td>";
                    echo "<td class='align-middle'>$sekolah</td>";
                    echo '<td class="align-middle"><a class="pl-4 pr-4 btn btn-warning m-1" href="?page=form-edit&id=' . $id . '"><i class="fas fa-pen"> </i>&nbsp;&nbsp;Edit </a><a class="px-auto btn btn-danger m-1" onclick="confirmDelete(' . $id . ')"><i class="fas fa-trash-alt"></i> Hapus</a></td>';
                    echo "</tr>";
                  }
                  ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
}
?>

<script type="text/javascript">
  function confirmDelete(id) {
    Swal.fire({
      icon: 'warning',
      title: 'Apakah Anda yakin ingin menghapus data ini?',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user clicks "Ya, hapus!", proceed with the deletion
        window.location.href = '../CRUD/delete.php?id=' + id;
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      } else {
        // If the user clicks "Batal" or closes the dialog, do nothing
      }
    });
  }
</script>