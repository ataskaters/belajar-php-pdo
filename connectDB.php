<?php
// untuk munculin output
// File connectDB untuk mengoneksikan ke database.

$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'BloGGer';
$dbms = 'mysql';
$charset = 'utf8';
$db = null;
try {
    $db = new PDO("$dbms:host=$host;dbname=$database;charset=$charset", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "koneksi berhasil";
}
    catch(PDOException $e) {
    echo 'koneksi error :'.$e->getMessage();
}
 ?>
