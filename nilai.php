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
    <?php
    require_once('koneksi.php');
    $id = $_GET['id'];
    $q = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
    $r = mysqli_fetch_array($q);
    ?>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">PENILAIAN TEST CARA BELAJAR</h5>
              </div>
              <div class="card-body">
                <b>Nama :</b> <?=$r['nama'];?>
                <hr>
                <b>Tanggal Lahir :</b> <?=$r['tgl_lahir'];?>
                <hr>
                <b>Jurusan :</b> <?=$r['jurusan'];?>
                <hr>
                <b>Prodi :</b> <?=$r['prodi'];?>
                <hr>
                <b>Semester :</b> <?=$r['semester'];?>
                <hr>
                <div class="row">
                <div class="col-md-6">
                    <blockquote>
                        
                        
                        <p style="font-weight:bold;">
                        Cara Belajar Anda Termasuk Kategori 
                        <?php
                            $max = max($r['visual'],$r['aural'],$r['readwrite'],$r['kinesthetic']);
                            
                            $cek = 0;
                            $v = 0; $a = 0; $rw = 0; $k = 0;

                            if($r['visual'] == $max){
                                echo " Visual";
                                $cek++;
                                $v = 1;
                            }
                            if($r['aural'] == $max){
                                if($cek==0){
                                    echo " Aural";
                                }else
                                echo " dan Aural";
                                $cek++;
                                $a = 1;
                            }
                            if($r['readwrite'] == $max){
                                if($cek==0){
                                    echo " Read Write";
                                }else
                                echo " dan Read Write";
                                $cek++;
                                $rw = 1;
                            }
                            if($r['kinesthetic'] == $max){
                                if($cek==0){
                                    echo " Kinesthetic";
                                }else
                                echo " dan Kinesthetic";
                                $cek++;
                                $k = 1;
                            }
                        ?>
                        </p>
                        <!-- <small>Someone famous in </small> -->
                    </blockquote>
                    <div id="accordion">
                        <?php if($v==1){ ?>
                        <div class="card card-danger">
                            <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                Visual
                                </a>
                            </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Tips Belajar:
                                <ul>
                                    <li>Menggunakan gambar, video, poster, slide yang menekankan pada desain (bukan suara atau kata-kata atau isinya).</li>
                                    <li>Gunakan buku dengan diagram dan gambar.</li>
                                    <li>Gunakan peta dan rencana yang digambar bebas.</li>
                                    <li>Menggunakan diagram alur, pohon keputusan, pohon keluarga, bagan organisasi, grafik.</li>
                                    <li>Mengubah tabel gambar menjadi grafik.</li>
                                    <li>Membaca kata-kata tersebut dan mengubahnya menjadi diagram yang Anda rancang sendiri.</li>
                                    <li>Gunakan font berbeda, huruf UPPER dan huruf kecil, garis bawah, warna berbeda, dan sorotan.</li>
                                    <li>Gunakan simbol @, #, & dan spasi; spasi ekstra antara teks dan diagram.</li>
                                    <li>Coba pengaturan spasial yang berbeda di halaman.</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <?php } if($a==1){ ?>
                        <div class="card card-warning">
                            <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                Aural
                                </a>
                            </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Tips Belajar:
                                <ul>
                                    <li>Bergabunglah atau buat grup diskusi. Diskusikan topik dengan orang lain. Perdebatkan kasusAnda.</li>
                                    <li>Komentari ide segera setelah Anda mendapat kesempatan. Ulangi informasi kepada orang lain dangunakan suara Anda untuk menunjukkan penekanan Anda.</li>
                                    <li>Jelaskan ide-ide baru kepada orang lain. Lihat ide mereka dengan ide Anda.</li>
                                    <li>Dengarkan self-talk Anda, lakukan percakapan dengan diri Anda sendiri.</li>
                                    <li>Gunakan perekam suara, dengarkan podcast.</li>
                                    <li>Geser gambar dan grafik apa pun untuk mengobrol dan mengobrol.</li>
                                    <li>Perhatikan saat orang lain berbicara. Anda terkadang berpura-pura mendengarkan sambilmempersiapkan tanggapan Anda.</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <?php } if($rw==1){ ?>
                        <div class="card card-primary">
                            <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                Read Write
                                </a>
                            </h4>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Tips Belajar:
                                <ul>
                                    <li>Gunakan daftar.</li>
                                    <li>Gunakan judul dan tajuk yang menjelaskan hal-hal berikut dengan jelas.</li>
                                    <li>Gunakan poin-poin dan paragraf bernomor.</li>
                                    <li>Menggunakan kamus dan glosarium, artikel tentang tren penggunaan kata.</li>
                                    <li>Cek ejaan; memperbaiki kesalahan bahasa tertulis.</li>
                                    <li>Baca handout.</li>
                                    <li>Membaca buku yang padat dengan teks, esai, manual, daftar bacaan.</li>
                                    <li>Menggunakan definisi, konstitusi, dokumen hukum, risalah dan aturan.</li>
                                    <li>Menulis catatan (sering kali kata demi kata).</li>
                                    <li>Mendapatkan informasi dari orang-orang yang menggunakan kata-kata dengan baik dan memilikibanyak informasi dalam kalimatnya.</li>
                                    <li>Saat Anda mendengarkan, pilah apa yang mereka katakan ke dalam kategori dan daftar Anda sendiri.</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <?php } if($k==1){ ?>
                        <div class="card card-success">
                            <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                Kinesthetic
                                </a>
                            </h4>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Tips Belajar:
                                <ul>
                                    <li>Gunakan semua indra Anda - penglihatan, sentuhan, rasa, penciuman, pendengaran.</li>
                                    <li>Gunakan pendekatan langsung.</li>
                                    <li>Baca studi kasus.</li>
                                    <li>Menonton video, terutama yang menunjukkan hal-hal nyata.</li>
                                    <li>Lihat pameran (contoh: foto).</li>
                                    <li>menghadiri sesi laboratorium dan praktik.</li>
                                    <li>Gunakan survei, kunjungan lapangan dan wawancara.</li>
                                    <li>Gunakan resep dan solusi untuk masalah.</li>
                                    <li>Perhatikan contoh kehidupan nyata dan kisah pribadi.</li>
                                    <li>Cari contoh prinsip.</li>
                                    <li>Belajar dengan trial and error.</li>
                                    <li>Carilah kesempatan untuk menerapkan apa yang telah Anda pelajari.</li>
                                    <li>Gunakan tindakan untuk membantu pemahaman Anda.</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <?php } ?> 
                        </div>
                    </div>
                <div class="col-md-6">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Predikat</th>
                        <th>Progress</th>
                        <th style="width: 40px">Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1.</td>
                        <td>Visual</td>
                        <td>
                            <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: <?=$r['visual'];?>%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-danger"><?=$r['visual'];?>%</span></td>
                        </tr>
                        <tr>
                        <td>2.</td>
                        <td>Aural</td>
                        <td>
                            <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: <?=$r['aural'];?>%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning"><?=$r['aural'];?>%</span></td>
                        </tr>
                        <tr>
                        <td>3.</td>
                        <td>Read Write</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-primary" style="width: <?=$r['readwrite'];?>%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary"><?=$r['readwrite'];?>%</span></td>
                        </tr>
                        <tr>
                        <td>4.</td>
                        <td>Kinesthetic</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-success" style="width: <?=$r['kinesthetic'];?>%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-success"><?=$r['kinesthetic'];?>%</span></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                
                </div>
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
