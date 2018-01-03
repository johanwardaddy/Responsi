<?php
  include 'koneksi.php';
  //tambah kas hmj
  if(isset($_POST['ks_hmj'])){
      $uang=$_POST['uang'];
      $sumber=$_POST['sumber'];
      $dari=$_POST['dari'];
      $newsaldo=$saldo[1]+$uang;
      $sim_saldo=mysqli_query($koneksi,"UPDATE tabungan SET saldo_tab=$newsaldo WHERE id_tab='X2b'");
      $simpanLaporan=mysqli_query($koneksi,"INSERT INTO pemasukan_hmj(saldo_masuk, asal_masuk, tanggal_masuk,saldo_saat_itu,dari) VALUES ($uang,'$sumber',CURRENT_DATE,$newsaldo,'$dari')");
      if ($sim_saldo&&$simpanLaporan) {
         ?>
         <script type="text/javascript">
         alert("Berhasil Input Saldo");
            window.location.href = "index.php?page=ish";
         </script>
         <?php
      }else {
        echo "es";
      }
  }
  //kurang kas hmj
  if (isset($_POST['suang_keluar'])) {
      $uang=$_POST['uang_keluar'];
      $guna=$_POST['guna'];
      $dari=$_POST['dari'];
      $newsaldo=$saldo[1]-$uang;
      $sim_saldo=mysqli_query($koneksi,"UPDATE tabungan SET saldo_tab=$newsaldo WHERE id_tab='X2b'");
      $simpanLaporan=mysqli_query($koneksi,"INSERT INTO pengeluaran_hmj(`saldo_keluar`, `guna_keluar`, `tgl_keluar`, `saldo_saat_itu`,dari) VALUES ($uang,'$guna',CURRENT_DATE,$newsaldo,'$dari')");
      if ($sim_saldo&&$simpanLaporan) {
         ?>
         <script type="text/javascript">
         alert("Berhasil mengurangi saldo");
            window.location.href = "index.php?page=ksh";
         </script>
         <?php
      }else {
        echo "es";
      }
  }
  //tambah kas per ph
  if (isset($_POST['ks_ph'])) {
      $uang=$_POST['uang_ph'];
      $npk=$_POST['npk'];
      $saldo_ph=$_POST['saldo_ph'];
      $newsaldo=$saldo_ph+$uang;

      mysqli_query($koneksi,"INSERT INTO lap_ph(NPK, nominal, aksi, saldo_saat_itu, tanggal) VALUES ('$npk',$uang,'ambah Uang',$newsaldo,CURRENT_DATE)");
      $sim_saldo=mysqli_query($koneksi,"UPDATE tabungan_PH SET saldo_ph=$newsaldo WHERE npk='$npk'");
      if ($sim_saldo) {
        ?>
        <script type="text/javascript">
        alert("Berhasil menambah saldo ph");
           window.location.href = "index.php?page=isp";
        </script>
        <?php
      }
  }
  //minus kas ph per ph
  if (isset($_POST['min_ks_ph'])) {
      $uang=$_POST['uang_ph'];
      $npk=$_POST['npk'];
      $saldo_ph=$_POST['saldo_ph'];
      $newsaldo=$saldo_ph-$uang;

      mysqli_query($koneksi,"INSERT INTO lap_ph(NPK, nominal, aksi, saldo_saat_itu, tanggal) VALUES ('$npk',$uang,'Ambil Uang',$newsaldo,CURRENT_DATE)");
      $sim_saldo=mysqli_query($koneksi,"UPDATE tabungan_PH SET saldo_ph=$newsaldo WHERE npk='$npk'");
      if ($sim_saldo) {
        ?>
        <script type="text/javascript">
        alert("Berhasil menguragi saldo ph");
           window.location.href = "index.php?page=isp";
        </script>
        <?php
      }
  }
  //buku tabungan ph
  if (isset($_POST['lap_ks_ph'])) {
      $uang=$_POST['uang_ph'];
      $npk=$_POST['npk'];
      $saldo_ph=$_POST['saldo_ph'];
      $newsaldo=$saldo_ph-$uang;

      $sim_saldo=mysqli_query($koneksi,"UPDATE tabungan_PH SET saldo_ph=$newsaldo WHERE npk='$npk'");
      if ($sim_saldo) {
        ?>
        <script type="text/javascript">
        alert("Berhasil menguragi saldo ph");
           window.location.href = "index.php?page=isp";
        </script>
        <?php
      }
  }
  //tabah uang ph ke tabel
  if (isset($_POST['uang_pakai_ph'])) {
    $uang=$_POST['ambil_uang'];
    $qsaldoph=mysqli_query($koneksi,"SELECT * FROM tabungan_PH");
    if ($qsaldoph) {
      $totSaldoPakai=$saldopakai[1];
      $newsaldo=0;
      while ($saldoph=mysqli_fetch_array($qsaldoph)) {
        $newsaldo=$saldoph[1]-$uang;
        $totSaldoPakai=$totSaldoPakai+$uang;
        mysqli_query($koneksi,"UPDATE tabungan_PH SET saldo_ph=$newsaldo WHERE npk='$saldoph[0]'");
      }
      $cek=mysqli_query($koneksi,"UPDATE uang_ph_dipakai SET saldo_pakai=$totSaldoPakai WHERE id_saldo_pakai='212'");
      if ($cek) {
        ?>
        <script type="text/javascript">
           window.location.href = "index.php?page=ksp";
        </script>
        <?php
      }
    }
  }

  //proses input ke saldo keluar ph
  if (isset($_POST['uang_keluar_ph'])) {
      $uang=$_POST['uang_keluar'];
      $guna=$_POST['guna'];
      $newsaldo=$saldopakai[1]-$uang;
      $sim_saldo=mysqli_query($koneksi,"UPDATE uang_ph_dipakai SET saldo_pakai=$newsaldo WHERE id_saldo_pakai='212'");
      $simpanLaporan=mysqli_query($koneksi,"INSERT INTO pengeluaran_ph( `saldo_keluar_ph`, `guna_keluar_ph`, `tanggal_keluar_ph`)  VALUES ($uang,'$guna',CURRENT_DATE)");
      if ($sim_saldo&$simpanLaporan) {
        ?>
        <script type="text/javascript">
          alert("sukses update kas ph");
           window.location.href = "index.php?page=ksp";
        </script>
        <?php
      }
  }
  //logout
  if ($_GET['mentu']=="gawa") {
    session_start();
    session_destroy();
    ?>
    <script type="text/javascript">
       window.location.href = "mlebu.php";
    </script>
    <?php
  }
 ?>
