<div class="modal fade" id="edit2_<?php echo $Patient['resident_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="bhwhealth/childup.php" method="post" enctype="multipart/form-data">
                   
                   
                    <input type ="hidden" class = "text1" name= "id" value="<?php echo $Patient['resident_ID']?>" readonly>


                    <label class ="text2">Firstname</label>            
                    <input type ="text" class = "text1" name= "R_id" value="<?php echo $Patient['R_firstname']?>" readonly>

                    <label class ="text2">Last Name</label>            
                    <input type ="text" class = "text1" name= "R_id" value="<?php echo $Patient['R_Lastname']?>" readonly>

                    <label class ="text2">Sex</label>            
                    <input type ="text" class = "text1" name= "R_id" value="<?php echo $Patient['R_gender']?>"  readonly>

                    <label class ="text2">Birth date</label>            
                    <input type ="text" class = "text1" name= "R_id" value="<?php echo $Patient['R_birthdate']?>" readonly>

                    
                    <label class ="text2">Parent</label>            
                    <input type ="text" class = "text1" name= "Parent" value ="<?php echo $Patient['C_Parent']?> "  required>


                   
                    <label class ="text2">Weight</label>            
                    <input type ="text" class = "text1" name= "Weight" value="<?php echo $Patient['C_wt']?>" required>
                   
                    <label class ="text2">Height</label>            
                    <input type ="text" class = "text1" name= "Height" value="<?php echo $Patient['C_ht']?>" required>
           
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>