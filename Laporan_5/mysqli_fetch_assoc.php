<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Koneksi Database dengan assoc</h1>
    <?php 
    $conn = mysqli_connect("localhost","root","", "db_saya") 
    or die("koneksi gagal");
    $hasil = mysqli_query($conn, "select * from liga");
    while ($row = mysqli_fetch_array($hasil)) {
    echo "liga" . $row["Negara"]; //array asosiatif
    echo "mempunyai" . $row["Champion"]; //array nummeris
    echo " wakil di liga champion <br>";
    }
    ?>
</body>
</html>