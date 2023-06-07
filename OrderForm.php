<HTML>
    <head>
    <h1>Add Data</h1>
</head>

<body>
        <h3>Data Pelanggan</h3>
        <form action="Add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>NamaTransportasi</td>
                    <td><input type="text" name="NamaTransportasi"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="Kelas"></td>
                </tr>
                <tr>
                    <td>Relasi</td>
                    <td><input type="text" name="Relasi"></td>
                </tr>
                <tr>
                    <td>WaktuTempuh</td>
                    <td><input type="text" name="WaktuTempuh"></td>
                </tr>
                <td>Harga</td>
                <td><input type="text" name="Harga"></td>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="add"></td>
                </tr>
<?php

if(isset($_POST['Submit'])) {
    $NamaTransportasi = $_POST['NamaTransportasi'];
    $Kelas = $_POST['Kelas'];
    $Relasi = $_POST['Relasi'];
    $WaktuTempuh = $_POST['WaktuTempuh'];
    $Harga = $_POST['Harga'];
    echo ($NamaTransportasi);
    include_once("connect.php");
    $sql="INSERT INTO transportasi(NamaTransportasi,Kelas,Relasi,WaktuTempuh,Harga) VALUES('$NamaTransportasi','$Kelas','$Relasi','$WaktuTempuh','$Harga')";
    $result = mysqli_query($koneksi,$sql,);


    header("location:Transportasi.php");

}
?>
            </table>
        </form>
    </body>
</html> 