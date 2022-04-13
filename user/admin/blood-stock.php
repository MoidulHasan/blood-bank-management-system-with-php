<?php
include'../conn.php';
include'./includes/sidebar.php';
?>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-2 font-weight-bold text-primary">Blood Stock</h4>
        </div>

        <div class="card-body">
            <div class="row">

                <?php
                    $query = "SELECT * FROM blood_stock";

                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col-6 col-md-3 my-5">
                                <div class="card p-3">
                                    <div class="row">
                                        <div class="col-6 d-flex justify-content-start">
                                            <h3 class="justify-content-start">
                                                <?php  echo $row["bloodGroup"]; ?>
                                            </h3>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <h3 class="justify-content-end">
                                                <?php  echo $row['unit']; ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }

                ?>
                        

                
            </div>
        </div>
    </div>
    

       





<!-- Applicants Details -->
<div id="dataModal" class="modal fade" >  
      <div class="modal-dialog modal-lg">  
           <div class="modal-content">  
                <div class="modal-header">  
                <h4 class="modal-title">Donor's Details</h4>  
              <button type="button" class="close" data-dismiss="modal">&times;</button>  
                 </div>  
                <div class="modal-body" id="preUsers-details">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="pageReload()">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!-- /Applicants Details -->





 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script>

     // function for reloading the current page
     const pageReload = () =>{
            location.reload();
        }

     $(document).ready(function() {

        // create function to view data button click event, this function take the id of pending user then post it to backend and show response to modal
        $(document).on('click', '.view_data', function() {
            var id = $(this).attr("id");
            if (id != '') {
                $.ajax({
                    url: "./backend/show-donation-request.php",
                    method: "POST",
                    data: {
                        id: id,
                        type: "blood_donation",
                    },
                    
                    success: function(data) {
                        $('#preUsers-details').html(data);
                        $('#dataModal').modal('show');
                        $(this).remove();
                    }
                });
            }
        });

        


        // create function to approve a pending user to user
        $(document).on('click', '.approve', function() {
            var id = $(this).attr("id");
            if (id != '') {
                
                $.ajax({
                    url: "./backend/approve-donation-request.php",
                    method: "POST",
                    data: {
                        id: id,
                        type: "blood_donation",
                    },
                    
                    success: function(data) {
                        $('#preUsers-details').html(data);
                        $('#dataModal').modal('show');
                    }
                });
            }
        });


        // Delete 
        $('.delete').click(function(){
        var el = this;
        
        // Delete id
        var deleteid = $(this).attr("id");
        
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
            // AJAX Request
            $.ajax({
                url: './backend/reject-donation-request.php',
                type: 'POST',
                data: { 
                    id:deleteid,
                    type: "blood_donation",
                },

                success: function(data) {
                    $('#preUsers-details').html(data);
                    $('#dataModal').modal('show');
                }
            });
        }

        });

    });
 </script>




<?php
    include'./includes/footer.php';
?>