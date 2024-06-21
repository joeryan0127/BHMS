<div class="modal fade" id="edit2_<?php echo $official['Offcial_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Official Info</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">

                    <form  action="Barangay/updateres.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $resident['resident_ID']; ?>" readonly>

                         
                    <div class="row align-items-start">
                    <div class="col">
                    <label >Official id:</label>            
                    <h6 class ="text2"><?php echo $official['Offcial_id']; ?></h6>

                        </div>

                        <div class="col">
                    <label class ="" >Position:</label> 
                    <h6 class = "text2"  ><?php echo $official['Position']; ?></h6>
                        </div>
                        </div>

                        
                        <div class="row align-items-start">
                        <div class="col">
                    <label class ="">Full Name</label> 
                    <h6 class = "text2"> <?php echo $official['Full_Name']; ?></h6>
                        </div>

                       

                    <div class="col">

                    <label class ="">Contact Number</label> 
                    <h6 class = "text2"><?php echo $official['Contact_no']; ?></h6>

                        </div>
                        </div>

                        <div class="row align-items-start">
                        <div class="col">
                    <label class ="">Address</label> 
                    <h6 class = "text2"><?php echo $official['Address']; ?></h6>
                        </div>

                        <div class="col">
                    <label class ="">Start Term</label> 
                    <h6 class = "text2" > <?php echo $official['Start_Term']; ?></h6>
                        </div>

                        </div>

                    
                    <div class="col">

                    <label class ="">End Term</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    <h6 class = "text2" > <?php echo $official['End_Term']; ?></h6>
                   
                        </div>
                      
                       
              
                   
           

            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                   
                </div>
               </form>
            </div>
         </div>
        </div>