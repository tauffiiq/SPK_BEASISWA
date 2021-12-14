<!-- awal proses update data -->

<?php 

if(isset($_POST['update'])){
   // mengambil data form
   $nim=$_POST['nim'];
   $nmmahasiswa=$_POST['nmmahasiswa'];
   $alamat=$_POST['alamat'];
   $telp=$_POST['telp'];

    // proses update
    $sql = "UPDATE mahasiswa SET nmmahasiswa='$nmmahasiswa',alamat='$alamat',telp='$telp' WHERE nim='$nim'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=mahasiswa");
    }
}

// mengambil nim dari variabel
$nim=$_GET['nim'];

//menampilkan data mahasiswa
$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!-- akhir proses update data -->

<h1 align="center">UPDATE DATA MAHASISWA</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">

            <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" value="<?php echo $row['nim']; ?>" name="nim" readonly>
            </div>

            <div class="form-group">
            <label for="nmmahasiswa">Nama Mahasiswa</label>
            <input type="text" class="form-control" value="<?php echo $row['nmmahasiswa']; ?>" name="nmmahasiswa" maxlength="500" required>
            </div>

            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat" maxlength="500" required>
            </div>

            <div class="form-group">
            <label for="telp">No. Telepon</label>
            <input type="text" class="form-control" value="<?php echo $row['telp']; ?>" name="telp" maxlength="15" required>
            </div>

            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=mahasiswa">Batal</a>
        </div>
    </div>
</form>

<?php
$conn->close();
?>