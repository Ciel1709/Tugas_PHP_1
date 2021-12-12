<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1PHP</title>
    <style>
        .menu{
            margin-right: 15px;
            
        }
    </style>
</head>
<body>
    <h1>Daftar Menu</h1>
    <?php 
        define('tiga_belas',13000);
        $lima_belas = 15000;
        $seribu = 1000;
        $tiga_ribu = 3000;
        $lima_ribu = 5000;
        define('empat_ribu',4000);
    ?>
    <ul>
        <li>
                    
                <span class="menu">Ayam Goreng</span> 
                = Rp. <?php echo tiga_belas ?>
            
        </li>
        <li>
            
                <span class="menu">Ayam Bakar</span> 
                = Rp. <?php echo $lima_belas ?>
            
            
        </li>
        <li>
            
                <span class="menu">Ayam Sayur</span> 
                = Rp. <?php echo tiga_belas ?>
            
            
        </li>
        <li>
            
                <span class="menu">Tempe Goreng</span> 
                = Rp. <?php echo $seribu ?>
            
            
        </li>
        <li>
            
                <span class="menu">Tahu Goreng</span> 
                = Rp. <?php echo $seribu ?>
            
            
        </li>
        <li>
            
                <span class="menu">Soto</span> 
                = Rp. <?php echo $tiga_ribu ?>
            
            
        </li>
        <li>
            
                <span class="menu">Nasi Putih</span> 
                = Rp. <?php echo $lima_ribu ?>
            
            
        </li>
        <li>
            
                <span class="menu">Es Teh</span> 
                = Rp. <?php echo empat_ribu ?>
            
            
        </li>
        <li>
            
                <span class="menu">Es Tebu</span> 
                = Rp. <?php echo $lima_ribu ?>
            
            
        </li>
    </ul>
</body>
</html>