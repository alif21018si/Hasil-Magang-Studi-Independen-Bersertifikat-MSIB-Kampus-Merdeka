<?php
// Deklarasi variabel
$nama_pelanggan = isset($_POST['nama_pelanggan']) ? $_POST['nama_pelanggan'] : '';
$produk_pilihan = isset($_POST['produk_pilihan']) ? $_POST['produk_pilihan'] : '';
$jumlah_beli = isset($_POST['jumlah_beli']) ? $_POST['jumlah_beli'] : '';

// Array harga satuan
$harga_satuan = array(
  "TV" => 1250000,
  "KULKAS" => 1500000,
  "MESIN CUCI" => 2000000,
  "AC" => 3000000
);

// Hitung total belanja
$total_belanja = ($jumlah_beli !== '' && $jumlah_beli !== null) ? $harga_satuan[$produk_pilihan] * $jumlah_beli : 0;

// Hitung diskon
$diskon = 0.9 * $total_belanja;

// Hitung ppn
$ppn = 0.5 * ($total_belanja - $diskon);

// Hitung harga bersih
$harga_bersih = $total_belanja - $diskon + $ppn;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 2 Pemrograman Php</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: white ;
    }

    .container {
      width: 800px;
      margin: 0 auto;
      border: 1px solid #ddd;
      padding: 20px;
      color: black;

    }

    .center {
      text-align: center;
      color: red;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .label {
      display: block;
      margin-bottom: 5px;
    }

    .input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
    }

    .button {
      background-color: blue;
      color: #fff;
      padding: 10px 15px;
      border: 1px solid #ccc;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 align="center">Form Belanja</h1>
    <form method="POST" action="formbelanja.php">
      <div class="form-group">
        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="input" value="<?php echo $nama_pelanggan; ?>">
      </div>
      <div class="form-group">
        <label for="produk_pilihan">Produk Pilihan:</label>
        <select id="produk_pilihan" name="produk_pilihan" class="input">
          <option value="TV" <?php if ($produk_pilihan == "TV") echo "selected"; ?>>TV</option>
          <option value="KULKAS" <?php if ($produk_pilihan == "KULKAS") echo "selected"; ?>>KULKAS</option>
          <option value="MESIN CUCI" <?php if ($produk_pilihan == "MESIN CUCI") echo "selected"; ?>>MESIN CUCI</option>
          <option value="AC" <?php if ($produk_pilihan == "AC") echo "selected"; ?>>AC</option>
        </select>
      </div>
      <div class="form-group">
        <label for="jumlah_beli">Jumlah Beli:</label>
        <input type="number" id="jumlah_beli" name="jumlah_beli" class="input" value="<?php echo $jumlah_beli; ?>">
      </div>
      <div class="form-group center">
        <button type="submit" class="button">Kirim</button>
      </div>
    </form>

    <?php if (isset($_POST['nama_pelanggan']) && isset($_POST['produk_pilihan']) && isset($_POST['jumlah_beli'])) { ?>
      <div class="center"> 
        <h3>Receiptify</h3>
        <p>Nama Pelanggan: <?php echo $nama_pelanggan; ?></p>
        <p>Produk Pilihan: <?php echo $produk_pilihan; ?></p>
        <p>Jumlah Beli: <?php echo $jumlah_beli; ?></p>
        <p>Harga Satuan: Rp. <?php echo number_format($harga_satuan[$produk_pilihan]); ?></p>
        <p>Total Belanja: Rp. <?php echo number_format($total_belanja); ?></p>
        <p>Diskon 20%: Rp. <?php echo number_format($diskon); ?></p>
        <p>PPN 10%: Rp. <?php echo number_format($ppn); ?></p>
        <h3>Harga Bersih: Rp. <?php echo number_format($harga_bersih); ?></h3>
      </div>
    <?php } ?>
  </div>
</body>
</html>
