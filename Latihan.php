<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP</title>
</head>
<body>
    <h2>Latihan
    </h2>
    <form method="post">
        Masukkan Tanggal Lahir:
        <input type="date" name="tanggal_lahir" required>
        <input type="submit" name="hitung" value="Hitung Umur">
    </form>
    <form method="post">
        Masukkan jumlah dalam USD: 
        <input type="number" name="usd" step="0.01" required>
        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tgl_lahir = new DateTime($tanggal_lahir);
        $today = new DateTime();
        $umur = $today->diff($tgl_lahir);

        echo "<h3>Hasil:</h3>";
        echo "Tanggal Lahir: " . $tgl_lahir->format('d-m-Y') . "<br>";
        echo "Umur Anda: " . $umur->y . " tahun, " . $umur->m . " bulan, " . $umur->d . " hari";
    }
    ?>
      <?php
    if (isset($_POST['konversi'])) {
        $usd = $_POST['usd'];
        $kurs = 16000; // Nilai tukar USD ke IDR (bisa disesuaikan)
        $idr = $usd * $kurs;

        echo "<h3>Hasil Konversi:</h3>";
        echo number_format($usd, 2) . " USD = " . number_format($idr, 2) . " IDR";
    }
    ?>

    
</body>
</html>