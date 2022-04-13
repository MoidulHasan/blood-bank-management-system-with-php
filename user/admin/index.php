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