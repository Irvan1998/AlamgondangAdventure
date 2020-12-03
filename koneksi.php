<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = '';
$dbname = "camping";


$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connect->connect_error) {
    die("Maaf koneksi gagal: " . $connect->connect_error);
}
