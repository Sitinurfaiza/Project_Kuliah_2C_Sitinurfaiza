<html>
    <head>
        <title> buku tamu </title>
    </head>
    <body>
        <?php
        $nama=$_POST["nama"];
        $email=$_POST["email"];
        $komentar=$_POST["komentar"];
        ?>
        <h1> Data Buku Tamu </h1>
        <hr>
        nama anda : Siti Nur Faiza <?echo $nama?>
        <br>
        email address : sitifaiza121212@gmail.com <?echo $email?>
        <br>
        komentar : <textarea name="komentar" cols="40" rows="5">terimakasih telah mengisi komentar ini</textarea>
        <br>
    </body>
</html>