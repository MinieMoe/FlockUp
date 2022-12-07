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

                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
 
                        $sql = "INSERT INTO contact(id, name, phone, email, message) VALUES ('0','$name','$phone','$email', '$message')";

                        if(!mysqli_query($connect, $sql)){
                            echo "Information Not Added";
                        }else{
                            echo "<script> alert('Thank You, Check Your Email for Response!') </script>";
                            echo '<h3>This is Your Contact Informations; </h3>';
                            $show = "SELECT * FROM contact ORDER BY id DESC LIMIT 1";
                            
                            $result = mysqli_query($connect, $show);

                            while ($row = mysqli_fetch_array($result)){
                                echo "Name: ".$row['name'];
                                echo '<br>';
                                echo "Phone: ".$row['phone'];
                                echo '<br>';
                                echo "Email: ".$row['email'];
                                echo '<br>';
                                echo "Message: ".$row['message'];
                                echo '<br>';
                            }
                        }
                ?> 
                
                      
            </div>
        </section>



    </main>

    <?php include('includes/footer.php'); ?>
   
</body>
</html>