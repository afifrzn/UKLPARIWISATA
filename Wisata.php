<html>
    <head>
        <h1>Informasi tiket Status On-Going dan Completed</h1>
        <li><a href="Wisata.php?Page=">Completed</a></li>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>

        <h3>History Pembelian</h3>
        <table border="1" class="table">
            <tr>
                <th>Id_Wisata</th>
                <th>Destinasi</th>
                <th>Harga</th>
                <th>Alamat</th>
                <th>Telefon</th>
            </tr>
    <?php
        include "connect.php";
        $sql = "SELECT * FROM wisata";
        $result = mysqli_query($koneksi, $sql);
        $nomor = 1;
        while($data = mysqli_fetch_array($result)) {
        ?>
    <tr> 
        <td><?php echo $data['Id_Wisata']; ?></td>
        <td><?php echo $data['NamaDestinasi'];?></td>
        <td><?php echo $data['Harga'];?></td>
        <td><?php echo $data['Alamat'];?></td>
        <td><?php echo $data['NomorTelefon'];?></td>
    </tr>
    <?php }?>
    </table>

 