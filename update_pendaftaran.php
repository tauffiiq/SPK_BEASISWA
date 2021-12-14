<!-- awal proses update -->

<?php 

$iddaftar=$_GET['iddaftar'];
if(isset($_POST['update'])){
    $pendapatan=$_POST['pendapatan'];
    $ipk=$_POST['ipk'];
    $saudara=$_POST['saudara'];

    // proses update
    $sql = "UPDATE pendaftaran SET pendapatan='$pendapatan',ipk='$ipk',saudara='$saudara' WHERE iddaftar='$iddaftar'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=pendaftaran");
    }
}

// proses menampilkan

$sql = "SELECT*FROM pendaftaran WHERE iddaftar=$iddaftar ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!-- akhir proses update -->
<h2 align="center">UPDATE PENDAFTARAN</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6"> 
            <div class="form-group">
                <label for="tahun">Angkatan</label>
                <input type="text" class="form-control" value="<?php echo $row['tahun']; ?>" name="tahun" readonly>

            </div>
            <div class="form-group">
            <label for="Nama">NIM Mahasiswa</label>
            <input type="text" class="form-control" value="<?php echo $row['nim']; ?>" name="nama" readonly>

            </div>

            <div class="form-group">
            <label for="pendapatan">Pendapatan Perbulan</label>
            <input type="number" class="form-control" value="<?php echo $row['pendapatan']; ?>" name="pendapatan" min="0" max="99999999" required>
            </div>

            <div class="form-group">
            <label for="ipk">IPK Terakhir</label>
            <input type="number" class="form-control" value="<?php echo $row['ipk']; ?>" name="ipk" step="0.01" min="0" max="4.00" required>
            </div>

            <div class="form-group">
            <label for="saudara">Jumlah Saudara</label>
            <input type="number" class="form-control" value="<?php echo $row['saudara']; ?>" name="saudara" min="0" max="99" required>
            </div>

            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=pendaftaran">Batal</a>
        </div>
    </div>
</form>