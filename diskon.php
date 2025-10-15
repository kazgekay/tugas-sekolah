<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
    <link rel="stylesheet" href="diskon-style.css">
</head>
<body>
    <h1>Program Diskon Harga Total</h1>
    <div class="container">
    <form method="POST">
        <label>Masukan Harga Total Belanja Anda = </label>
        <input type="number" name="harga" min="100000" max="800000" placeholder="100000 - 800000" required>
        <input type="submit" value="Tentukan Apakah anda dapat Diskon">
    </form>
    

    <?php
    if(isset($_POST['harga'])){
        $harga= $_POST['harga'];
        $diskon = 0;
        $persenDiskon = 0 ;

        echo "<div class = 'hasil'>";

        if($harga >=500000){
            $persenDiskon = 20;
            $diskon = $harga* (20/100);
            echo "<p>Selamat! Anda mendapatkan diskon <span class='diskon-badge'>20%</span></p>";
        } elseif($harga >= 250000 && $harga < 500000 ){
            $persenDiskon = 10;
            $diskon = $harga * (10/100);
            echo "<p>Selamat! Anda mendapatkan diskon <span class='diskon-badge'>10%</span></p>";
        } else{
            echo "<p>Maaf, Anda belum mendapatkan diskon</p>";
            echo "<p>Belanja minimal Rp 250.000 untuk mendapat diskon 10%</p>";

        }
        echo "<p>Harga Awal: <strong>Rp " . number_format($harga, 0, ',', '.') . "</strong></p>";
            
        if($diskon > 0){
            echo "<p>Potongan Diskon: <strong>Rp " . number_format($diskon, 0, ',', '.') . "</strong></p>";
        }

        echo "<p class='total-harga'>Total Bayar: Rp " . number_format($harga - $diskon, 0, ',', '.') . "</p>";
        echo "</div>";
    }
    ?>
    </div>
</body>
</html>