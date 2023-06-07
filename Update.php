<?php
include_once 'connect.php';
$result = mysqli_query($koneksi,"SELECT * FROM transportasi");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Update/Edit</title>
   <link rel="stylesheet" href="Style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>Id_Jenis</td>
		<td>NamaTransportasi</td>
		<td>Kelas</td>
		<td>Relasi</td>
		<td>WaktuTempuh</td>
		<td>Harga</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;   
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["Id_Jenis"]; ?></td>
		<td><?php echo $row["NamaTransportasi"]; ?></td>
		<td><?php echo $row["Kelas"]; ?></td>
		<td><?php echo $row["Relasi"]; ?></td>
		<td><?php echo $row["WaktuTempuh"]; ?></td>
		<td><?php echo $row["Harga"]; ?></td>
		<td><a href="UpdateProcess.php?Id_Jenis=<?php echo $row["Id_Jenis"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>