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

    <main>
        <section class="main-padding">
            <div class="container"> 
                <?php 
                        include('includes/config.php');

                        $tilte = $_POST['tilte'];
                        $startDate = $_POST['startDate'];
                        $endDate = $_POST['endDate'];
                        $skill = $_POST['skill'];
                        $describe = $_POST['describe'];
                        $needed = $_POST['needed'];
                        $time = $_POST['time'];
 
                        $sql = "INSERT INTO project_info(project_id, user_id, title, skill, describe, needed, time, startDate, endDate) VALUES ('0',$user_id,'$tilte','$skill', '$describe', '$needed', '$time', '$startDate', '$endDate')";

                        if(!mysqli_query($connect, $sql)){
                            echo "Can not upload the post. Check your text again.";
                        }else{
                            echo "<script> alert('Post Submitted') </script>";
                            echo '<h2>This is Your Plan Informations; </h2>';

                            $show = "SELECT * FROM plan ORDER BY id DESC LIMIT 1";
                            
                            $result = mysqli_query($connect, $show);

                            while ($row = mysqli_fetch_array($result)){
                                echo "Trip Name: ".$row['name'];
                                echo '<br>';
                                echo "Start Date: ".$row['startDate'];
                                echo '<br>';
                                echo "End Date: ".$row['endDate'];
                                echo '<br>';
                                echo "No. Country: ".$row['country'];
                                echo '<br>';
                                echo "Things to Do: <br>".$row['todo'];
                                echo '<br>';
                                echo "Hotel Information: <br>".$row['hotel'];
                                echo '<br>';
                                echo "Transport Information: <br>".$row['transport'];
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