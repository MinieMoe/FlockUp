<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css?ver=<?php echo rand(111,999)?>">  
    <script src="profilePage-script.js" defer></script>
    
    <title>Contact | Bellingham Hotel</title>
    <!-- Favicon --> 
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png"> 
    <link rel="icon" type="image/jpeg" sizes="32x32" href="favicon/t-icon-21.jpeg"> 
    <link rel="icon" type="image/jpeg" sizes="16x16" href="favicon/t-icon-21.jpeg"> 
    <link rel="icon" type="image/jpeg" href="favicon/t-icon-21.jpeg"> 
    <link rel="manifest" href="favicon/site.webmanifest"> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">                                                       
</head>
<body>
    <?php include('includes/header.php'); ?>


    <main>
        <div class="main-page">
            <?php include('includes/navSide.php'); ?>
        
            <div class="right">
               <div class="content">

        <!--Top section include photos and bio
        TD: link uploaded user image to avatar
        link uploaded background photo
        -->
        <div class="top-user-info">
            <div class="photos">
                <div class="top-background-photo">
                    <img class="background-photo" src="./images/69298971_1303448573165403_2208665293922762752_n.jpg" alt="background-photo">
                </div>
                <img class="user-avatar" src="./images/147142.png" alt="user-avatar">
                <div class="bottom-background-photo"></div>
            </div>
            
            <div class="description">
                <div class="flexbox">
                    <h2 class="user-name">User Name</h2>
                    <!--TD: link the button to the direct message chat-->
                    <button type="button">Message</button>
                </div>

                <!-- TD:
                    star reviews
                    skill tags- pull from the database
                    link icon next to personal link
                -->
                <ul class="skill-tags">Skills:
                    <li class="tag">Skill A</li>
                    <li class="tag">Skill B</li>
                    <li class="tag">Skill C</li>
                </ul>
                <div class="link-and-education">
                    <a class="common skills" href="">mywebsite.com</a>
                    <p class="common skills">School Name</p>
                    <p class="skills">Department</p>
                </div>
                
                <h3 class="introduction">About</h3>
                <p class="bio">[blah blah]</p>
            </div>  

        </div>

        <!-- From the tabs section onward-->
        <div class="bottom-user-info">

            <ul class="tab-headers">
                <li data-tab-target="#reviews-tab" class="active tab-h">User Reviews</li>
                <li data-tab-target="#projects-tab" class="tab-h">Projects</li>
            </ul>

            <div class="tab-content">
                
                <!--Review tab-->
                <div class="tab active" id="reviews-tab" data-tab-content>Reviews

                </div>

                <!--Project tab-->
                <div class="tab" id="projects-tab" data-tab-content>Projects

                    <!-- List of on going projects-->
                    <div class="ongoing">On Going
                        <ul class="project">
                            <li class="project-tag">

                            </li>
                        </ul>
                    </div>

                    <!--List of past project-->
                    <div class="past-project">Past Projects
                        <ul class="project">
                            <li class="project-tag">
                                
                            </li>
                        </ul>
                    </div>

                </div>

            </div>


        </div>
    </div>
            </div>

        </div>

                

        
        <div class="clearfix"></div>


    </main>

    <?php include('includes/footer.php'); ?>
   
</body>
</html>
