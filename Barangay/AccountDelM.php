<div class="modal fade" id="edit3_<?php echo $certificate['A_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    
           
                    <form  action="Barangay/AccountDel.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo  $certificate['A_id']; ?>" readonly>

                    
                    <!-- <label type ="hidden" class ="text2">Approve</label>            
                    <select type ="hidden"  class = "text1" name ="app"   required>
                    
                       <option value="Approve">Approve</option>
                       <option value="Disapproved">Disapproved</option>
                       
                    
                      </select> -->
                      <label type ="hidden" class ="text2">Do you Want To Disapprove This Account?</label>    
      
          

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <button type="submit" name ="Submit"class="btn btn-primary"> Yes</button>
                </div>
               </form>
            </div>
         </div>
        </div>