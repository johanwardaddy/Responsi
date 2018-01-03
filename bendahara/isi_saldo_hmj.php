<h1>ISI SALDO HMJ TI</h1>
  <form role="form" action="mumet.php" method="post">
    <div class="form-group">
        <label>Jumlah Pemasukan</label>
        <input class="form-control" placeholder="masukkan dana  " name="uang" required>
    </div>
    <div class="form-group">
        <label>Sumber Pemasukan</label>
        <input class="form-control" placeholder="isi sumber pemasukan" name="sumber" required>
    </div>
    <div class="form-group">
      <label >saldo yang akan dipakai oleh</label>
      <select class="form-control" name="dari">
        <option value="NETWOKING">NETWOKING</option>
        <option value="SKIL DEVELOPMENT">SKIL DEVELOPMENT</option>
        <option value="INTERNAL">INTERNAL</option>
        <option value="Lain-Lain">Lain-Lain</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default" name="ks_hmj">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
  </form>
