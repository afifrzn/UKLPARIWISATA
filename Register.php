<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<div class="signup-form">
    <form action="Register_a.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="Username" placeholder="Username" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="Email" class="form-control" name="Email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="Passw" class="form-control" name="Passw" placeholder="Passw" required="required">
        </div>   
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="Login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html>