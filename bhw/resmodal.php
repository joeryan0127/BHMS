

<div class="modal fade" id="edit1_<?php echo $resident['resident_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Info</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">

                    <form  action="bhw/resupdate.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $resident['resident_ID']; ?>" readonly>

                         
                  
                 

                        
                    

                        <div class="row align-items-start">

                        <div class="col">
                    <label class ="text2">First Name</label> 
                    <input class = "text1" name ="fname" placeholder ="First Name" value="<?php echo $resident['R_firstname']; ?>" required>
                        </div>


                    <div class="col">

                    <label class ="text2">Middle Name</label> 
                    <input type ="text" class = "text1" name ="Mname" placeholder ="Middle Name" value="<?php echo $resident['R_Middilename']; ?>"  required>

                        </div>
                      
                        <div class="col">
                    <label class ="text2">Last Name</label> 
                    <input type ="text" class = "text1" name="lname" placeholder ="Last Name" value="<?php echo $resident['R_Lastname']; ?>" required>
                        </div>

                        <!-- <div class="col">
                    <label class ="text2">Age</label> 
                    <input type ="text" class = "text1" name ="age"  placeholder ="Age" value="<?php echo $resident['R_Age']; ?>" required>
                        </div> -->

                    </div>

                    <div class="row align-items-start">
                    <div class="col">

                    <label class ="text2">Gender</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    
                    <select  class = "text1" name ="gender" placeholder ="Gender" value="<?php echo $resident['R_gender']; ?>"  required>
                    <option ><?php echo $resident['R_gender'];?></option>  
                    <option value="Male">Male</option>
                       <option value="Female">Female</option>
                    
                      </select>
                        </div>
                      
                        <div class="col">
                    <label class ="text2">Bloodtype</label> 

                    <select  class = "text1" name ="Blood" placeholder ="Blood Type" required>
                       <option ><?php echo $resident['R_bloodtype'];?></option>
                       <option>A+</option>
                       <option >B+</option>
                       <option >O+</option>
                       <option >AB+</option>
                       <option >A-</option>
                       <option >B-</option>
                       <option >O-</option>
                       <option >AB-</option>
                       <option >NONE</option>
                    
                      </select>
                        </div>

                        <div class="col">
                    <label class ="text2">Bithdate</label> 
                    <input type ="Date" class = "text1" name ="Bdate"  placeholder ="Bithdate"value="<?php echo $resident['R_birthdate']; ?>" required>
                        </div>
                   
            </div>

            <div class="row align-items-start">
                    <div class="col">

                    <label class ="text2">Birth Place</label> 
                    <input type ="text" class = "text1" name ="Bplace" placeholder ="Birth Place" value="<?php echo $resident['R_Birthplace']; ?>" required>

                        </div>
                      
                        <div class="col">
                    <label class ="text2">Status</label> 

                    <select  class = "text1" name ="Stat" placeholder ="Gender"  required>
                    <option ><?php echo $resident['R_status'];?></option> 
                    <option value="Single">Single</option>
                       <option value="Merried">Merried</option>
                       <option value="Widow">Widow</option>
                    
                      </select>
                        </div>

                        <div class="col">
                    <label class ="text2">Religion</label> 
                    <input type ="text" class = "text1" name ="religion"  placeholder ="Religion"value="<?php echo $resident['R_religion']; ?>" required>
                        </div>
                   
            </div>

            <div class="row align-items-start">
                    <div class="col">

                    <label class ="text2">Nationality</label> 
                    <input type ="text" class = "text1" name ="Nationality" placeholder ="Nationality" value="<?php echo $resident['R_nationality']; ?>" required>

                        </div>
                        <div class="col">

                <label class ="text2">PWD</label> 
                <select  class = "text1" name ="pwd"  required>
                <option ><?php echo $resident['Pwd'];?></option> 
                 <option value="Yes">Yes</option>
                <option value="No">No</option>


  </select>
    </div>   
    <div class="col">
                    <label class ="text2">Purok ID</label>            
                    <input type ="text" class = "text1" name= "P_id" placeholder ="Purok ID" value="<?php echo $resident['P_id']; ?>" required>
      </div>

                        
            </div>
            <div class="row align-items-start">
            <div class="col">
                    <label class ="text2" >Household ID</label> 
                    <input type ="text" class = "text1" name ="H_id" placeholder ="Household ID" value="<?php echo $resident['householdNO']; ?>" required>
                        </div>
                   
            <div class="col">

<label class ="text2">Remark</label> 
<select  class = "text1" name ="remark"  >
<option ><?php echo $resident['Remark']; ?></option>  
 <option >Select</option>
 <option value="Dead">Dead</option>
<option value="Migrate">Migrate</option>


</select>
</div>   

                    <div class="col">
                    <label class ="text2" >Date</label> 
                    <input type ="Date" class = "text1" name ="date" value="<?php echo $resident['Date']; ?>" >
                        </div>

</div>  
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="Submit" class="btn btn-primary"> update</button>
                </div>
               </form>
            </div>
         </div>
        </div>