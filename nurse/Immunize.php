<div class="modal fade" id="edit2_<?php echo $Purok['Immunize_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Immunization</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="nurse/immunizeD.php" method="post" enctype="multipart/form-data">
                   
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Purok['Immunize_id']; ?>" readonly>
<center>Are you sure this is Done?</center>
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">NO</button>
                    <button type="submit" name="Submit" class="btn btn-primary">Yes</button>
                </div>
               </form>
            </div>
         </div>
        </div>