<!DOCTYPE html>
<html lang="en">
<head>
    <title>Me and Tour | Tourner</title>
    <meta charset="UTF-8">
    <meta name="description" contents="La Tournee">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">Tourner</h1>
        <h3 class="desc">You, Me and Us</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?Page=Home">Home</a></li>
                <li><a href="index.php?Page=About">About</a></li>
                <li><a href="index.php?Page=Contact">Contact</a></li>
                <li><a href="index.php?Page=Log In">Login></li>
                <li><a href="index.php?Page=Sign Up">Signup</a></li>
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
                case 'Sign Up':
                include "Signup.php";
            }
        }
else{
            include "Home.php";
        }
        ?>
    </div>
    <footer>
        &copy Tourner
    </footer>
</body>
</html>