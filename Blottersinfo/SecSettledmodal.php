<div class="modal fade" id="edit_<?php echo $Blotter['id']; ?>"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Blotter</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Blottersinfo/SecSettledUpdate.php" method="post" enctype="multipart/form-data">

                    
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Blotter['id']; ?>" readonly>

                         
                    <label class ="text2">Compalinant</label>            
                    <input type ="text" class = "text1" name= "Complainant" placeholder ="Complainant"  value="<?php echo $Blotter['complainant']; ?>"  required>

                    <label class ="text2">Respondent</label>            
                    <input type ="text" class = "text1" name= "Respondent" placeholder ="Respondent"  value="<?php echo $Blotter['respondent']; ?>" required>

                    <label class ="text2">Date</label>            
                    <input type ="date" class = "text1" name= "date" placeholder ="date"  value="<?php echo $Blotter['date']; ?>"  required>

                    <label class ="text2">Time</label>            
                    <input type ="time" class = "text1" name= "Time" placeholder ="Time"  value="<?php echo $Blotter['time']; ?>"  required>

                    <label class ="text2">Details</label>            
                    <textarea type ="text" class = "text1" name= "Details" placeholder ="Details"   required><?php echo $Blotter['details']; ?></textarea>

                    
                    <label class ="text2">Status</label> 

                    <select  class = "text1" name ="Stat" placeholder ="Stat"  required>
                    <option ><?php echo $Blotter['status'];?></option>
                    
					<option value="Active">Active</option>
					<option value="Settled">Settled</option>
                    <option value="Unsettled">Unsettled</option>
					<option value="Scheduled">Scheduled</option>

                    </select>
                   
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="Submit"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>