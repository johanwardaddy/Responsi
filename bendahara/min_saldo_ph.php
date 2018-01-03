<?php
  include 'koneksi.php';
  $npk=$_GET['npk'];
  $query=mysqli_query($koneksi,"SELECT * FROM tabungan_PH WHERE NPK='$npk'");
  $data=mysqli_fetch_array($query);
  echo "<h1>saldo ".$data[2]."</h1>";
  ?>
  <form role="form" action="mumet.php" method="post">
    <div class="form-group">
        <label>Jumlah pengurangan</label>
        <input class="form-control" placeholder="masukkan dana  " name="uang_ph" required>
        <input type="hidden" name="npk" value="<?php echo $npk;?>">
        <input type="hidden" name="saldo_ph" value="<?php echo $data[1];?>">
    </div>
    <button type="submit" class="btn btn-default" name="min_ks_ph">Submit Button</button>
  </form>
  <?php
 ?>
