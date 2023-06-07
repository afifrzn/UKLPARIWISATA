<?php
include_once 'connect.php';
if(count($_POST)>0) {
mysqli_query($koneksi,"UPDATE wisata set Id_Wisata='" . $_POST['Id_Wisata'] . "', NamaDestinasi='" . $_POST['NamaDestinasi'] . "', Harga='" . $_POST['Harga'] . "', Alamat='" . $_POST['Alamat'] ."',NomorTelefon='" . $_POST['NomorTelefon'] . "' WHERE Id_Wisata='" . $_POST['Id_Wisata'] . "'");
$message = "Record Modified Successfully";
header("location:UpdWisata.php");
}
$result = mysqli_query($koneksi,"SELECT * FROM wisata WHERE Id_Wisata='" . $_GET['Id_Wisata'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Transportasi Data</title>
</head>
<body>
<form name="frmTpn" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="Wisata.php">List Wisata</a>
</div>
Id_Wisata: <br>
<input type="hidden" name="Id_Wisata" class="txtField" value="<?php echo $row['Id_Wisata']; ?>">
<input type="text" name="Id_Wisata"  value="<?php echo $row['Id_Wisata']; ?>">
<br>
NamaDestinasi: <br>
<input type="text" name="NamaDestinasi" class="txtField" value="<?php echo $row['NamaDestinasi']; ?>">
<br>
Harga :<br>
<input type="text" name="Harga" class="txtField" value="<?php echo $row['Harga']; ?>">
<br>
Alamat:<br>
<input type="text" name="Alamat" class="txtField" value="<?php echo $row['Alamat']; ?>">
<br>
NomorTelefon:<br>
<input type="text" name="NomorTelefon" class="txtField" value="<?php echo $row['NomorTelefon']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">
</form>
</body>
</html>


