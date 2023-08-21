<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="https://i.pinimg.com/originals/6e/85/14/6e85140a1ac9412a19955b2e43473cf4.jpg" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><strong>KAMPUSKUaja.ac.id</strong></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src=<?= $_SESSION['foto'] ?> class="img-circle elevation-2" alt="User Image" style="width:4rem;">
      </div>
      <div class="info">
        <a href="index.php" class="d-block"><?= $_SESSION['nama'] ?></a>
        <div class="d-block text-primary"><?= $_SESSION['role'] ?></div>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar" data-widget=" treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

        <?php
        // untuk menambahkan class active di menu jika terpilih
        function active ($page){
          $isset = isset($_GET['page']);
          if ($isset) {
            if ($_GET['page']==$page){
              return "active";
            }
          }
        }
        ?>

        <li class="nav-item mt-2">
          <a href="index.php" class="nav-link 
            <?php echo (isset($_GET['page']) ? "" : "active "); ?>
          ">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>

        <li class="nav-item mt-2 ">
          <a href="?page=beasiswa/beasiswa" class="nav-link 
            <?= active("beasiswa/beasiswa") ?>
          ">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>
              Pilihan Beasiswa
            </p>
          </a>
        </li>
        <?php 
        if($_SESSION['role']=='Mahasiswa'){ 
          echo '<li class="nav-item mt-2 ">
          <a href="?page=daftar/mahasiswa" class="nav-link';
          echo active("daftar/mahasiswa");
          echo '">
          <i class="nav-icon fas fa-user-graduate"></i>
          <p>
            Daftar
          </p>
          </a>
          </li>';
          echo '<li class="nav-item mt-2 ">
          <a href="?page=hasil/mahasiswa" class="nav-link ';
          echo active("hasil/mahasiswa");
          echo'">
            <i class="nav-icon fas fa-clipboard-check"></i>
            <p>
              Hasil
            </p>
          </a>
          </li>';
        
        } elseif($_SESSION['role']=='Admin') {
           echo '<li class="nav-item mt-2 ">
          <a href="?page=hasil/admin" class="nav-link ';
          echo active("hasil/admin");
          echo'">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              List Pengajuan
            </p>
          </a>
          </li>';
        }
        ?>





        <li class="nav-item mt-2 ">
          <a href="?page=logout" class="nav-link
          <?php  ?>
          ">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Log Out
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
