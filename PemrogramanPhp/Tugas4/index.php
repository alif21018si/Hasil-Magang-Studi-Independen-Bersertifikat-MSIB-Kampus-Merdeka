<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 Pemrograman Php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h2>$Lebaran</h2>
            <nav>
                <ul>
                    <li><a href="index.php?page=beranda">Beranda</a></li>
                    <li><a href="index.php?page=produk">Produk</a></li>
                    <li><a href="index.php?page=pesan">Pesan</a></li>
                    <li><a href="index.php?page=galeri">Galeri</a></li>
                    <li><a href="index.php?page=gesbuk">Gesbuk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <main>
            <?php
            // Ini adalah konten dinamis berdasarkan halaman yang dipilih
            $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';

            // Include konten halaman yang sesuai
            if (file_exists($page . '.php')) {
                include($page . '.php');
            } else {
                echo '<h2>Halaman tidak ditemukan</h2>';
            }
            ?>
        </main>
    </div>

    <footer>
        <div class="container">
    <p>Alif Wijaya &copy; 2024 Tugas 4 Pemrograman Php</p>
 <marquee>
    </footer>
</body>
</html>
