# Nama  : Helen L.A Simbolon
# NIM   : 43325029
# Prodi : D3 Teknologi Komputer


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    //variabel pada php
    $nama = "Belajar PABI";

    //akses nilai pada variabel
    echo "Selamat datang di $nama <br>";

    // ----- Akses Elemen Array dengan Loop ----
    $sayang = ['sayang ibu', 'sayang ayah', 'sayangkaka', 'sayang adik'];for($i=0;$i<5;$i++)
    {
        echo "Aku anak baik <br>";
    }
    for($i=0;$i<count($sayang); $i++)
    {
        echo $sayang[$i] . "<br>";
    }

    ?>
    
</body>
</html>