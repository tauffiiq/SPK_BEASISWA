<?php

$iddaftar=$_GET['iddaftar'];

$sql = "DELETE FROM pendaftaran WHERE iddaftar='$iddaftar'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=pendaftaran");
}
$conn->close();
?>