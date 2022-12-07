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

        <div class="mainForm">
            <h2 class="sub-heading" style="color:#a86767e1; font-size:50px"> Find your partner</h2>
            <form action="planMade.php" class="plan-form" method="post" role="form" autocomplete  style= "color: black">
                <label for="tilte">Project Title</label><br>
                <input type="text" id="tilte" name="tilte" size="40px" ><br>

                <label for="describe">Project Describe</label><br>
                <textarea id="describe" name="describe" rows="6" cols="81"></textarea><br>

                <label for="needed">What You Are Looking For:</label><br>
                
                <textarea id="needed" name="needed" rows="6" cols="81"></textarea><br>

                <label for="time">Time Prefer</label><br>
                <input type="text" id="time" name="time" size="40px"><br>

                <label for="skill">Skills Prefer</label><br>
                <input type="text" id="skill" name="skill" size="40px"><br>

                <label class="form-label">Begin Date</label> 
                <input type="date" class="form-control" id="startDate" name="startDate" > 

                <label class="form-label">End Date</label> 
                <input type="date" class="form-control" id="endDate" name="endDate" > 

                <input type="submit" value="Done" class="Form-button "><br>
            </form>
                
            
        </div>



    </main>

    <?php include('includes/footer.php'); ?>
   
</body>

</html>