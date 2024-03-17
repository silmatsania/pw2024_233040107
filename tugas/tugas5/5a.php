<?php
$mahasiswa = [
[
    "Nama" => "Siene Tan", 
    "NRP" => "233040107", 
    "Email" => "sienetan@unpas.sc.id",
    "Jurusan" => "Kedokteran",
    "Gambar" => "siane.jpg"
],
[
    "Nama" => "Jeannet Jine", 
    "NRP" => "233040124", 
    "Email" => "jeannetjine@unpas.sc.id",
    "Jurusan" => "Manajemen",
    "Gambar" => "jeannet.jpg"
],
[
    "Nama" => "Beatrice Amwet", 
    "NRP" => "233040114", 
    "Email" => "bearticeamwet@unpas.sc.id",
    "Jurusan" => "Teknik Industri",
    "Gambar" => "beatrice.jpg"
],
[
    "Nama" => "Annet Sernine", 
    "NRP" => "233040109", 
    "Email" => "annetsernine@unpas.sc.id",
    "Jurusan" => "Administrasi Publik",
    "Gambar" => "annet.jpg"
],
[
    "Nama" => "Aline Leorta", 
    "NRP" => "233040115", 
    "Email" => "alineleorta@unpas.sc.id",
    "Jurusan" => "Akuntansi",
    "Gambar" => "aline.jpg"
],
[
    "Nama" => "Reria Lovate", 
    "NRP" => "233040137", 
    "Email" => "rerialovate@unpas.sc.id",
    "Jurusan" => "Aktuaria",
    "Gambar" => "reria.jpg"
],
[
    "Nama" => "Enthan Swill", 
    "NRP" => "233040130", 
    "Email" => "enthamswill@unpas.sc.id",
    "Jurusan" => "Kimia Murni",
    "Gambar" => "enthan.jpg"
],
[
    "Nama" => "Willy Piert", 
    "NRP" => "233040125", 
    "Email" => "willypiert@unpas.sc.id",
    "Jurusan" => "Hukum",
    "Gambar" => "willy.jpg"
],
[
    "Nama" => "Deenite Fierta", 
    "NRP" => "233040143", 
    "Email" => "deenitefierta@unpas.sc.id",
    "Jurusan" => "Filsafat",
    "Gambar" => "deenite.jpg"
],
[
    "Nama" => "Laretta Vannie", 
    "NRP" => "233040130", 
    "Email" => "larettavannie@unpas.sc.id",
    "Jurusan" => "Ekonomi dan Bisnis",
    "Gambar" => "laretta.jpg"
],
            ];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Mahasiswa </title>
    <style>
        img {
            width : 100px;
            height: 100px;
            border: 2px grey solid;
        }
    </style>
 </head>
 <body>

    <h1> Daftar Mahasiswa </h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li> <img src = "img/<?= $mhs["Gambar"]; ?>"></li>
        <li>Nama : <?= $mhs["Nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
 </body>
 </html>