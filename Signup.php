<!doctype html>    
<html>    
<head>    
<title>Register</title>    
    <style>     
        body{    
    margin-top: 110px;    
    margin-bottom: 110px;    
    margin-right: 160px;    
    margin-left: 90px;    
    background-color: lightcyan;    
    color: palevioletred;    
    font-family: verdana;    
    font-size: 100%    
        
        }    
            h1 {    
    color: darkred;    
    font-family: indigo;    
    font-size: 100%;    
}    
         h2 {    
    color: darkred;    
    font-family: indigo;    
    font-size: 100%;    
}</style>    
</head>    
<body>    
       
    <center><h1>LOG IN WOII</h1></center>    
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>    
    <center><h2>Registration Form</h2></center>    
<form action="" method="POST">    
    <legend>    
    <fieldset>    
            
Username: <input type="text" name="user"><br />    
Password: <input type="password" name="pass"><br />     
<input type="submit" value="Register" name="submit" />    
                
        </fieldset>    
        </legend>    
</form>    
<?php    
if(isset($_POST["submit"])){    
if(!empty($_POST['user']) && !empty($_POST['pass'])) {    
    $user=$_POST['user'];    
    $pass=$_POST['pass'];    
    $koneksi=mysqli_connect('localhost','root','') or die(mysql_error());    
    mysqli_query('user_registration') or die("cannot select DB");  
    include "connect.php";
    $query=mysqli_query("INSERT INTO login_user, VALUES (Username, Passw) ");    
    $numrows=mysqli_num_rows($query);    
    if($numrows==0)    
    {    
     
    $result=mysqli_query($sql);    
        if($result){    
    echo "Account Successfully Created";    
    } else {    
    echo "Failure!";    
    }    
    
    } else {    
    echo "That username already exists! Please try again with another.";    
    }    
    
} else {    
    echo "All fields are required!";    
}    
}    
?>    
</body>    
</html>  