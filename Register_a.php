<?php
if(isset($_POST['save'])) {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Passw = $_POST['Passw'];
    echo ($Username);
    include_once("connect.php");
    $sql="INSERT INTO login_user(Username, Email, Passw) VALUES('$Username','$Email','$Passw')";
    $result = mysqli_query($koneksi,$sql);
    header ("Location: Login.php?status=success");
}
?>