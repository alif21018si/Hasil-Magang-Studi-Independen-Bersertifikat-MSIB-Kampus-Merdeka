<?php
require_once 'mahasiswa.php';

// Beberapa Daftar Kampus Dijakarta
$universitas_list = array(
    "Universitas Guna Darma",
    "Universitas Indonesia",
    "Universitas Trisakti",
    "Universitas Negeri Jakarta",
    "Universitas Bung Karno",
    "Universitas Mercu Buana",
    "Sekolah Tinggi Teknologi Terpadu Nurul Fikri",
);

// Daftar mata kuliah di STT-NF
$mata_kuliah_list = array(
    "Dasar Dasar Pemrograman",
    "Desain Komunikasi Visual",
    "Big Data",
    "Digital Branding",
    "Business Intelligence",
    "Business Forensics",
    "Sistem Manajemen Keamanan Informasi",
    "Pengantar Sistem Informasi",   
    "Pemrograman Web",  
    "Statistik Probabilitas",
);

// Tangkap data dari form jika sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    // objek Mahasiswa dengan data yang diinput
    $mahasiswa = new Mahasiswa($nim, $nama, $universitas, $mata_kuliah, $nilai);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 Pemrograman Php</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2 style="text-align:center;">Daftar Nilai Ujian Mahasiswa</h2>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="nim">Nim:</label><br>
        <input type="text" id="nim" name="nim"><br>
        <label for="universitas">Universitas:</label><br>
        <select id="universitas" name="universitas">
            <?php
            foreach ($universitas_list as $universitas_item) {
                echo "<option value='$universitas_item'>$universitas_item</option>";
            }
            ?>
        </select><br>
        <label for="mata_kuliah">Mata Kuliah:</label><br>
        <select id="mata_kuliah" name="mata_kuliah">
            <?php
            foreach ($mata_kuliah_list as $mata_kuliah_item) {
                echo "<option value='$mata_kuliah_item'>$mata_kuliah_item</option>";
            }
            ?>
        </select><br>
        <label for="nilai">Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" min="0" max="100"><br><br>
        <input type="submit" value="Simpan">
    </form>

    <?php
    // objek $mahasiswa yang sudah dibuat dari form, cetak hasilnya
    if (isset($mahasiswa)) {
        echo "<h2 style='text-align:center;'>Hasil Cetak</h2>";
        echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th><th>Universitas</th><th>Mata Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>";
        echo "<tr>";
        echo "<td>" . $mahasiswa->nim . "</td>";
        echo "<td>" . $mahasiswa->nama . "</td>";
        echo "<td>" . $mahasiswa->universitas . "</td>";
        echo "<td>" . $mahasiswa->mata_kuliah . "</td>";
        echo "<td>" . $mahasiswa->nilai . "</td>";
        echo "<td>" . $mahasiswa->grade . "</td>";
        echo "<td>" . $mahasiswa->predikat . "</td>";
        echo "<td>" . $mahasiswa->status . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
    
</body>
</html>
