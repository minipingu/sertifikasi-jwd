<?php
ob_start();
if (!defined('INDEX')) {
  include 'login/not-login.php';
} else if ($_SESSION['role'] =='Mahasiswa') {
  require_once 'beranda/mahasiswa.php';

} else if ($_SESSION['role'] =='Admin') {
  require_once 'beranda/admin.php';
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
