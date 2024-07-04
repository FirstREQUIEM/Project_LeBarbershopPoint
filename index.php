<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LE Barbershop Point</title>
    <link rel="stylesheet" href="cssindex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script type="text/javascript" src="fungsijava.js"></script>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img class="logo" src="pictures/LE_BARBERSHOP_POINT.logo.png ">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="stylerambut.php">Style</a></li>
                <li><a href="displayantre.html">Queue</a></li>
            </ul>
        </div>
        <div class="new-visitor">
            <form action="antrean.php" method="post">
                <label class="labelclass">Nama : </label><br>
                <input type="text" name="nama" placeholder="Nama" alt="nama" required> <br><br>
                <label class="labelclass">No. telp : </label><br>
                <input type="text" name="no_telp" placeholder="No. telp" alt="No. Telp">   <br><br>
                <label class="labelclass">Hair Style : </label><br>
                <select name="gaya_rambut">
                    <option>Akabri</option>
                    <option>Cepak</option>
                    <option>Plontos</option>
                    <option>Korean Style</option>
                </select>
                <br><br><br><br>
                <button class="button-visit" type="submit" value="submit" onclick="alert('Data berhasil disimpan')">Submit</button><br><br>
            </form>
        </div>
    </div>

    <div class="footer-bawah">
        <p>Dikerjaan oleh 077<p>
    </div>
</body>
</html>