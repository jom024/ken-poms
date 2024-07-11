<?php
require "functions.php";
if(isset($_POST['submit'])){
    $response = registerUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm-password']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Ken Printshoppe</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image" style="background-image: url('images/bg1.avif');">
                    <!-- Image -->
                    <img src="images/ken_logo1.png" alt="companyLogo">
                    <div class="text">
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Create an Account</header>
                        <form method="POST" class="row" style="height: auto; width: auto; box-shadow: none;">
                            <div class="input-field">
                                <input type="text" name="email" id="email" class="input" value="<?php echo @$_POST['email']; ?>" required autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="username" id="username" class="input" value="<?php echo @$_POST['username']; ?>" required autocomplete="off">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" id="password" class="input" value="<?php echo @$_POST['password']; ?>" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="confirm-password" id="confirm-password" class="input" value="<?php echo @$_POST['confirm-password']; ?>" required>
                                <label for="confirm-password">Confirm Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" name="submit" id="submit" class="submit" value="Sign Up" required>
                            </div>
                            <div class="login">
                                <span>Do you already have an account? <a href="login.php">Log in.</a></span>
                                <?php
                                if(@$response == "success"){
                                    ?>
                                    <p class="success">Your registration was successful</p>
                                    <?php
                                }else {
                                    ?>
                                    <p class="error"><?php echo @$response; ?></p>
                                <?php
                                }
                            ?>  
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>