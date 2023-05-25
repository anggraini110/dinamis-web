<?php
$connect=mysqli_connect("localhost","root","","products");

if(!$connect){
    echo "Koneksi Gagal";
    die();
}
?>