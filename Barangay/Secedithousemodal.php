<div class="modal fade" id="edit2_<?php echo $Purok['householdNO']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Houshold</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Barangay/Secuphouse.php" method="post" enctype="multipart/form-data">
                   
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Purok['householdNO']; ?>" readonly>

                         
                    <label class ="text2">Purok</label>            
                    <input type ="text" class = "text1" name= "Purok" placeholder ="Purok" value="<?php echo $Purok['P_id']; ?>"required>

                    <label class ="text2">No Members</label>            
                    <input type ="text" class = "text1" name= "member" placeholder ="Member" value="<?php echo $Purok['H_member']; ?>" required>
                    <label class ="text2">Head of Family</label>            
                    <input type ="text" class = "text1" name= "Family" placeholder ="Head Of Family" value="<?php echo $Purok['H_headoffamily']; ?>" required>
                   
                    <label class ="text2">Gov. Beneficiary</label> 
                    <select  class = "text1" name ="benefit" placeholder ="Gender"  required>
                    <option ><?php echo $Purok['govBenefits']; ?></option>
                    <option >Select </option>
                     <option value="4'Ps">4'Ps</option>
                     <option value="UCT">UCT</option>
                     <option value="UCT">NONE</option>
                </select>
                
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