<div class="modal fade" id="edit2_<?php echo $Purok['Maternity_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Mother</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="bhwhealth/MaternityUp.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"value="<?php echo $Purok['Maternity_id']; ?>" readonly>


                    <label class ="text2">Firstname</label>            
                    <input type ="text" class = "text1" name= "fname" value="<?php echo $Purok['R_firstname']; ?>" readonly>

                    <label class ="text2">Lastname</label>            
                    <input type ="text" class = "text1" name= "lname" value="<?php echo $Purok['R_Lastname']; ?>" readonly>
                  
                    <label class ="text2">Temparature</label>            
                    <input type ="text" class = "text1" name= "temp" value="<?php echo $Purok['temp']; ?>" required>

                    <label class ="text2">Age</label>            
                    <input type ="text" class = "text1" name= "age" value="<?php echo $Purok['age']; ?>" required>
                   
                    <label class ="text2">Weight</label>            
                    <input type ="text" class = "text1" name= "wt" value="<?php echo $Purok['Wt']; ?>" required>

                    <label class ="text2">Height</label>            
                    <input type ="text" class = "text1" name= "ht" value="<?php echo $Purok['Ht']; ?>" required>
                  
                    <label class ="text2">Blood Pressure</label>            
                    <input type ="text" class = "text1" name= "Bp" value="<?php echo $Purok['Bp']; ?>" required>
                    
                    <label class ="text2">Pulse Rate</label>            
                    <input type ="text" class = "text1" name= "Pr" value="<?php echo $Purok['Pr']; ?>" required>

                    <label class ="text2">EDC</label>            
                    <input type ="date" class = "text1" name= "Edc" value="<?php echo $Purok['Edc']; ?>" required>

                    <label class ="text2">AOG</label>            
                    <input type ="text" class = "text1" name= "Aog" value="<?php echo $Purok['Aog']; ?>" required>
             
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" Name="Submit" class="btn btn-primary"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>