<?php
    
    include("./conn.php");
    
    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $bloodGroup=$_POST['bloodGroup'];
        $registerAs=$_POST['registerAs'];
        $age=$_POST['age'];
        $lastDonation=$_POST['lastDoneted'];
        $disease=$_POST['disease'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];


        $sql_u = "SELECT * FROM preusers WHERE email='$email'";
        $res_u = mysqli_query($con, $sql_u);
        if (mysqli_num_rows($res_u) > 0) {
            echo '<script type="text/javascript">alert("Sorry... username already taken");history.go(-1);</script>';
        }
        else if($password != $confirmPassword){
            echo '<script type="text/javascript">alert("Password and confirm password not matched...");history.go(-1);</script>';
        }
        else{
                $hashedPass = sha1($password);

                $query="insert into preusers(name, email, contact, gender, bloodGroup, role, age, lastDonation, desease, address, password) values('$name', '$email', '$contact', '$gender', '$bloodGroup', '$registerAs', '$age', '$lastDonation', '$disease', '$address', '$hashedPass')";


                if(mysqli_query($con, $query) )
                {
                    echo '<script type="text/javascript">alert("Registration data submited, please wait for account approval!!");history.go(-2);</script>';
                }
                else{
                    echo '<script type="text/javascript">alert("Internal Server Error, Please Try Again Latter!!");history.go(-1);</script>';
                    // echo "ERROR: Could not able to execute . " . mysqli_error($con);
                }

            }

     }
 
?>