<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css"> 
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

    <main>
        <section class="main-padding">
            <div class="container"> 
            <?php

                include('includes/config.php');

                $user_name = $_POST['user_name'];
                $user_pass = $_POST['user_pass'];
                $user_pass_check = $_POST['user_pass_check'];
                $user_email = $_POST['user_email'];

                $sql = "INSERT INTO `users`(`user_id`, `user_name`, `user_pass`, `user_pass_check`, `user_email`) values ('0','$user_name','$user_pass','$user_pass_check','$user_email')";
;

                if(!mysqli_query($connect, $sql)){
                    echo "Error:".$sql;
                }
                else{
                    echo "<script> alert('Your Account created. Welcome to T-Tripper Planer!') </script>";
                    header("Location: setupProfile.php");
                }

                ?>
                
                      
            </div>
        </section>



    </main>

    <?php include('includes/footer.php'); ?>
   
</body>
</html>