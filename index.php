<?php include('header.php'); ?>

  <?php include('main-header.php'); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> TEST CARA BELAJAR</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Isi Data Diri Anda</h5>
              </div>
              <div class="card-body">
                <form class="form-horizontal" action="form-ask.php" method="POST" >
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <!-- <input type="hidden" class="form-control" id="" placeholder="" name="kode" value="0"> -->
                        <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="nama" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="" placeholder="Tanggal Lahir" name="tgl_lahir" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="" placeholder="Jurusan" name="jurusan" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Program Studi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="" placeholder="Program Studi" name="prodi" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Semester</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="" placeholder="Semester" name="semester" required>
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck2">
                          <label class="form-check-label" for="exampleCheck2">Remember me</label>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="submittest" class="btn btn-primary float-right">Mulai Test</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  

<?php include('footer.php'); ?>
