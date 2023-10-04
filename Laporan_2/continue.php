<!DOCTYPE html>
<html lang="en">
<head>
    <title>Siti_nurfaiza</title>
</head>
<body>
    <?php
    for($i = 0 ; $i<5 ; $i++) 
    {
        if($i == 2)
        {
            continue;
        }
        echo ("Nilai i : $i <br>");
    }
    echo ("Loop selesai");
    ?>
</body>
</html>