<?php
include'../conn.php';
include'./includes/sidebar.php';
?>
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Pending User Requests Card -->
    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Pending Blood Donation
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalPendingDonation; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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