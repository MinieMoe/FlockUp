<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css?ver=<?php echo rand(111,999)?>"> 
    <title>T-Tripper</title>
    <!-- Favicon --> 
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png"> 
    <link rel="icon" type="image/jpeg" sizes="32x32" href="favicon/t-icon-21.jpeg"> 
    <link rel="icon" type="image/jpeg" sizes="16x16" href="favicon/t-icon-21.jpeg"> 
    <link rel="icon" type="image/jpeg" href="favicon/t-icon-21.jpeg"> 
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300&display=swap" rel="stylesheet">
</head>
<body>
<?php include('includes/header.php'); ?>

    <div class="clearfix"></div>

    <section class="main-padding">
        <h1 class="acc">Create Your Account</h1>

        <div class="signupFlexbox">
        
            <div class="sidebox">
                <p>FIND<br>YOUR <br>PERFECT <br>DREAM <br>TEAM!</p>
                <p class="logo">Flock Up</p>
            </div>

            <div class="signup">
                <div class="description">
                    <p>START NOW FOR FREE</p>
                    <p>Sign Up for Flock Up.</p>
                    <p>Already a member? <a href="sign-in.php"><span>Log In</span></a></p>
                </div>
                <form class = "create" method="post" action="create-connect.php" onsubmit="return validateForm();"> 
                    <input type="hidden" name="activity" value="signup">
                    <label>E-mail</label><br>
                    <input type="text" name="user_email" id="user_email" required placeholder="myname@email.com"><br> 
                    <label>Username</label><br>
                    <input type="text" name="user_name" id="user_name" required placeholder="A unique name that makes you stand out"><br>
                    <label>Password</label><br>
                    <input type="password" name="user_pass" id="user_pass" required placeholder="8+ characters required"><br>
                    <label>Confirm Password</label> <br>
                    <input type="password" name="user_pass_check" id="user_pass_check" required placeholder="Repeat Password"><br>
                    
                    <p>By signing up you accept the <a href=""><span>Term of Service</span></a> <br> and <a href=""><span>Privacy Policy</span></a></p>

                    <button type="submit">Sign Up</button> 
                </form>
            </div>
            <div class="clearfix"></div>

        </div>

    </section>

    <?php include('includes/footer.php'); ?>
    
    <script src="js/form.js"> </script>
</body>
</html>