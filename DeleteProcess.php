<?php
include_once 'connect.php';
$sql = "DELETE FROM transportasi WHERE Id_Jenis='" . $_GET["Id_Jenis"] . "'";
if (mysqli_query($koneksi, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>