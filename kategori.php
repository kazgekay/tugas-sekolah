<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="kategori-style.css">
</head>
<body>
    <h1>Program Memasukan Umur Anda</h1>
    <div class="main-container">
    <div class="content-wrapper">
        <div class="table-section">
    <table>
        <tr>
            <th>umur</th>
            <th>kategori</th>
        </tr>
        <tr>
            <td>6-12</td>
            <td>Anak-anak</td>
        </tr>
         <tr>
            <td>13-17</td>
            <td>Remaja</td>
        </tr>
         <tr>
            <td>18-59</td>
            <td>Dewasa</td>
        </tr>
         <tr>
            <td>>=60</td>
            <td>Lansia</td>
        </tr>
    </table>
</div>
    
    <div class="form-section">
    <form method="POST">
        <label>Masukan Umur Anda (0-100):</label>
        <input type="number" name="umur" min="0" max="100" required>
        <input type="submit" value="Lihat Hasil">
    </form>
    </div>
</div>
    

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $umur = $_POST['umur'];
    $kategori = "";

    if($umur >= 0 && $umur <= 5){
        $kategori = "Balita";
    } elseif($umur >= 6 && $umur <= 12){
        $kategori = "Anak-anak";
    } elseif($umur >= 13 && $umur <= 17){
        $kategori = "Remaja";
    } elseif($umur >= 18 && $umur <= 59){
        $kategori = "Dewasa";
    } else {
        $kategori = "Lansia";
    }
    echo "<div class='hasil'";
    echo "<p>Umur anda: <strong>". $umur . "tahun</p>";
    echo "<div class='kategori-badge'>". $kategori . "</div>";
    echo "</div>";
}
?>
</div>
</body>
</html>