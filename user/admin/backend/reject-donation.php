<?php
    // connect database
    include '../../conn.php';

    // check id is posted or not
    if(isset($_POST['id'])){

        $id = $_POST['id'];


        // sql command for inserting into user table 
        $query="UPDATE blood_donation SET status='Rejected' WHERE id='$id'";

        // insert this user into users table 
        if(mysqli_query($con, $query)){

            // response about blood stock updae
            echo "Blood Donation Request Rejected";
        }
        else{
            echo "Internal Server Error, please try again latter.";
        }
	}
    else{
        echo "Please provide a valid Blood Donation ID";
    }
	
?>