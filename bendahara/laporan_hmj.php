    <div class="panel-body">
      <!-- dropdown laporan -->
      <form role="form" action="" method="post">
        <label >Pilih Laporan </label>
        <div class="form-group">
          <select class="form-control" name="lap">
            <option value="PEMASUKAN">PEMASUKAN</option>
            <option value="PENGELUARAN">PENGELUARAN</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" name="dari">
            <option value="TOTAL">TOTAL</option>
            <option value="NETWOKING">NETWOKING</option>
            <option value="SKIL DEVELOPMENT">SKIL DEVELOPMENT</option>
            <option value="INTERNAL">INTERNAL</option>
            <option value="Lain-Lain">Lain-Lain</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default" name="suang_keluar">Submit Button</button>
        </div>
      </form>
      <div class="table-responsive">
          <?php include 'vLapHMJ.php'; ?>
      </div>
      <div class="panel-footer active-menu">
        <h3>
          SALDO Himpunan Mahasiswa Jurusan Teknik Informatika
        </h3>
      </div>
      <div class="panel-footer">
        <h1>Rp. <?php include 'koneksi.php';echo $saldo[1]; ?>,- </h1>
      </div>
  </div>
