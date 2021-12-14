<h2 align="center">DATA PENDAFTARAN  BEASISWA</h2>
<a class="btn btn-primary" href="?page=pendaftaran&action=tambah" style="margin-bottom: 10px">Tambah Data</a>
<table class="table table-bordered"  style="margin-top: 10px" id="myTables">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tgl. Daftar</th>
        <th>Angkatan</th>
        <th>NIM</th>
        <th> Nama Mahasiswa </th>
        <th>Pendapatan Perbulan</th>
        <th>IPK</th>
        <th>Jumlah Saudara</th>
        <th></th>
      </tr>
    </thead>

    <tbody>

	<!-- awal proses menampilkan -->
    <?php
    $i=1;
    $sql = "SELECT pendaftaran.iddaftar,pendaftaran.tgldaftar,pendaftaran.tahun,pendaftaran.nim,mahasiswa.nmmahasiswa,pendaftaran.pendapatan,pendaftaran.ipk,pendaftaran.saudara
    FROM pendaftaran INNER JOIN mahasiswa ON pendaftaran.nim=mahasiswa.nim ORDER BY pendaftaran.tgldaftar DESC ";
        $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
    ?>
     <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row['tgldaftar']; ?></td>
      <td><?php echo $row['tahun']; ?></td>
      <td><?php echo $row['nim']; ?></td>
      <td ><?php echo $row['nmmahasiswa']; ?></td>
      <td ><?php echo $row['pendapatan']; ?></td>
      <td ><?php echo $row['ipk']; ?></td>
      <td ><?php echo $row['saudara']; ?></td>
	  <td align="center">
      <a class="btn btn-warning" href="?page=pendaftaran&action=update&iddaftar=<?php echo $row['iddaftar']; ?>">Edit</a>
      <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=pendaftaran&action=hapus&iddaftar=<?php echo $row['iddaftar']; ?>">Hapus</a>
    </td>
     </tr>
 <?php
     }
     $conn->close();
 ?>

  <!-- akhir proses menampilkan -->
   </tbody>
</table>
<a class="btn btn-primary" href="?page=perangkingan" style="margin-bottom: 10px">Pengumuman Beasiswa</a>
<a class="btn btn-primary" href="?page=persyaratan" style="margin-bottom: 10px">Persyaratan Beasiswa</a>
