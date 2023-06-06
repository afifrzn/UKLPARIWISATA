<html>
    <header>
    <link rel="stylesheet" href="Style Table.css" type="text/css">
</header>
    <head>
        <h1>Informasi tiket Status On-Going dan Completed</h1>
        <li><a href="Booking.php?Page=">Completed</a></li>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    </head>

        <h3>On-Going Tiket</h3>
        <table border="1" class="table">
            <tr>
                <th>IdBooking</th>
                <th>Username</th>
                <th>NamaDestinasi</th>
                <th>Kode Tiket</th>
                <th>Total</th>
            </tr>
            
    <?php
        include "connect.php";
        $sql_booking= "SELECT b.IdBooking, p.Username, dp.NamaDestinasi, tk.KodeTiket
        FROM detailbooking AS b, user AS p, wisata AS dp, tiket AS tk
        WHERE b.Id_User =  p.Id_User
        AND b.Id_Wisata = dp.Id_Wisata
        AND b.KodeTiket = tk.KodeTiket;";
        $result = mysqli_query($koneksi, $sql_booking);
        $nomor = 1;
        while($data = mysqli_fetch_array($result)) {
        ?>
    <tr> 
        <td><?php echo $data['IdBooking']; ?></td>
        <td><?php echo $data['Username'];?></td>
        <td><?php echo $data['NamaDestinasi'];?></td>
        <td><?php echo $data['KodeTiket'];?></td>
    </tr>
    <?php }?>
    </table>

 