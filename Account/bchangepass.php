


<div class="modal fade" id="love" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form  action="Account/bpassword.php" method="post" enctype="multipart/form-data">
            
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $_SESSION["bhuid"]; ?>" readonly>

                       
                    <label class ="text2">Current Password</label>            
                    <input type ="Password" class = "text1" name= "new" placeholder ="Current Password" required >

                    
                    <label class ="text2">New Password</label>            
                    <input type ="Password" class = "text1" name= "new1" placeholder ="New Password" required >

                    <label class ="text2">Retype password</label>            
                    <input type ="Password" class = "text1" name= "new2" placeholder ="Retype Password"  required>

            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="Submit" class="btn btn-primary">Change</button>
                </div>
               </form>
            </div>
         </div>
        </div>


