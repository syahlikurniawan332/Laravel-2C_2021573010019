<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>
    <ol>
        <?php
        foreach($mahasiswa as $nama){
            echo "<li>$nama</li>";
        }
        ?>
    </ol>

    <div>
        Copyright&copy; <?php echo date ("Y"); ?>Program study teknik informatika - PNL
    </div>
</body>
</html>