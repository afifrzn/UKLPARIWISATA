<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'connect.php';
    $sql=mysqli_query($koneksi,"SELECT * FROM login_admin where NamaAdmin='$NamaAdmin' and PassAdmin='$PassAdmin'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id_Admin"] = $row['Id_Admin'];
        $_SESSION["NamaAdmin"]=$row['NamaAdmin'];
        $_SESSION["PassAdmin"]=$row['PassAdmin']; 
        header("Location: indexadmin.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>