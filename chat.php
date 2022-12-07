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
        <div class="main-page">
            <?php include('includes/navSide.php'); ?>
        
            <div class="right">
                <div id="chatroomLeft">
                    <div id="group">
                      <h1>Group Name</h1>
                      <hr>
                      <button type="button" name="members" id="members">Members ></button>
                      <ul id="membs" style="display: none;">
                        <li>Name, status</li>
                        <li>Name, status</li>
                        <li>Name, status</li>
                      </ul>
                    </div>
                    <div id="chatrooms">
                      <hr>
                      <button type="button" name="channels" id="chan">Channels ></button>
                      <ul id="channels" style="display: none;">
                        <li><a href="#"># general</a></li>
                        <li><a href="#"># channel 1</a></li>
                        <li><a href="#"># channel 2</a></li>
                      </ul>
                    </div>
                  </div>
                  <div id="chat">
                    <h2>#general</h2>
                    <hr>
                    <form class="message" action="">
                        <input type="text" name="usermsg" id="usermsg">
                        <input type="submit" name="submitmsg" id="submit" value="Send">
                    </form>
                  </div>
                  <script src="./index.js"></script>
                            </div>

        </div>

                

        
        <div class="clearfix"></div>


    </main>

    <?php include('includes/footer.php'); ?>
   
</body>
</html>
