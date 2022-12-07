<?php 
// require 'includes/dbh.inc.php';
// $_SESSION["id"] = 1;
// $sessionId = $_SESSION["id"];
// $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user_profile WHERE user_id =$sessionId"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="profilePage-script.js" defer></script>
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300&display=swap" rel="stylesheet">
</head>
<body>

    <div class="welcome-description">
        <p>Welcome to FlockUp</p>
        <p>We can't wait for you to find and get to work! But first things first, let's get <br> your profile set up to help you stand out in your search for a team.</p>
    </div>

    <form action="includes/editProfile.inc.php" enctype="multipart/form-data" method="POST">
        <div class="content">

            <!--Top section include photos and bio
            TD: link uploaded user image to avatar
            link uploaded background photo
            -->
            <div class="top-user-info">
                <div class="photos">
                    <div class="top-background-photo">
                        <img class="background-photo" src="profileImg/default_bg.jpg" alt="background-photo">

                        <!--update background picture-->
                        <div class="update-icon bg-icon">
                            <input type="file" name="bg-update" id="update-btn">
                            <i class="fa fa-camera bg-cam"></i>
                        </div>

                    </div>

                    <div class="user-avatar">
                        <img src="images/147142.png" alt="user-avatar" id="avatar">
                        
                        <!--update avatar picture-->
                        <div class="update-icon avatar-icon">
                            <input type="file" name="avatar-update" id="update-btn">
                            <i class="fa fa-camera"></i>
                        </div>
                    </div>
                    
                    <div class="bottom-background-photo"></div>
                </div>
                
                <div class="setupProfile-description">
                    <div class="flexbox">
                        <input type="text" name="user-name" id="user-name" required placeholder="Enter your name">
                        <!--TD: link the button to the direct message chat-->
                        <!--TD: Edit profile button 
                            check if the user id matches with the profile, then show edit button
                            else not match, show "Message" button
                        -->
                        <input class="setupProfile-button" type="submit" name="submit" value="Message" disabled>
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

                    <!-- Link and Education -->
                    <div class="link-and-education">
                        <!-- <a class="common skills" href="">mywebsite.com</a>
                        <p class="common skills">School Name</p>
                        <p class="skills">Department</p> -->
                        <i class="fa fa-link"></i>

                        <div class="common skills">
                            <input type="text" name="weblink" id="weblink" required placeholder="Weblink">
                        </div>
                        <div class="common skills">
                            <input  type="text" name="education" id="education" required placeholder="School">
                        </div>
                        <div class="skills">
                            <input type="text" name="major" id="major" required placeholder="Major">
                        </div>
                        
                    </div>
                    
                    <!-- Bio -->
                    <h3 class="introduction">About</h3>
                    <!-- <p class="bio">[blah blah]</p> -->
                    <textarea class="bio" name="bio-description" id="bio-description" rows="5" maxlength="200" placeholder="Tell us about yourself..."></textarea>
                </div>  

            </div>
        </div>
        <input class="button" type="submit" name="submit" value="Next">
    </form>
    
</body>
</html>