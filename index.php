<?php 
    date_default_timezone_set("asia/jakarta");
    include "config.php";
?>

<!doctype html>
<html lang='en'>
    <!-- <style>
        html{
            background-image:url("img/b1.jpg");
        }
    </style> -->
    <head>
        <!-- recuired meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- dataTables CSS -->
        <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
        <!-- choosen select CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">

        <title>SPK Penerima Beasiswa</title>
    </head>
    <body>

                <!-- navbar menu -->
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=pendaftaran">Pendaftaran</a>
            </li>
        </ul>
        </nav>
        <!-- akhir navbar -->

        <!-- awal container -->
        <div class="container" style="margin-top: 20px" >
           
            <?php

            //setting variable & action
            $page = isset($_GET['page']) ? $_GET['page'] : "";
            $action = isset($_GET['action']) ? $_GET['action'] : "";

            // setting halaman
            if ($page==""){
                include "welcome.php";
            }elseif ($page=="mahasiswa"){
                if ($action==""){
                    include "tampil_mahasiswa.php";
                }elseif ($action=="tambah"){
                    include "tambah_mahasiswa.php";
                }elseif ($action=="update"){
                    include "update_mahasiswa.php";
                }else{
                    include "hapus_mahasiswa.php";
                }
            }elseif ($page=="pendaftaran"){
                if ($action==""){
                    include "tampil_pendaftaran.php";
                }elseif ($action=="tambah"){
                    include "tambah_pendaftaran.php";
                }elseif ($action=="update"){
                    include "update_pendaftaran.php";
                }else{
                    include "hapus_pendaftaran.php";
                }
            }elseif ($page=="perangkingan"){
                if ($action==""){
                    include "tampil_perangkingan.php";
                }
            }elseif ($page=="persyaratan"){
                if ($action==""){
                    include "tampil_persyaratan.php";
                }
            }else{
                include "NAMA_HALAMAN";
            }
            ?>
        </div>
        <!-- akhir container -->


        <!-- optional javascript -->
        <!-- jQuery first, then Popper.js, then boostrap JS -->
        <sript src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <sript src="assets/js/popper.min.js"></script>
        <sript src="assets/js/bootstrap.min.js"></script>
        <sript src="assets/js/chosen.jquery.min.js"></script>
        <sript src="assets/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            } );
        </script>

        <script>
            $(function() {
                $('.chosen-select').chosen();
            });
        </script>


    </body>
</html>