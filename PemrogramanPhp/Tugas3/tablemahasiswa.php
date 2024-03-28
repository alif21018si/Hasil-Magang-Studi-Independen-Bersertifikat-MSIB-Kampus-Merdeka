<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b2b2b2;
            margin: 20px;
        }
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #ddd; 
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tfoot {
            background-color: blue;
            color: white;
            font-weight: bold;
        }
    </style>
<body>
<title>Tugas 3 Pemrograman Php</title>
<h2 style="text-align: center;">Data Nilai Mahasiswa</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $mahasiswa = [
            ["01121010", "Aldo", 80],
            ["01121011", "Amel", 99],
            ["01121012", "Gama", 89],
            ["01121013", "Rasy", 60],
            ["01121014", "Rahmat", 80],
            ["01121015", "Fajri", 79],
            ["01121016", "Farel", 90],
            ["01121017", "Ayu", 70],
            ["01121018", "Alif", 80],
            ["01121019", "Ahmad", 72],
            ["01121020", "Rina", 90],
            ["01121021", "Budi", 55],
            ["01121022", "Siti", 68],
            ["01121023", "Joko", 75],
            ["01121424", "Dewi", 40],
            ["01121025", "Rudi", 88],
            ["01121026", "Tina", 65],
            ["01121027", "Andi", 72],
            ["01121028", "Lina", 85],
            ["01121029", "Rama", 60],
            ["01121023", "Eka", 78],
            ["01121024", "Yudi", 92],
            ["01121025", "Fani", 48],
            ["01121026", "Wati", 70],
            ["01121027", "Agus", 62],
            ["01121029", "Sari", 77],
            ["01121030", "Doni", 84],
            ["01121031", "Maya", 58]
        ];

        // Hitung Agregat Nilai
        $jumlah_kesuluruhan_nilai = 0;
        $nilai_tertinggi = $mahasiswa[0][2];
        $nilai_terendah = $mahasiswa[0][2];
        $jumlah_lulus = 0;

        foreach ($mahasiswa as $data) {
            $jumlah_kesuluruhan_nilai += $data[2];
            if ($data[2] > $nilai_tertinggi) {
                $nilai_tertinggi = $data[2];
            }
            if ($data[2] < $nilai_terendah) {
                $nilai_terendah = $data[2];
            }
            if ($data[2] >= 65) {
                $jumlah_lulus++;
            }
        }

        $jumlah_mahasiswa = count($mahasiswa);
        $nilai_rata_rata = $jumlah_kesuluruhan_nilai / $jumlah_mahasiswa;

        // Untuk mendapatkan Predikat dan Grade 
        function getGrade($nilai)
        {
            if ($nilai >= 85) {
                return "A";
            } elseif ($nilai >= 75) {
                return "B";
            } elseif ($nilai >= 65) {
                return "C";
            } elseif ($nilai >= 55) {
                return "D";
            } else {
                return "E";
            }
        }

        function getPredikat($grade)
        {
            switch ($grade) {
                case "A":
                    return "Memuaskan";
                    break;
                case "B":
                    return "Bagus";
                    break;
                case "C":
                    return "Cukup";
                    break;
                case "D":
                    return "Kurang";
                    break;
                case "E":
                    return "Buruk";
                    break;
                default:
                    return "Tidak Ada";
            }
        }

        // Untuk Menampilkan data
        $no = 1;
        foreach ($mahasiswa as $data) {
            $nim = $data[0];
            $nama = $data[1];
            $nilai = $data[2];
            $keterangan = $nilai >= 65 ? "Lulus" : "Tidak Lulus";
            $grade = getGrade($nilai);
            $predikat = getPredikat($grade);

            echo "<tr>
                    <td>$no</td>
                    <td>$nim</td>
                    <td>$nama</td>
                    <td>$nilai</td>
                    <td>$keterangan</td>
                    <td>$grade</td>
                    <td>$predikat</td>
                  </tr>";
            $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td style="text-align: left;"  colspan="3">Nilai Tertinggi</td>
            <td colspan="4"><?php echo $nilai_tertinggi; ?></td>
        </tr>
        <tr>
            <td style="text-align: left;"  colspan="3">Nilai Terendah</td>
            <td colspan="4"><?php echo $nilai_terendah; ?></td>
        </tr>
        <tr>
            <td style="text-align: left;"  colspan="3">Nilai Rata-rata</td>
            <td colspan="4"><?php echo $nilai_rata_rata; ?></td>
        </tr>
        <tr>
            <td style="text-align: left;"  colspan="3">Jumlah Mahasiswa</td>
            <td colspan="4"><?php echo $jumlah_mahasiswa; ?></td>
        </tr>
        <tr>
            <td style="text-align: left;"   colspan="3">Jumlah Kesuluruhan Nilai</td>
            <td colspan="4"><?php echo $jumlah_kesuluruhan_nilai; ?></td>
        </tr>
    </tfoot>
</table>
        <marquee direction="left" behavior="alternate" scrollamount="30">
    <p style="text-align: center; color: white;">Alif Wijaya &copy; 2024 Tugas 3 Pemrograman Php</p>
 <marquee>
</body>
</html>
