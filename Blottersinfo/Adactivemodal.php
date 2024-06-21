<div class="modal fade" id="edit_<?php echo $Blotter['id']; ?>"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blotter</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Blottersinfo/Adactiveupdate.php" method="post" enctype="multipart/form-data">

                    
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Blotter['id']; ?>" readonly>
      
                      <label>Are you sure this case is settled?</label>   
                   
                   
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary" name="Submit"> Yes</button>
                </div>
               </form>
            </div>
         </div>
        </div>