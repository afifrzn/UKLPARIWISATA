<HTML>
    <head>
    <h1>Add Data</h1>
</head>

<body>
        <h3>Data Wisata</h3>
        <form action="AddWisata.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>NamaDestinasi</td>
                    <td><input type="text" name="NamaDestinasi"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="Harga"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="Alamat"></td>
                </tr>
                <tr>
                    <td>NomorTelefon</td>
                    <td><input type="text" name="NomorTelefon"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="add"></td>
                </tr>
<?php

if(isset($_POST['Submit'])) {
    $NamaDestinasi = $_POST['NamaDestinasi'];
    $Harga = $_POST['Harga'];
    $Alamat = $_POST['Alamat'];
    $NomorTelefon = $_POST['NomorTelefon'];
    echo ($NamaDestinasi);
    include_once("connect.php");
    $sql="INSERT INTO wisata (NamaDestinasi, Harga, Alamat, NomorTelefon) VALUES('$NamaDestinasi','$Harga','$Alamat','$NomorTelefon')";
    $result = mysqli_query($koneksi,$sql,);


    header("location:Wisata.php");

}
?>
            </table>
        </form>
    </body>
</html> 