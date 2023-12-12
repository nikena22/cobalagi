<h2>kendaraan</h2>

<a href="<?php echo URL; ?>/kendaraan/input" class="btn">Input Kendaraan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NOMOR POLISI</th>
            <th>WARNA</th>
            <th>JUMLAH</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['nomor_polisi']; ?></td>
                  <td><?php echo $row['warna']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><a href="<?php echo URL; ?>/kendaraan/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/kendaraan/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>