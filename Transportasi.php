<html>
    <head>
        <h1>Informasi tiket Status On-Going dan Completed</h1>
        <li><a href="Transportasi.php?Page=">Completed</a></li>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="StyleTable.css" type="text/css">
    </head>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: 500px 500px;
            grid-template-rows: 400px 400px;
            /* background-color: #2196F3;
            padding: 20px; */
            }
            .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
            .p{
                font-size: 20px;
            }
    </style>
    <body>
        <h3>History Pembelian</h3>
    <?php
        include "connect.php";
        $sql = "SELECT * FROM transportasi";
        $result = mysqli_query($koneksi, $sql);
        $nomor = 1;
    ?>
        <div class="grid-container">
            <?php
            while($data = mysqli_fetch_array($result)) {
            ?>
                <div class="grid-item">
                    <p><?php echo $data['NamaTransportasi']; ?></h2>
                    <h2><?php echo $data['Kelas'];?></h2>
                    <h2><?php echo $data['Relasi'];?></h2>
                    <h2><?php echo $data['WaktuTempuh'];?></h2>
                    <h2><?php echo $data['Harga'];?></h2>
                    <a href="OrderForm.php?Page="><input type="button" class="button" value="Submit Order"></a>
                </div>
            <?php }?>
        </div> 
    </body>
    </html>