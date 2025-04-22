<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP Nomor 5</title>
</head>
<body>
    <h3>5. List Perkalian 1 sampai 5</h3>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<strong>Perkalian $i:</strong><br>";
        for ($j = 1; $j <= 100; $j++) {
            $hasil = $i * $j;
            echo "$i x $j = $hasil<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>