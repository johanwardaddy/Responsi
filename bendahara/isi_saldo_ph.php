<div class="panel-body">
  <div class="panel-footer active-menu">
    <h3>
      SALDO Penguraus Harian  Himpunan Mahasiswa Jurusan Teknik Informatika
    </h3>
  </div>
  <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>NPK</th>
              <th>Nama PH</th>
              <th>Saldo</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';
            $query=mysqli_query($koneksi,"SELECT * FROM tabungan_PH");
            $i=1;
            while ($data=mysqli_fetch_array($query)) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data[0]; ?></td>
                <td><?php echo $data[2]; ?></td>
                <td><?php echo $data[1]; ?></td>
                <td>
                  <a href="index.php?page=minph&npk=<?php echo $data[0];?>" class="btn btn-info btn-xs glyphicon glyphicon-minus"></a>
                  <a href="index.php?page=isiph&npk=<?php echo $data[0];?>" class="btn btn-success btn-xs glyphicon glyphicon-plus"></a>
                  <a href="index.php?page=lapph&npk=<?php echo $data[0];?>" class="btn btn-warning btn-xs glyphicon glyphicon-book"></a>
                </td>
              </tr>
              <?php
              $i++;
            }
            ?>
          </tbody>
      </table>
  </div>
</div>
