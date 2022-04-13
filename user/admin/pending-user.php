<?php
include'../../conn.php';
include'./includes/sidebar.php';

    // construct sql command for fatching all pending user list from preuser table
    $query = "SELECT * FROM preusers";

    // make query
    $result = mysqli_query($con, $query) or die (mysqli_error($con));

    // traverse the array of query result
    while ($row = mysqli_fetch_assoc($result)) {
        
    }

include'./includes/footer.php';
?>