<div class="modal fade" id="edit_<?php echo $Purok['P_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Purok</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Barangay/uppurok.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Purok['P_id']; ?>" readonly>

                    <label class ="text2">Name</label>            
                    <input type ="text" class = "text1" name= "Purok_name" value="<?php echo $Purok['P_name']; ?>" required>

                   
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name ="Submit"class="btn btn-primary"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>