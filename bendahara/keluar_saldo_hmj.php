<?php include 'koneksi.php'; ?>
<h1>PENGELUARAN HMJ TI</h1>
<div class="panel panel-primary text-center no-boder bg-color-white">
    <div class="panel-footer active-menu">
      <h3>
        SALDO Himpunan Mahasiswa Jurusan Teknik Informatika
      </h3>
    </div>
    <div class="panel-body">
        <i class="fa fa-money fa-3x"></i>
        <h1>Rp. <?php echo $saldo[1]; ?>,- </h1>
    </div>
    <div class="panel-footer">
      <form role="form" action="mumet.php" method="post">
        <div class="form-group">
          <label>Jumlah Pengeluaran</label>
            <input class="form-control" placeholder="masukkan dana" name="uang_keluar" required>
        </div>
        <div class="form-group">
            <label>Keperluan</label>
            <input class="form-control" placeholder="isi keperluan pembayaran" name="guna" required>
        </div>
        <div class="form-group">
          <label >saldo yang akan dipakai per PH</label>
          <select class="form-control" name="dari">
            <option value="NETWOKING">NETWOKING</option>
            <option value="SKIL DEVELOPMENT">SKIL DEVELOPMENT</option>
            <option value="INTERNAL">INTERNAL</option>
            <option value="Lain-Lain">Lain-Lain</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" name="suang_keluar">Submit Button</button>
        <button type="reset" class="btn btn-primary">Reset Button</button>
      </form>
    </div>
</div>
