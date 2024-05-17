<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'connect.php';
    $sql=mysqli_query($koneksi,"SELECT * FROM login_user where Email='$email' and Passw='$Passw'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id_User"] = $row['Id_User'];
        $_SESSION["Username"]=$row['Username'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["Passw"]=$row['Passw']; 
        header("Location: User.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>