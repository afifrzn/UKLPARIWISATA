<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Halo</title>
</head>
<body>
<div class="signup-form">
    <form action="Adminprocess.php" method="post" enctype="multipart/form-data">
		<h2>Login</h2>
		<p class="hint-text">Enter Login Details</p>
        <div class="form-group">
        	<input type="text" class="form-control" name="NamaAdmin" placeholder="NamaAdmin" required="required">
        </div>
		<div class="form-group">
            <input type="PassAdmin" class="form-control" name="PassAdmin" placeholder="PassAdmin" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
    </form>
</div>
<!DOCTYPE html>
<html lang="en">
<head>