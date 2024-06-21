<div class="modal fade" id="edit2_<?php echo $certificate['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Approve</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Barangay/App.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo  $certificate['id']; ?>" readonly>

                    <input type ="hidden" class = "text1" name= "App" placeholder ="Position" value="Approve" readonly>

                    <label type ="hidden" class ="text2">Do you Want To Approve</label>          
                   
      
                   
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <button type="submit" name ="Submit"class="btn btn-primary"> Yes</button>
                </div>
               </form>
            </div>
         </div>
        </div>