<?php
// session_start();

require "functions.php";
if(isset($_POST['submit'])) {
    $response = loginUser($_POST['username'], $_POST['password']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ken Printshoppe</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-- Image -->
                    <img src="images/ken_logo1.png" alt="companyLogo">
                    <div class="text">
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Log in to the system</header>
                        <form method="POST"> 
                            <div class="input-field">
                                <input type="text" name="username" id="username" class="input" value="<?php @$_POST['username'];?>" required autocomplete="off">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" id="password" class="input" value="<?php @$_POST['password'];?>" required autocomplete="off">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" name="submit" id="submit" class="submit" value="Log In" required>
                            </div>
                            <div class="signup">
                                <span>Don't have an account yet? <a href="signup.php">Sign up here.</a><br>
                                <a href="recovery.php">Forgot your password?</a></span>
                            </div>
                            <div>
                            <br>
                                <p style="color: red; font-size:small;" class="text-center"><?php echo @$response; ?></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>