<?php
$host = "mysql.railway.internal";  // dari Railway
$user = "root";               // dari Railway
$pass = "ZuRwhneIWRdnjPPeznZvJuajKacnHRHB";            // dari Railway
$db = "railway";              // dari Railway
$port = 3306;                        // biasanya 3306, cek di Railway

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
