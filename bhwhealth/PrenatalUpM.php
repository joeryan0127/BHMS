<div class="modal fade" id="edit4_<?php echo $Purok['prenatal_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Prenantal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="bhwhealth/Addprenatal.php" method="post" enctype="multipart/form-data">

                            
                   
                    <input type ="hidden" class = "text1" name= "M_id" value="<?php echo $Purok['Maternity_id'] ?>" readonly>

                    <label class ="text2">First name</label>            
                    <input type ="text" class = "text1" name= "" value="<?php echo $Purok['R_firstname'] ?>" readonly>

                    <label class ="text2">Last Name</label>            
                    <input type ="text" class = "text1" name= "" value="<?php echo $Purok['R_Lastname'] ?>" readonly>
                  
                    <label class ="text2">Weight</label>            
                    <input type ="text" class = "text1" name= "wt"  required>

                    
                    <label class ="text2">Blood Pressure</label>            
                    <input type ="text" class = "text1" name= "Bp" required>

                    <label class ="text2">Temparature</label>            
                    <input type ="text" class = "text1" name= "temp"  required>

              
                    <label class ="text2">Weeks of pregnant</label>            
                    <input type ="text" class = "text1" name= "week"  required>

                    <!-- <label class ="text2">Date Of vaccine</label>            
                    <input type ="date" class = "text1" name= "date"required> -->

                    <label class ="text2">Vaccine</label>

                    <select  class = "text1" name ="vaccine"  required>
                    <option >Select </option>
                    <option value="DONE">Anti Tetanus</option>
                    <option value="DONE">DONE</option>


  </select>
             
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