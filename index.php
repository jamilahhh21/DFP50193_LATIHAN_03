<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>

    <?php
    // komen satu baris
    # komen satu baris
    /* 
        komen banyak baris
    */

    $namapelajar = 'Jamilah';
    echo "<h2>Hello $namapelajar !</h2>"; #output

    $hadir = false;
    $umur = 20;
    $nokp = "010121-02-0980";

    $x = 10;
    $x /= 5;
    
    echo "<h2>$x</h2>";

    $x = 100;
    $y = 80;

    if ($x == 100 or $y == 80) {
        echo "<h2>Hello World</h2>";
    } else {
        echo "<h2>Tak dak apa</h2>";
    }

    ?>

    <p>
        <?php
        echo 20 . 21;
        ?>
    </p>

    <h2>
        <?php
        $bandar = 'Alor Setar';
        $baru = '';
        for($x = 0; $x < strlen($bandar); $x++) {
            $baru .= $bandar[$x] . '-';
        }
        echo $baru;
        ?>
    </h2>
</body>
</html>