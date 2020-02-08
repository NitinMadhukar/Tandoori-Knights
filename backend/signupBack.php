<?php
    session_start();
    include '../includes/db_connect.php';

    if(isset($_POST['submit'])){

    

        $phoneNo=mysqli_real_escape_string($conn,$_POST['phoneNo']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $password1=mysqli_real_escape_string($conn,$_POST['password1']);
        

        
            $sql="SELECT * FROM seller WHERE PhoneNo='$phoneNo'";
            $results=mysqli_query($conn, $sql);
            $resultsCheck=mysqli_num_rows($results);
            if($resultCheck > 0)
            {
                header("Location: ../signup.php?signup=NoExist");
            }
            else{
                //hashing the password
                $hashedpwd= password_hash($password, PASSWORD_DEFAULT);
                $sql="INSERT INTO seller (PhoneNO, Pwd) VALUES ('$phoneNo','$hashedpwd');";
                mysqli_query($conn,$sql);
                header("Location: ../signup2.php?No=".$phoneNo);
            }
        }
else{
    header("Location: ../signup.php?signup=error");
}
?>