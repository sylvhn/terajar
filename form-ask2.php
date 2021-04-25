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
                <h5 class="card-title m-0">Jawab Pertanyaan Sesuai Diri Anda</h5>
              </div>
              <div class="card-body">
                
                <?php 
                    session_start();
                    $kode = $_GET['kode'];

                    require_once('koneksi.php');
                    if(isset($_POST['submittest'])){
                        $nama = $_POST['nama'];
                        $tgl_lahir = $_POST['tgl_lahir'];
                        $jurusan = $_POST['jurusan'];
                        $prodi = $_POST['prodi'];
                        $semester = $_POST['semester'];   
                        
                        $query = mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$tgl_lahir','$jurusan','$prodi','$semester','','','','')");
                    }
                    $q = mysqli_query($koneksi,"SELECT * FROM user ORDER BY id_user DESC LIMIT 1");
                    $r = mysqli_fetch_array($q);
                    $id = $r['id_user'];

                    if($kode == 0 || $kode==1){
                ?>
                <form method="POST" action="">
                    <div class="card-body">
                    <div class="form-group">
                        <label for="">1. Saya ingin mendatangi satu toko yang disarankan teman. Saya akan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="V" name="s1">
                          <label class="form-check-label">mencari toko itu berdasarkan tempat lain di sekitar situ yang sudah saya tahu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="A" name="s1">
                          <label class="form-check-label">bertanya pada teman yang tahu arah toko itu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="R" name="s1">
                          <label class="form-check-label">menuliskan alamat lengkap dan daftar belokan yang harus saya ingat.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="K" name="s1">
                          <label class="form-check-label">menggunakan peta yang menunjukkan lokasi toko itu.</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit1" class="btn btn-primary float-right">Selanjutnya</button>
                    </div>
                </form>
                <?php 
                    if(isset($_POST['submit1'])){
                        
                    }
                    }else if($kode==2){} ?>
                <form method="POST" action="">
                    
                    
                </form>
                <?php 
                //   if(isset($_POST['submit'])){

                //     $v = 0.0;
                //     $a = 0.0;
                //     $r = 0.0;
                //     $k = 0.0;
                //     $s = "s";

                //     $s1 = $_POST['s1'];
                //     $s2 = $_POST['s2'];
                //     $s3 = $_POST['s3'];
                //     $s4 = $_POST['s4'];
                //     $s5 = $_POST['s5'];
                //     $s6 = $_POST['s6'];
                //     $s7 = $_POST['s7'];
                //     $s8 = $_POST['s8'];
                //     $s9 = $_POST['s9'];
                //     $s10 = $_POST['s10'];
                //     $s11 = $_POST['s11'];
                //     $s12 = $_POST['s12'];
                //     $s13 = $_POST['s13'];
                //     $s14 = $_POST['s14'];
                //     $s15 = $_POST['s15'];
                //     $s16 = $_POST['s16'];

                //     echo $s1;

                //     for($i=1;$i<=16;$i++){
                //       $d = (string)$i;
                      
                //       if(${$s.$d}=="V"){
                //         $v++;
                //       }else if(${$s.$d}=="A"){
                //         $a++;
                //       }else if(${$s.$d}=="R"){
                //         $r++;
                //       }else if(${$s.$d}=="K"){
                //         $k++;
                //       }
                      
                //     }

                //     $nV = $v/16.0*100;
                //     $nA = $a/16.0*100;
                //     $nR = $r/16.0*100;
                //     $nK = $k/16.0*100;

                //     $query = mysqli_query($koneksi,"UPDATE user SET visual='$nV', aural='$nA', readwrite='$nR', kinesthetic='$nK' WHERE id_user='$id'");

                //     if($query){
                //       echo "<script>alert('Menghitung Nilai');window.location.replace('nilai.php?id=".$id."');</script>";
                //     }
                //   }
                ?>

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
