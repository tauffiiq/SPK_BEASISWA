<?php
$sql = "SELECT min(pendapatan) as pendapatan FROM pendaftaran";
    $result = $conn->query($sql);
    $r1  = mysqli_fetch_array($result);
    die($minPendapatan = $r1['pendapatan']);

$sql = "SELECT pendapatan FROM pendaftaran";
    $result = $conn->query($sql);
    $r5  = mysqli_fetch_assoc($result);
    die($pPendaftaran = $r5["pendapatan"] / $minPendaftaran);
?>