<?php
$server = 'localhost';
$userdb = 'root';
$passdb = '';
$namadb = 'ppdb';
$db = mysqli_connect('localhost','root','','ppdb');

if(!$db)
    die("Gagal terhubung ke database" . mysqli_connect_error());