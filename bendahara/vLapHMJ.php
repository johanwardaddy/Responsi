<!-- tabel -->
<?php
  include 'koneksi.php';
  $dari=$_POST['dari'];
  $totIsi=0;
  if ($_POST['lap']=="PEMASUKAN") {
    ?>
    <h1>LAPORAN PMASUKAN HMJ TI DIVISI <?php echo $dari ?></h1>
    <table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
    <th>#</th>
    <th>Uang Masuk</th>
    <th>sumber</th>
    <th>tanggal</th>
    <th>rekap saldo terakhir</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dari=="TOTAL") {
      $queryPerDvs=mysqli_query($koneksi,"SELECT * FROM pemasukan_hmj ");
    }else {
      $queryPerDvs=mysqli_query($koneksi,"SELECT * FROM pemasukan_hmj WHERE dari='$dari'");
    }
    $i=1;
    while ($data=mysqli_fetch_array($queryPerDvs)) {
      ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data[1]; ?></td>
        <td><?php echo $data[2]; ?></td>
        <td><?php echo $data[3]; ?></td>
        <td><?php echo $data[4]; ?></td>
      </tr>
      <?php
      $totIsi=$totIsi+$data[1];
      $i++;
    }
    ?>
    </tbody>
  </table><?php
  }else if($_POST['lap']=="PENGELUARAN"){?>
    <h1>LAPORAN PENGELUARAN HMJ TI DIVISI <?php echo $dari ?></h1>
    <table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
    <th>#</th>
    <th>Uang Keluar</th>
    <th>Keperluan</th>
    <th>tanggal</th>
    <th>rekap saldo terakhir</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dari==TOTAL) {
      $queryPerDvs=mysqli_query($koneksi,"SELECT * FROM pengeluaran_hmj ");
    }else {
      $queryPerDvs=mysqli_query($koneksi,"SELECT * FROM pengeluaran_hmj WHERE dari='$dari'");
    }
    $i=1;
    while ($data=mysqli_fetch_array($queryPerDvs)) {
      ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data[1]; ?></td>
        <td><?php echo $data[2]; ?></td>
        <td><?php echo $data[3]; ?></td>
        <td><?php echo $data[4]; ?></td>
      </tr>
      <?php
      $totIsi=$totIsi+$data[1];
      $i++;
    }
    ?>
    </tbody>
  </table><?php
  }
  else {
  }
  echo "TOTAL UANG : ".$totIsi;
 ?>
