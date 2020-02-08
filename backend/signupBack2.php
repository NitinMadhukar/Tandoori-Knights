<?php
    session_start();
    include '../includes/db_connect.php';

    if(isset($_POST['submit'])){

    

        $name=mysqli_real_escape_string($conn,$_POST['name']);


                $sql="INSERT INTO seller (state1, email, adhar) VALUES ('$state','$email', '$aadhar');";
                mysqli_query($conn,$sql);
                header("Location: ../signup3.php?No=".$email);
            
        }
else{
    header("Location: ../signup.php?signup=error");
}
?>