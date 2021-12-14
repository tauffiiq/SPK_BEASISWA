<!-- awal proses tambah data -->

<?php

if(isset($_POST['simpan'])){

    // mengambil data form
    $nim=$_POST['nim'];
    $nmmahasiswa=$_POST['nmmahasiswa'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
	
    // validasi
    $sql = "SELECT*FROM mahasiswa WHERE nim='$nim'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>NIM sudah digunakan</strong>
            </div>
        <?php
    }else{
	//proses simpan
        $sql = "INSERT INTO mahasiswa VALUES ('$nim','$nmmahasiswa','$alamat', '$telp')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=mahasiswa");
        }
    }
}
?>

<!-- akhir proses tambah data -->

<h1 align="center">INPUT DATA MAHASISWA</h1>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">

            <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" maxlength="11" required>
            </div>

            <div class="form-group">
            <label for="nmmahasiswa">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nmmahasiswa" maxlength="500" required>
            </div>

            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" maxlength="500" required>
            </div>

            <div class="form-group">
            <label for="telp">No. Telepon</label>
            <input type="text" class="form-control" name="telp" maxlength="15" required>
            </div>

            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
            <a class="btn btn-danger" href="?page=mahasiswa">Batal</a>
        </div>
    </div>
</form>