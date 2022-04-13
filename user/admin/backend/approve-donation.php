<?php
    // connect database
    include '../../conn.php';

    // check id is posted or not
    if(isset($_POST['id'])){

        $id = $_POST['id'];


        // sql command for inserting into user table 
        $query="UPDATE blood_donation SET status='Approved' WHERE id='$id'";

        // insert this user into users table 
        if(mysqli_query($con, $query)){

            // sql command for checking the users role
            $query1 = "SELECT * FROM blood_donation WHERE id='$id'";

            // query for this user's role
            $result1 = mysqli_query($con, $query1) or die (mysqli_error($con));

            // fetch donor donation info
            $donor = mysqli_fetch_assoc($result1);

            $bloodGroup = $donor['bloodGroup'];
            $unit = $donor['unit'];

            // update blood stock
            $updateSql = "UPDATE blood_stock SET unit = unit + $unit WHERE bloodGroup='$bloodGroup'";

            if(mysqli_query($con, $updateSql)){
                // response about blood stock updae
                echo "Blood Donation Request Approved";
            }
            else{
                // response about error
                // echo "not inserted " .mysqli_error($con);
                echo "Internal Server Error.";
            }
        }
        else{
            echo "Internal Server Error, please try again latter.";
        }
	}
    else{
        echo "Please provide a valid Blood Donation ID";
    }
	


  
 
?>