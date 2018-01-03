<h1>PENGELUARAN PENGURUS HARIAN</h1>
<?php include 'koneksi.php'; ?>
<div class="panel panel-primary text-center no-boder bg-color-white">
    <div class="panel-footer active-menu">
      <h3>
        Seluruh Saldo Pengurus Harian Himpunan Mahasiswa Jurusan Teknik Informatika
      </h3>
    </div>
    <div class="panel-body">
        <i class="fa fa-money fa-3x"></i>
        <h1>saldo keseluruhan Rp. <?php echo $totSaldoPh; ?>,- </h1>
    </div>
    <!-- saldo keseluruhan ph -->
    <?php
      if ($saldopakai[1]>0) {
        ?>
        <h1>saldo yang dapat di pakai Rp. <?php echo $saldopakai[1]; ?>,- </h1>
        <div class="panel-footer">
          <form role="form" action="mumet.php" method="post">
            <div class="form-group">
              <label>Jumlah Pengeluaran * tidak boleh lebih besar dari Rp.<?php echo $saldopakai[1]; ?>,- </label>
              <input class="form-control" placeholder="masukkan dana" name="uang_keluar" required>
            </div>
            <div class="form-group">
              <label>Keperluan</label>
              <input class="form-control" placeholder="isi keperluan pembayaran" name="guna" required >
            </div>
            <button type="submit" class="btn btn-default" name="uang_keluar_ph">Submit Button</button>
            <button type="reset" class="btn btn-primary">Reset Button</button>
          </form>
        </div>
        <?php
      }else {
        echo "<h1>saldo pakai habis silahkan isi di bawah ini !!</h1>";
      }
     ?>

    <!-- input ke saldo ph yang dapat di gunakan -->
    <div class="panel-footer active-menu" >
      <form role="form" action="mumet.php" method="post">
        <div class="form-group">
          <label >saldo yang akan dipakai per PH</label>
          <select class="form-control" name="ambil_uang">
            <option value="500">500</option>
            <option value="1000">1000</option>
            <option value="2000">2000</option>
            <option value="5000">5000</option>
            <option value="10000">10000</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" name="uang_pakai_ph">Submit Button</button>
      </form>
    </div>
</div>
