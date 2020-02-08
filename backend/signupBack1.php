<?php
    session_start();
    include '../includes/db_connect.php';

    if(isset($_POST['submit'])){

        $state=mysqli_real_escape_string($conn,$_POST['statesSignup']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $aadhar=mysqli_real_escape_string($conn,$_POST['adhar']);

                $sql="UPDATE seller set state1= $state, email = $email, adhar = $aadhar where PhoneNo = '$_GET[No]';";
                mysqli_query($conn,$sql);
                header("Location: ../signup3.php?No=".$_GET['No']);
            
        }
else{
    header("Location: ../signup.php?signup=error");
}
?>