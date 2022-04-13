<?php
    
    include("./conn.php");
    
    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];

        echo "asche";

        $sql_u = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($con, $sql_u);

        $userData = mysqli_fetch_array($res_u);

        // echo $userData['password'];

        if (mysqli_num_rows($res_u) <= 0) {
            echo '<script type="text/javascript">alert("Sorry... User not found!");history.go(-1);</script>';
        }
        else if(sha1($password) != $userData['password']){
            echo '<script type="text/javascript">alert("Wrong passwordm, please try again!");history.go(-1);</script>';
        }
        else if(sha1($password) == $userData['password']){
            if($userData['role'] == "Admin"){
                header("Location: ./admin");
            }else if($userData['role'] == "donor"){
                header("Location: ./donor");
            }else if($userData['role'] == "patient"){
                header("Location: ./patient");
            }
        }
        else{
            echo '<script type="text/javascript">alert("Internal Server Error, please try again latter!");history.go(-1);</script>';
        }

     }
 
?>