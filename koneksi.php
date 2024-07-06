<?php
    Error_reporting(E_ALL ^ E_DEPRECATED);

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "portfolio_luthfi";

    $conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi ke database gagal!");
?>