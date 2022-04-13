<?php
include'../conn.php';
include'./includes/sidebar.php';
?>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-2 font-weight-bold text-primary">Dashboard</h4>
        </div>

        <div class="card-body">
            <div class="row">

                <?php
                    $query = "SELECT * FROM blood_donation where user_id='".$_SESSION['id']."'";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalRequest = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-4 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Request
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalRequest; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    $query1 = "SELECT * FROM blood_donation where user_id='".$_SESSION['id']."' and status='Pending'";
                    // query for preusers data
                    $result1 = mysqli_query($con, $query1) or die (mysqli_error($con));

                    $totalPendingRequest = mysqli_num_rows($result1);
                ?>
                <div class="col-6 col-md-4 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                    Pending Request
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalPendingRequest; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                    $query2 = "SELECT * FROM blood_donation where user_id='".$_SESSION['id']."' and status='Approved'";
                    // query for preusers data
                    $result2 = mysqli_query($con, $query2) or die (mysqli_error($con));

                    $totalApprovedRequest = mysqli_num_rows($result2);
                ?>
                <div class="col-6 col-md-4 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                    Approved Request
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalApprovedRequest; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                





                        
                
            </div>
        </div>
    </div>
    

    

<?php
    include'./includes/footer.php';
?>