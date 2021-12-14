<h1 align="center"> DATA MAHASISWA </h1>
<a class="btn btn-primary" href="?page=mahasiswa&action=tambah" style="margin-bottom: 10px">Tambah Data</a>
<table class="table table-bordered" style="margin-top: 10px">
    <thead>
      <tr>
        <th width="150px">NIM</th>
        <th width="300px">Nama Mahasiswa</th>
        <th width="200px">Alamat</th>
        <th width="200px">Nomer Telfon</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

	<!-- awal proses menampilkan data -->

        <?php
        $sql = "SELECT * FROM mahasiswa ORDER BY nim ASC";
        $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nmmahasiswa']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['telp']; ?></td>
                <td align="center">
                    <a class="btn btn-warning" href="?page=mahasiswa&action=update&nim=<?php echo $row['nim']; ?>">Edit</a>
                    <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=mahasiswa&action=hapus&nim=<?php echo $row['nim']; ?>">Hapus</a>
                </td>
            </tr>
    <?php
        }
        $conn->close();
    ?>

    <!-- akhir menampilkan data -->

   </tbody>
</table>