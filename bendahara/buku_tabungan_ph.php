<?php
  include 'koneksi.php';
  $npk=$_GET['npk'];
  $query=mysqli_query($koneksi,"SELECT * FROM tabungan_PH WHERE NPK='$npk'");
  $dataSaldo=mysqli_fetch_array($query);
  echo "<h1>saldo ".$dataSaldo[2]." = Rp. ".$dataSaldo[1].",- </h1>";
  ?>
  <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Uang Keluar</th>
                <th>aksi</th>
                <th>saldo  saat itu</th>
                <th>tanggal</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $queryTab=mysqli_query($koneksi,"SELECT * FROM lap_ph WHERE NPK='$npk'");
              $i=1;
              $tot=0;
              while ($data=mysqli_fetch_array($queryTab)) {
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $data[1]; ?></td>
                  <td><?php echo $data[2]; ?></td>
                  <td><?php echo $data[3]; ?></td>
                  <td><?php echo $data[4]; ?></td>
                </tr>
                <?php
                $i++;
                $tot=$tot+$data[1];
              }
              ?>
            </tbody>
        </table>
    </div>
  </div>
