<div class="modal fade" id="edit2_<?php echo $Purok['A_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update account</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="includes/updateuser.php" method="post" enctype="multipart/form-data">
                   
              

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Purok['A_id']; ?>" readonly>

                    <label class ="text2">Type</label>            
                    <select name="types" class="text1" id="types">
                    <option ><?php echo $Purok['A_type'];?></option>
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>
                                <option value="BHW">BHW</option>
                                <option value="Nurse">Nurse</option>
                                    </select>     
                    
                    
                    <label class ="text2">Full Name</label>            
                    <input type ="text" class = "text1" name= "Name" placeholder ="Fullname" value="<?php echo $Purok['A_Completename']; ?>"  required>

                    <!-- <label class ="text2">User Name</label>            
                    <input type ="text" class = "text1" name= "User1" placeholder ="Username" value="<?php echo $Purok['A_username']; ?>"  readonly> -->

            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="Submit" class="btn btn-primary">Update</button>
                </div>
               </form>
            </div>
         </div>
        </div>