<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Form Tambah Beasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Form Tambah Beasiswa</li>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title ">Silahkan input beasiswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../CRUD/beasiswa-insert.php" method="post"
              enctype="multipart/form-data">
              <div class="card-body">

                <div class="form-group row">
                  <label for="nama" class="col-sm-4 col-form-label">Nama Beasiswa</label>
                  <div class="col-sm-8">
                    <input required type="text" class="form-control" id="nama" placeholder="Nama Beasiswa" name="nama">
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="keterangan" class="col-sm-4 col-form-label">Deskripsi Beasiswa</label>
                  <div class="col-sm-8">
                    <textarea id="keterangan" class="form-control" rows="3" placeholder="Deskripsi"
                      name="keterangan"></textarea>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="link" class="col-sm-4 col-form-label">Website</label>
                  <div class="col-sm-8">
                    <input required type="url" class="form-control" id="link" placeholder="Website" name="link">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
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
