<?php

include('includes/config.php');

$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];

$sql = "SELECT * FROM users WHERE user_name ='$user_name' AND user_pass = '$user_pass'";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $user_name= $row["user_name"];

        session_start();
        $_SESSION['user_name'] = $user_name;
    }
    echo "<script> alert('You logined. Welcome to T-Tripper Planer!') </script>";
    header("Location: index.php");
}
else {
    echo "Invalid email or password";
    echo '<div>
    <h3><a href="sign-in.php">Try again</a></h3>
   <div>';
   
}












?>