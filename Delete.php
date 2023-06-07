<?php
include_once 'connect.php';
$result = mysqli_query($koneksi,"SELECT * FROM transportasi");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Style.css">
<title>Hapus Data Transportasi</title>
</head>
<body>
<table>
	<tr>
	<td>Id_Jenis</td>
	<td>NamaTransportasi</td>
	<td>Kelas</td>
	<td>Relasi</td>
	<td>Harga</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["Id_Jenis"]; ?></td>
	<td><?php echo $row["NamaTransportasi"]; ?></td>
	<td><?php echo $row["Kelas"]; ?></td>
	<td><?php echo $row["Relasi"]; ?></td>
	<td><?php echo $row["Harga"]; ?></td>
	<td><a href="DeleteProcess.php?Id_Jenis=<?php echo $row["Id_Jenis"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
