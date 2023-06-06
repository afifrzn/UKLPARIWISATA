<!DOCTYPE html>
<html lang="en">
<head>
    <title>Me and Tour | La Tournee</title>
    <meta charset="UTF-8">
    <meta name="description" contents="La Tournee">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
    </style>
    <header>
        <h1 class="title">La Tournee</h1>
        <h3 class="desc">You, Me and Us</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?Page=Home">Home</a></li>
                <li><a href="index.php?Page=About">About</a></li>
                <li><a href="index.php?Page=Contact">Contact</a></li>
                <li><a href="index.php?Page=Login">Login</a></li>
                <li><a href="index.php?Page=Wisata">Wisata</a></li>
                <li><a href="index.php?Page=Transportasi">Transportasi</a></li>
                <li><a href="indexadmin.php?Page=Indexadmin">Admin</a></li>
                <li><a href="index.php?Page=Register">Register</a></li>
                <li><a href="index.php?Page=Login">Login</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['Page'])){
            $Page = $_GET['Page'];
 
            switch ($Page) {
                case 'Home':
                include "Home.php";
                break;
                case 'About':
                include "About.php";
                break;
                case 'Contact':
                include "Contact.php";
                break;          
                case 'Log In':
                include "Login.php";
                break;
                case 'Wisata';
                include "Wisata.php";
                break;
                case 'Transportasi';
                include "Transportasi.php";
                break;
                case 'Indexadmin';
                include "indexadmin";
                break;
                case 'Register';
                include "Register.php";
                break;
                case 'Login';
                include "Login.php";
            }
        }
else{
            include "Home.php";
        }
        ?>
    </div>
    <footer>
        &copy La Tournee
    </footer>
</body>
</html>