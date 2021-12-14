<!-- awal proses tambah  -->

<?php

if(isset($_POST['simpan'])){
    $tgl=date("Y-m-d");
    $tahun=$_POST['tahun'];
    $nim=$_POST['nmmahasiswa'];
    $pendapatan=$_POST['pendapatan'];
    $ipk=$_POST['ipk'];
    $saudara=$_POST['saudara'];
	
    // validasi
    $sql = "SELECT*FROM pendaftaran WHERE tahun='$tahun' AND nim='$nim'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Data sudah dimasukkan</strong>
            </div>
        <?php
    }else{
	//proses simpan
        $sql = "INSERT INTO pendaftaran VALUES (NULL,'$tgl','$tahun','$nim','$pendapatan','$ipk','$saudara')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=pendaftaran");
        }
    }
}
?>

<!-- akhir proses tambah  -->

<h2 align="center">TAMBAH PENDAFTARAN</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <select class="chosen-select" data-placeholder="Pilih Tahun" name="tahun">
                <option value=""></option>;
                <?php
                    for ($x=date("Y");$x>=2016;$x--){
                ?>
                    <option value="<?php echo $x; ?>"><?php echo $x; ?></option>;
                <?php
                    }
                ?>
            
            </select>
            </div>
            <div class="form-group">
            <label for="Nama">Nama Mahasiswa</label>
            <select class="chosen-select" data-placeholder="Pilih Nama" name="nmmahasiswa">
            <option value=""></option>;
            <?php
                $sql = "SELECT * FROM mahasiswa";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $row['nim']; ?>"><?php echo $row['nmmahasiswa']; ?></option>
            <?php
                }
            ?>
            </select>
            </div>

            <div class="form-group">
            <label for="pendapatan">Pendapatan Perbulan</label>
            <input type="number" class="form-control" name="pendapatan" min="0" max="99999999" required>
            </div>

            <div class="form-group">
            <label for="ipk">IPK Terakhir</label>
            <input type="number" class="form-control" name="ipk" step="0.01" min="0" max="4.00" required>
            </div>

            <div class="form-group">
            <label for="saudara">Jumlah Saudara Kandung</label>
            <input type="number" class="form-control" name="saudara" min="0" max="99" required>
            </div>

            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
            <a class="btn btn-danger" href="?page=pendaftaran">Batal</a>
        </div>
    </div>
</form>