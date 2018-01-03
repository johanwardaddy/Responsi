<div class="panel-body">
  <div class="table-responsive">
    <h1>LAPORAN PENGELUARAN PENGURUS HARIAN</h1>
      <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Uang Keluar</th>
              <th>Keperluan</th>
              <th>tanggal</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';
            $query=mysqli_query($koneksi,"SELECT * FROM pengeluaran_ph");
            $i=1;
            while ($data=mysqli_fetch_array($query)) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data[1]; ?></td>
                <td><?php echo $data[2]; ?></td>
                <td><?php echo $data[3]; ?></td>
              </tr>
              <?php
              $i++;
            }
            ?>
          </tbody>
      </table>
  </div>
  <div class="panel-footer active-menu">
    <h3>
      SALDO Pengurus Harian Himpunan Mahasiswa Jurusan Teknik Informatika
    </h3>
  </div>
  <div class="panel-footer">
    <h1>saldo keseluruhan Rp. <?php echo $totSaldoPh; ?>,- </h1>
    <h1>saldo yang dapat di pakai Rp. <?php echo $saldopakai[1]; ?>,- </h1>
  </div>
</div>
