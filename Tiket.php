<html>
    <head>
        <h1>Informasi tiket Status On-Going dan Completed</h1>
        <li><a href="Tiket.php?Page=">Completed</a></li>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Style Table.css" type="text/css">
    </head>

        <h3>History Pembelian</h3>
        <table border="1" class="table">
            <tr>
                <th>KodeTiket</th>
                <th>NamaTransportasi</th>
                <th>Relasi</th>
                <th>Keberangkatan</th>
                <th>Kedatangan</th>
                <th>Harga</th>
                <th>Tambah Pembelian</th>
            </tr>
    <?php
        include "connect.php";
        $sql = "SELECT b.KodeTiket, c.NamaTransportasi, c.Relasi, c.Kelas, b.Keberangkatan, b.Kedatangan, c.Harga
        FROM tiket AS b, transportasi AS c
        WHERE c.Id_Jenis = b.Id_Transportasi";
        $result = mysqli_query($koneksi, $sql);
        $nomor = 1;
        while($data = mysqli_fetch_array($result)) {
        ?>
    <tr> 
        <td><?php echo $data['KodeTiket']; ?></td>
        <td><?php echo $data['NamaTransportasi'];?></td>
        <td><?php echo $data['Relasi'];?></td>
        <td><?php echo $data['Kelas'];?></td>
        <td><?php echo $data['Keberangkatan'];?></td>
        <td><?php echo $data['Kedatangan'];?></td>
        <td><?php echo $data['Harga'];?></td>
    </tr>
    <?php }?>
    </table>