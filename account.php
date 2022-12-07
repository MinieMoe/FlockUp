<div id="wrapper"> 
    <div id="menu"> 
        <a class="item" href="index.php">Home</a>  
         
        <div id="userbar"> 
<?php 
        if($_SESSION['signed_in']) 
            { 
                echo 'Hello ' . $_SESSION['user_name'] . '.&nbsp;&nbsp;&nbsp;
                <a href="signout.php"> Sign out </a>'; 
            } 
        else 
            { 
                echo '<a href="signin.php">Sign in</a> or <a href="signup.php">Create 
an account</a>.'; 
            } 
?> 
        </div> 
</div> 