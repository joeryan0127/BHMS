<div class="modal fade" id="edit3_<?php echo $Patient['resident_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Baby Info</h5>
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
                    <label class ="">First Name</label> 
                    <h6 class = "text2"> <?php echo $Patient['R_firstname']; ?></h6>
                        </div>
                        <div class="col">

                <label class ="">Middle Name</label> 
                <h6 class = "text2"><?php echo $Patient['R_Middilename']; ?></h6>

                </div>
   
                     <div class="col">
                    <label class ="">Last Name</label> 
                    <h6 class = "text2"><?php echo $Patient['R_Lastname']; ?></h6>
                        </div>
        
                    </div>

                        <div class="row align-items-start">
                    

                        <div class="col">
                    <label class ="">Age</label> 
                    <h6 class = "text2" > <?php echo $age, "Month/s"; ?></h6>
                        </div>

                        <div class="col">

                        <label class ="">Gender</label> 
                        <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                        <h6 class = "text2" > <?php echo $Patient['R_gender']; ?></h6>

                        </div>

                        <div class="col">
                    <label class ="">Bithdate</label> 
                    <h6 class = "text2" > <?php echo $Patient['R_birthdate']; ?></h6>
                    </div>


                    </div>

                 
            <div class="row align-items-start">
            <div class="col">

<label class ="">Birth Place</label> 
<h6 class = "text2" > <?php echo $Patient['R_Birthplace']; ?></h6>

    </div>

    <div class="col">

<label class ="">Parent</label> 
<h6 class = "text2" > <?php echo $Patient['C_Parent']; ?></h6>

    </div>
</div>
    
    <div class="row align-items-start">
    <div class="col">

<label class ="">Height</label> 
<h6 class = "text2" > <?php echo $Patient['C_ht']; ?></h6>

    </div>


    
    <div class="col">

<label class ="">Weight</label> 
<h6 class = "text2" > <?php echo $Patient['C_wt']; ?></h6>

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