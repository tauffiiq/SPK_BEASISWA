<h2 align="center">PENGUMUMAN BEASISWA</h2>
<h2> </h2>
<table class="table table-bordered"  style="margin-top: 10px" id="myTables">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tgl. Daftar</th>
        <th>Tahun</th>
        <th>NIM</th>
        <th> Nama Mahasiswa </th>
        <th>Pendapatan</th>
        <th>IPK</th>
        <th>Saudara</th>
      </tr>
    </thead>
    <tbody>

	<!-- awal proses menampilkan -->
    
    <?php
    //Hasil akhir
    $i=1;
      $sql = "SELECT pendaftaran.iddaftar,pendaftaran.tgldaftar,pendaftaran.tahun,pendaftaran.nim,mahasiswa.nmmahasiswa,pendaftaran.pendapatan,pendaftaran.ipk,pendaftaran.saudara
              FROM pendaftaran INNER JOIN mahasiswa ON pendaftaran.nim=mahasiswa.nim 
              WHERE ipk>=3.00 AND saudara>=2 AND pendapatan<=1000000 ORDER BY iddaftar DESC LIMIT 10";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
    ?>
     <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row['tgldaftar']; ?></td>
      <td><?php echo $row['tahun']; ?></td>
      <td><?php echo $row['nim']; ?></td>
      <td><?php echo $row['nmmahasiswa']; ?></td>
      <td><?php echo $row['pendapatan']; ?></td>
      <td><?php echo $row['ipk']; ?></td>
      <td><?php echo $row['saudara']; ?></td>
     </tr>
 <?php
     }
     $conn->close();
 ?>

  <!-- akhir proses menampilkan -->
   </tbody>
</table>
<a class="btn btn-primary" href="?page=pendaftaran" style="margin-bottom: 10px">Back</a>
