<div class="modal fade" id="edit2_<?php echo $resident['resident_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resident Info</h5>
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
                    <label >Purok id:</label>            
                    <h6 class ="text2"><?php echo $resident['P_id']; ?></h6>

                        </div>

                        <div class="col">
                    <label class ="" >Household ID:</label> 
                    <h6 class = "text2"  ><?php echo $resident['householdNO']; ?></h6>
                        </div>

                       

                        </div>

                        <div class="row align-items-start">
                        <div class="col">
                    <label class ="">First Name</label> 
                    <h6 class = "text2"> <?php echo $resident['R_firstname']; ?></h6>
                        </div>

                    <div class="col">

                    <label class ="">Middle Name</label> 
                    <h6 class = "text2"><?php echo $resident['R_Middilename']; ?></h6>

                        </div>
                      
                        <div class="col">
                    <label class ="">Last Name</label> 
                    <h6 class = "text2"><?php echo $resident['R_Lastname']; ?></h6>
                        </div>

                      

                    </div>

                    <div class="row align-items-start">
                    <div class="col">
                    <label class ="">Age</label> 
                    <h6 class = "text2" > <?php echo $age; ?></h6>
                        </div>

                    <div class="col">

                    <label class ="">Gender</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    <h6 class = "text2" > <?php echo $resident['R_gender']; ?></h6>
                   
                        </div>
                      
                        <div class="col">
                    <label class ="">Status</label> 
                    <h6 class = "text2" > <?php echo $resident['R_status']; ?></h6>
         
                        </div>
                     
                   
            </div>

            <div class="row align-items-start">
            <div class="col">
                    <label class ="">Bithdate</label> 
                    <h6 class = "text2" > <?php echo $resident['R_birthdate']; ?></h6>
                    </div>

                    <div class="col">

                    <label class ="">Birth Place</label> 
                    <h6 class = "text2" > <?php echo $resident['R_Birthplace']; ?></h6>
               
                        </div>
                      
                        

                     
                        <div class="col">

<label class ="">Nationality</label> 
<h6 class = "text2" > <?php echo $resident['R_nationality']; ?></h6>

    </div>
                   
            </div>

            <div class="row align-items-start">
            <div class="col">
                    <label class ="">Religion</label> 
                    <h6 class = "text2" > <?php echo $resident['R_religion']; ?></h6>
                    </div>

                    <div class="col">
                    <label class ="">Bloodtype</label> 
                    <h6 class = "text2" > <?php echo $resident['R_bloodtype']; ?></h6>
               
                        </div>
   
                        <div class="col">

<label class ="">Pwd</label> 
<h6 class = "text2" > <?php echo $resident['Pwd']; ?></h6>

    </div>
                   
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