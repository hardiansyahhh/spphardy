<?php

$koneksi = mysqli_connect('localhost','root','','db_spp1');
if(!$koneksi){
    echo"Koneksi Anda Gagal";
}