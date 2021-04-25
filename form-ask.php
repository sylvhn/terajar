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

                    // if($kode == 0 || $kode==1){
                ?>
                <form method="POST" action="">
                    <div class="card-body">
                    <div class="form-group">
                        <label for="">1. Saya ingin mendatangi satu toko yang disarankan teman. Saya akan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="V" name="s1">
                          <label class="form-check-label">mencari toko itu berdasarkan tempat lain di sekitar situ yang sudah saya tahu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="A" name="s1">
                          <label class="form-check-label">bertanya pada teman yang tahu arah toko itu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="R" name="s1">
                          <label class="form-check-label">menuliskan alamat lengkap dan daftar belokan yang harus saya ingat.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="K" name="s1">
                          <label class="form-check-label">menggunakan peta yang menunjukkan lokasi toko itu.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">2. Suatu situs internet memiliki video mengenai cara membuat suatu grafik khusus. Di situs itu ada orang yang bicara, ada daftar langkah pembuatan video, dan ada beberapa diagram. Saya paling mengerti isi situs itu dengan cara:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s2" value="V">
                          <label class="form-check-label">mengamati diagram petunjuknya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s2" value="A">
                          <label class="form-check-label">mendengar suara yang menjelaskan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s2" value="R">
                          <label class="form-check-label">membaca instruksi yang tertulis.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s2" value="K">
                          <label class="form-check-label">melihat tindakan orangnya.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">3. Saya ingin mengetahui lebih dalam mengenai suatu tur wisata yang saya rencanakan. Saya akan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s3" value="V">
                          <label class="form-check-label">melihat detail kegiatan dan aktivitas yang akan dilakukan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s3" value="A">
                          <label class="form-check-label">melihat petanya dan mengamati lokasi-lokasi turnya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s3" value="R">
                          <label class="form-check-label">membaca perincian jadwal kegiatan tur tersebut.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s3" value="K">
                          <label class="form-check-label">bicara dengan pengelola atau peserta lain di tur itu.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">4. Dalam memilih karir atau jurusan pendidikan, yang penting bagi saya adalah:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s4" value="V">
                          <label class="form-check-label">aplikasi ilmu pada kondisi nyata yang dihadapi.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s4" value="A">
                          <label class="form-check-label">berkomunikasi dengan orang dengan berdiskusi.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s4" value="R">
                          <label class="form-check-label">pekerjaan yang memakai desain, peta, atau bagan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s4" value="K">
                          <label class="form-check-label">penggunaan kata yang tepat dalam komunikasi tertulis.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">5. Saat belajar, saya:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s5" value="V">
                          <label class="form-check-label">belajar dengan berdiskusi.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s5" value="A">
                          <label class="form-check-label">mencari pola tertentu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s5" value="R">
                          <label class="form-check-label">menggunakan contoh dan penerapan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s5" value="K">
                          <label class="form-check-label">membaca buku, artikel dan diktat.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">6. Saya ingin menabung lebih banyak dan mempertimbangkan beberapa cara. Saya akan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s6" value="V">
                          <label class="form-check-label">mempertimbangkan contohdari setiap cara penghematan berdasarkan kondisi keuangan saya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s6" value="A">
                          <label class="form-check-label">membaca brosur tertulis yang menjelaskan cara-cara berhemat secara detail.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s6" value="R">
                          <label class="form-check-label">memakai grafik yang menunjukkan variasi pilihan dan jangka waktu yang dibutuhkan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s6" value="K">
                          <label class="form-check-label">bicara dengan ahli keuangan mengenai cara-cara berhemat yang bisa ditempuh.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">7. Saya ingin mempelajari suatu jenis permainan kartu yang baru. Saya akan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s7" value="V">
                          <label class="form-check-label">melihat orang lain bermain sebelum saya ikut mencoba.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s7" value="A">
                          <label class="form-check-label">mendengar penjelasan orang serta bertanya padanya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s7" value="R">
                          <label class="form-check-label">memakai diagram yang menjelaskan tahap, langkah dan strategi permainannya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s7" value="K">
                          <label class="form-check-label">membaca petunjuk tertulis pada permainan itu.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">8. Saya mempunyai masalah jantung. Saya lebih suka dokter yang:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s8" value="V">
                          <label class="form-check-label">memberikan bacaan mengenai masalah yang saya hadapi.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s8" value="A">
                          <label class="form-check-label">memakai alat peraga jantung untuk menunjukkan masalah yang saya hadapi.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s8" value="R">
                          <label class="form-check-label">menguraikan masalah yang saya hadapi.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s8" value="K">
                          <label class="form-check-label">menunjukkan diagram mengenai masalah yang saya hadapi.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">9. Saya ingin mempelajari suatu program baru di komputer. Saya akan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s9" value="V">
                          <label class="form-check-label">membaca intruksi tertulis pada petunjuknya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s9" value="A">
                          <label class="form-check-label">bicara dengan orang yang paham tentang program itu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s9" value="R">
                          <label class="form-check-label">langsung mencoba dan belajar dari kesalahan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s9" value="K">
                          <label class="form-check-label">mengikuti diagram pada buku petunjuknya.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">10. Ketika belajar sesuatu dari internet, saya menyukai:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s10" value="V">
                          <label class="form-check-label">video cara melakukan atau membuat sesuatu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s10" value="A">
                          <label class="form-check-label">desain dan fitur visual yang menarik.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s10" value="R">
                          <label class="form-check-label">uraian tertulis, daftar dan penjelasan yang menarik.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s10" value="K">
                          <label class="form-check-label">situs dengan suara, siaran internet atau wawancara.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">11. Saya ingin mempelajari suatu proyek kerja yang baru. Saya akan meminta:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s11" value="V">
                          <label class="form-check-label">diagram yang berisi tahap-tahap proyek itu lengkap dengan bagan berisi manfaat dan biayanya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s11" value="A">
                          <label class="form-check-label">laporan tertulis yang menjelaskan bagian utama proyek tersebut.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s11" value="R">
                          <label class="form-check-label">kesempatan berdiskusi mengenai proyek tersebut.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s11" value="K">
                          <label class="form-check-label">contoh-contoh proyek serupa yang sudah berhasil.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">12. Saya ingin belajar cara memotret dengan lebih baik. Saya akan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s12" value="V">
                          <label class="form-check-label">bertanya dan berdiskusi mengenai kamera dan fiturnya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s12" value="A">
                          <label class="form-check-label">membaca instruksi tertulis mengenai cara pemakaian kamera itu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s12" value="R">
                          <label class="form-check-label">melihat diagram yang menunjukkan komponen kamera itu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s12" value="K">
                          <label class="form-check-label">melihat contoh hasil yang baik dan yang jelek dari kamera itu.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">13. Saya lebih suka pembicara yang dalam presentasinya menggunakan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s13" value="V">
                          <label class="form-check-label">peragaan, model peraga, atau kesempatan mencoba langsung.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s13" value="A">
                          <label class="form-check-label">kesempatan tanya jawab, diskusi kelompok atau pembicara tamu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s13" value="R">
                          <label class="form-check-label">cetakan diktat, buku atau bacaan lain.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s13" value="K">
                          <label class="form-check-label">diagram, bagan, peta atau grafik.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">14. Saya baru saja menyelesaikan suatu lomba atau suatu ujian dan saya ingin umpan balik orang lain. Saya mengharapkan:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s14" value="V">
                          <label class="form-check-label">umpan balik yang berisi contoh-contoh dari yang saya kerjakan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s14" value="A">
                          <label class="form-check-label">umpan balik berupa penjelasan tertulis mengenai hasil pekerjaan saya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s14" value="R">
                          <label class="form-check-label">umpan balik yang disampaikan langsung kepada saya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s14" value="K">
                          <label class="form-check-label">umpan balik dalam bentuk grafik mengenai hasil pekerjaan saya.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">15. Saya tertarik dengan suatu rumah atau apartemen. Sebelum berkunjung, saya ingin:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s15" value="V">
                          <label class="form-check-label">melihat video rumah atau apartemen itu.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s15" value="A">
                          <label class="form-check-label">berdiskusi dengan pemiliknya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s15" value="R">
                          <label class="form-check-label">keterangan tertulis mengenai kamar-kamar dan fiturnya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s15" value="K">
                          <label class="form-check-label">denah ruangan dan peta area sekitarnya.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">16. Saya ingin merakit satu set meja kayu yang belum jadi. Saya paling mengerti jika:</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s16" value="V">
                          <label class="form-check-label">mengikuti diagram instruksi yang dilampirkan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s16" value="A">
                          <label class="form-check-label">mendengar saran dari orang yang pernah merakitnya.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s16" value="R">
                          <label class="form-check-label">membaca penjelasan tertulis yang dilampirkan.</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="s16" value="K">
                          <label class="form-check-label">menonton video orang merakit meja yang serupa.</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary float-right">Kirim</button>
                    </div>
                </form>
                <?php 
                  if(isset($_POST['submit'])){

                    $v = 0.0;
                    $a = 0.0;
                    $r = 0.0;
                    $k = 0.0;
                    $s = "s";

                    $s1 = $_POST['s1'];
                    $s2 = $_POST['s2'];
                    $s3 = $_POST['s3'];
                    $s4 = $_POST['s4'];
                    $s5 = $_POST['s5'];
                    $s6 = $_POST['s6'];
                    $s7 = $_POST['s7'];
                    $s8 = $_POST['s8'];
                    $s9 = $_POST['s9'];
                    $s10 = $_POST['s10'];
                    $s11 = $_POST['s11'];
                    $s12 = $_POST['s12'];
                    $s13 = $_POST['s13'];
                    $s14 = $_POST['s14'];
                    $s15 = $_POST['s15'];
                    $s16 = $_POST['s16'];

                    echo $s1;

                    for($i=1;$i<=16;$i++){
                      $d = (string)$i;
                      
                      if(${$s.$d}=="V"){
                        $v++;
                      }else if(${$s.$d}=="A"){
                        $a++;
                      }else if(${$s.$d}=="R"){
                        $r++;
                      }else if(${$s.$d}=="K"){
                        $k++;
                      }
                      
                    }

                    $nV = $v/16.0*100;
                    $nA = $a/16.0*100;
                    $nR = $r/16.0*100;
                    $nK = $k/16.0*100;

                    $query = mysqli_query($koneksi,"UPDATE user SET visual='$nV', aural='$nA', readwrite='$nR', kinesthetic='$nK' WHERE id_user='$id'");

                    if($query){
                      echo "<script>alert('Menghitung Nilai');window.location.replace('nilai.php?id=".$id."');</script>";
                    }
                  }
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
