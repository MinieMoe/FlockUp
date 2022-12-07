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
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="clearfix"></div>

    <section class="main-padding">
        <h1 class="acc">Welcome back!</h1>
        <div class="sign-in">
            <form method="post" action="sign-in-connect.php" onsubmit="return validateForm();"> 
                <input type="hidden" name="activity" value="signin" > 
                <label>Username: <input type="text" name="user_name" id="user_name" value="" required ></label> 
                <br><br>
                <label>Password: <input type="password" name="user_pass" id="user_pass" value=""  required></label>
                <br><br> 
                <input type="submit" value="Sign in" /> 
            </form>
        </div>

        <a href="create-account.php" class="connect">Create Account</a>
    </section>

    <?php include('includes/footer.php'); ?>
    <script src="form.js"> </script>
</body>
</html>