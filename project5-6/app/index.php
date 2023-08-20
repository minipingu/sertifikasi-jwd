<?php
session_start();
ob_start();

if (empty($_SESSION['user'])) {
    include 'login/not-login.php';
} else {
    define('INDEX', true);
?>
    <?php include 'index_part/head.php' ?>

    <body class="hold-transition   sidebar-mini ">
        <div class="wrapper">

            <!-- Preloader -->
            <?php include 'index_part/prealoader.php' ?>

            <!-- Navbar -->
            <?php //include 'navbar.php' 
            ?>
            <!-- /.navbar -->
            <?php include 'index_part/sidebar.php' ?>
            <!-- Main Sidebar Container -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <?php // include 'content-header.php' 
                ?>
                <!-- Main content -->
                <?php // include 'main-content.php' 
                ?>
                <?php include 'router.php' ?>

                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->

            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <?php include 'index_part/footer.php' ?>
        </div>


    </body>

    </html>
<?php
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
