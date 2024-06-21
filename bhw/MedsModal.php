<div class="modal fade" id="edit2_<?php echo $Purok['Med_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Medicine</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="bhw/MedsUpdate.php" method="post" enctype="multipart/form-data">
                   
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Purok['Med_id']; ?>" readonly>

                    <label class ="text2">Name</label>            
                    <input type ="text" class = "text1" name= "Mname" placeholder ="Name" value="<?php echo $Purok['Med_name']; ?>" required>

                    <label class ="text2">Discription</label>            
                    <input type ="text" class = "text1" name= "Discription" placeholder ="Discription" value="<?php echo $Purok['Med_discription']; ?>" required>

                    <label class ="text2">Dosage</label>            
                    <input type ="text" class = "text1" name= "Dosage" placeholder ="Dosage" value="<?php echo $Purok['Med_dosage']; ?>" required>
                   
                    <label class ="text2">Expiry date</label>            
                    <input type ="date" class = "text1" name= "Edate" value="<?php echo $Purok['Expiry_date']; ?>" required>

                    <label class ="text2">Quantity</label>            
                    <input type ="text" class = "text1" name= "quant" placeholder ="Quantity" value="<?php echo $Purok['Med_quantity']; ?>" required>
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