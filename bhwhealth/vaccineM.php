<div class="modal fade" id="edit4_<?php echo $Patient['resident_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Immunize</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="bhwhealth/Addvaccine.php" method="post" enctype="multipart/form-data">

                          
                    <input type ="hidden" class = "text1" name= "C_id" Value="<?php echo $Patient['C_id'] ?>" readonly>
         
                    <input type ="hidden" class = "text1" name= "R_id" Value="<?php echo $Patient['resident_ID']  ?>" readonly>

                    <label class ="text2">First Name</label>            
                    <input type ="text" class = "text1" name= "Fname" Value="<?php echo $Patient['R_firstname']  ?>" readonly>

                    <label class ="text2">Last Name</label>            
                    <input type ="text" class = "text1" name= "Lname" Value="<?php echo $Patient['R_Lastname']  ?>" readonly>

                    <label class ="text2">Weight</label>            
                    <input type ="text" class = "text1" name= "Weight" placeholder ="Weight" required>
                   
                    <label class ="text2">Height</label>            
                    <input type ="text" class = "text1" name= "Height" placeholder ="Height" required>

                    <label class ="text2">Vaccine</label> 
                    <select  class = "text1" name ="Vaccine"  required>
                    <option >Select Vaccine </option>
                    <option value="BCG">BCG</option>
                    <option value="Penta1">Penta1</option>
                    <option value="Penta2">Penta2</option>
                    <option value="Penta3">Penta3</option>
                    <option value="Polio1">Polio1</option>
                    <option value="Polio2">Polio2</option>
                    <option value="Polio3">Polio3</option>
                    <option value="Hepa1">Hepa1</option>
                    <option value="Measles">Measles</option>
                    <option value="MMR">MMR</option>
            
                    </select>

                    <label class ="text2">Date</label>            
                    <input type ="date" class = "text1" name= "date" required>
            
                </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>