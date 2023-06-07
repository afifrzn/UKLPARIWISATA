<?php
include_once 'connect.php';
$result = mysqli_query($koneksi,"SELECT * FROM wisata");
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
	    <td>Id_Wisata</td>
		<td>NamaDestinasi</td>
		<td>Harga</td>
		<td>Alamat</td>
		<td>NomorTelefon</td>
	  </tr>
			<?php
			$i=0;   
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["Id_Wisata"]; ?></td>
		<td><?php echo $row["NamaDestinasi"]; ?></td>
		<td><?php echo $row["Harga"]; ?></td>
		<td><?php echo $row["Alamat"]; ?></td>
		<td><?php echo $row["NomorTelefon"]; ?></td>
		<td><a href="UpdWisProc.php?Id_Wisata=<?php echo $row["Id_Wisata"]; ?>">Update</a></td>
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