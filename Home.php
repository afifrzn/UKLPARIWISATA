<div class="Page">
<tr>
<td>Cari Kereta</td>
<td><input type="text" name="NamaTransportasi"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="Search"></td>
</tr>
<center><h2>Great Journey Start with low cost budget but with glamour style of vacation </h2>
    <p>Our offers will make you fall in love to take a journey with us. Happy Journey</p></center>
</div>
<?php
if(isset($_POST['Submit'])) {
    $NamaTransportasi = $_POST['NamaTransportasi'];
    echo ($NamaTransportasi);
    include_once("connect.php");
    $sql="SELECT * FROM transportasi WHERE NamaTransportasi LIKE '%".$NamaTransportasi."%'";
    $result = mysqli_query($koneksi,$sql,);
}
?>