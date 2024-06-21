<?php
                    $char="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                    $love=substr(str_shuffle($char),0,8);
              ?>



<div class="modal fade" id="edit3_<?php echo $Purok['A_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Account/Supdatepass.php" method="post" enctype="multipart/form-data">
            
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Purok['A_id']; ?>" readonly>

                       
                    
                    
                    <label class ="text2">New Password</label>            
                    <input type ="text" class = "text1" name= "new" placeholder ="Fullname" value="<?php echo $love ?>" readonly >

                    <label class ="text2">Retype password</label>            
                    <input type ="Password" class = "text1" name= "new1" placeholder ="Retype Password"  required>

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