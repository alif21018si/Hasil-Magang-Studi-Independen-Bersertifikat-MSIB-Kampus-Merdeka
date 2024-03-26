<?php
$judul = "Terima kasih telah mampir ke bio cloud saya! Inilah sedikit tentang saya dan seputar  kebutuhan tugas msib.";
$nama = "Alif Wijaya";
$umur = "23 Tahun";
$alamat = "Bogor City kabupaten";
$citacita = "Fullstack Web Developer";
$Bio = "Bio Data";
$Riwayatpengalaman = "Riwayat Pengalaman";
$Pendidikan = "Pendidikan";
$deskripsi1 = "IT Club Google Developer student Club Nurul Fikri  (2022-2023)";
$deskripsi2 = "Akademi Fullstack Developer di Nf Academy (2023-sekarang)";
$deskripsi3 = "S1 Sistem Informasi, Sekolah Tinggi Teknlogi Terpadu Nurul Fikri (2021-2025)";
$deskripsi4 = "SMK Teknik Kendaraan Ringan, Putra Pakuan (2016-2019)";
$Hobi = "Hobi";
$deskripsi5 = "Belajar";
$deskripsi6 = "Lari";
$deskripsi7 = "Main Game";
$deskripsi8 = "Naik Gunung"
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Pemrograman Php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #white;
            margin: 20px;
            background-image: url("https://previews.123rf.com/images/gl0ck33/gl0ck331108/gl0ck33110800545/10333590-3d-abstract-white-cube-background.jpg");

        }
        h1 {
            color: black;

        
        }
        
        h2 {

            
            color: black;
        
        }
        p {
            color: #555;
        }

        img {
            
            border-radius: 5%;
            object-fit: cover;
            margin-top: 3%;
        }
        ul {

            color: #555;

        }
        li {

            color: #555;
            
        }
    </style>
</head>
<body>
<marquee direction="left" behavior="alternate" scrollamount="5">
    <h1><?= $judul ?> </h1>
    </marquee>
    <img  src="gambar/foto.jpg" alt="Foto Boatman" width="200">
<hr>
    <h2><?= $Bio ?> </h2>

    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>Umur:</strong>  <?= $umur ?></p>
    <p><strong>Alamat:</strong> <?= $alamat ?></p>
    <p><strong>Cita-Cita:</strong>  <?= $citacita ?></p>
    

    <h2><?= $Riwayatpengalaman ?> </h2>
    <ul type="circle">
        <li><?= $deskripsi1 ?></li>
        <li><?= $deskripsi2 ?></li>
    </ul>

    <h2><?= $Pendidikan ?> </h2>
    <ul type="square">
        <li><?= $deskripsi3 ?></li>
        <li><?= $deskripsi4?></li>
    </ul>

    <h2><?= $Hobi ?> </h2>
    <ul type="disc">
        <li><?= $deskripsi5 ?></li>
        <li><?= $deskripsi6 ?></li>
        <li><?= $deskripsi7 ?></li>
        <li><?= $deskripsi8 ?></li>
    </ul>

</body>
</html>
