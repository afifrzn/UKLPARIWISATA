<?php
include_once 'connect.php';
if(count($_POST)>0) {
mysqli_query($koneksi,"UPDATE transportasi set Id_Jenis='" . $_POST['Id_Jenis'] . "', NamaTransportasi='" . $_POST['NamaTransportasi'] . "', Kelas='" . $_POST['Kelas'] . "', Relasi='" . $_POST['Relasi'] ."',WaktuTempuh='" . $_POST['WaktuTempuh']. "' ,Harga='" . $_POST['Harga'] . "' WHERE Id_Jenis='" . $_POST['Id_Jenis'] . "'");
$message = "Record Modified Successfully";
header("location:Update.php");
}
$result = mysqli_query($koneksi,"SELECT * FROM transportasi WHERE Id_Jenis='" . $_GET['Id_Jenis'] . "'");
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
<a href="Transportasi.php">Transport List</a>
</div>
Id_Jenis: <br>
<input type="hidden" name="Id_Jenis" class="txtField" value="<?php echo $row['Id_Jenis']; ?>">
<input type="text" name="Id_Jenis"  value="<?php echo $row['Id_Jenis']; ?>">
<br>
NamaTransportasi: <br>
<input type="text" name="NamaTransportasi" class="txtField" value="<?php echo $row['NamaTransportasi']; ?>">
<br>
Kelas :<br>
<input type="text" name="Kelas" class="txtField" value="<?php echo $row['Kelas']; ?>">
<br>
Relasi:<br>
<input type="text" name="Relasi" class="txtField" value="<?php echo $row['Relasi']; ?>">
<br>
WaktuTempuh:<br>
<input type="text" name="WaktuTempuh" class="txtField" value="<?php echo $row['WaktuTempuh']; ?>">
<br>
Harga:<br>
<input type="text" name="Harga" class="txtField" value="<?php echo $row['Harga']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">
</form>
</body>
</html>


