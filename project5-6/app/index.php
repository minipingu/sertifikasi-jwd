<?php
session_start();
ob_start();

if (empty($_SESSION['nama'])) {
    include 'login/not-login.php';
} else {
    define('INDEX', true);
?>
<!-- Head -->
<?php 
require_once './index_part/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <?php 
    require_once './index_part/prealoader.php'
    ?>

    <!-- Navbar -->
    <?php
    require_once './index_part/navbar.php'
    ?>

    <!-- Main Sidebar Container -->
    <?php 
    require_once './index_part/sidebar.php'
    ?>

    <!-- Content Wrapper. Contains page content -->
    <?php 
    require_once './router.php'
    ?>
    <!-- /.content-wrapper -->

    <!-- footer -->
    <?php
    require_once './index_part/footer.php';
}

if (isset($_GET['error'])) {
    if ($_GET['error'] == 0) {
        echo "<script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Data berhasil disimpan',
            showConfirmButton: false,
            timer: 1500
          })
        </script>";
    }
}
