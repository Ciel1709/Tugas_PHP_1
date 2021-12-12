<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUgas 2</title>
</head>
<body>
    <h1>DAFTAR MENU</h1>
    <?php 
        define('lima_belas',15000);
        $seribu = 1000;
        define('dua_puluh',20000);
        $lima_ribu = 5000;
    ?>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Menu</td>
            <td>Harga</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Cireng</td>
            <td>Rp. <?php echo $seribu ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Es Duren</td>
            <td>Rp. <?php echo lima_belas ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Es Milo</td>
            <td>Rp. <?php echo dua_puluh ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Es Teh</td>
            <td>Rp. <?= $lima_ribu ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Piscok</td>
            <td>Rp. <?= $seribu ?></td>
        </tr>
    </table>
</body>
</html>