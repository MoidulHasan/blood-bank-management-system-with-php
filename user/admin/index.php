<?php
include'../conn.php';
include'./includes/sidebar.php';
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- User Summery Row -->
    <div class="row">

        <!-- User query form the database -->
        <?php
            $query = "SELECT * FROM users";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalUser = mysqli_num_rows($result);
        ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $totalUser; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Find total pending user from the preUser database -->
        <?php
            $query = "SELECT * FROM preusers";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalPreUser = mysqli_num_rows($result);
        ?>

        <!-- Pending User Requests Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalPreUser; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Find total donor from the database -->
        <?php
            $query = "SELECT * FROM donors";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalDonor = mysqli_num_rows($result);
        ?>

        <!-- Total donor card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Donor
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalDonor; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Find total patient from the database -->
        <?php
            $query = "SELECT * FROM patients";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalPatient = mysqli_num_rows($result);
        ?>

        <!-- Total patient card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Patient
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalPatient; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
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
                    $query = "SELECT * FROM users";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalUser = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total User
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalUser; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    $query = "SELECT * FROM preusers";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalPreUser = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Pending User
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalPreUser; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>






                <?php
                    $query = "SELECT * FROM donors";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalDonor = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Donor
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalDonor; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                    $query = "SELECT * FROM patients";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalPatient = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Patient
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalPatient; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>



                <?php
                    $query = "SELECT * FROM blood_donation WHERE status='Approved'";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalApprovedDonation = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Approved Blood Donation
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalApprovedDonation; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>



                <?php
                    $query = "SELECT * FROM blood_donation WHERE status='Pending'";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalPendingDonation = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Pending Blood Donation
                                </h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <h3 class="justify-content-end">
                                    <?php  echo $totalPendingDonation; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                    $query = "SELECT * FROM blood_request WHERE status='Approved'";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalApprovedRequest = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Approved Blood Request
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



                <?php
                    $query = "SELECT * FROM blood_request WHERE status='Pending'";
                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                    $totalPendingRequest = mysqli_num_rows($result);
                ?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h3 class="justify-content-start">
                                     Total Pending Blood Request
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
                





                        
                
            </div>
        </div>
    </div>
    

    

<?php
    include'./includes/footer.php';
?>