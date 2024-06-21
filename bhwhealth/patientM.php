<div class="modal fade" id="edit2_<?php echo $Patient['Patient_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Patient</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
            <form  action="bhwhealth/patientup.php" method="post" enctype="multipart/form-data">

 <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Patient['Patient_id']; ?>" readonly>

                         
<div class="row align-items-start">
<div class="col">
    
<label class ="text2">Purok ID</label>            
<input type ="text" class = "text1" name= "P_id" placeholder ="Purok ID" value="<?php echo $Patient['P_id']; ?>" required>

</div>



    <div class="col">
<label class ="text2" >Firstname</label> 
<input type ="text" class = "text1" name ="fname" placeholder ="FIrst Name" value="<?php echo $Patient['fname']; ?>" required>


    </div>

    <div class="col">
<label class ="text2">Middle Name</label> 
<input class = "text1" name ="Mname" placeholder ="Middle Name" value="<?php echo $Patient['Mname']; ?>" required>
    </div>

    </div>

    <div class="row align-items-start">
<div class="col">

<label class ="text2">Last Name</label> 
<input type ="text" class = "text1" name ="Lname" placeholder ="Last Name" value="<?php echo $Patient['Lname']; ?>"  required>

    </div>
  
  
    <div class="col">

<label class ="text2">Gender</label> 
<!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->

<select  class = "text1" name ="gender" placeholder ="Gender"  required>
    <option> <?php echo $Patient['gender']; ?></option>
   <option value="Male">Male</option>
   <option value="Female">Female</option>

  </select>
    </div>
    <!-- <div class="col">
<label class ="text2">Age</label> 
<input type ="text" class = "text1" name ="age"  placeholder ="Age" required>
    </div> -->
    <div class="col">
<label class ="text2">Age</label> 
<input type ="text" class = "text1" name ="age"  placeholder ="Age" value="<?php echo $Patient['Age']; ?>" required>

    </div>

</div>

<div class="row align-items-start">

  
    <div class="col">
<label class ="text2">Height</label> 
<input type ="Text" class = "text1" name ="Height"  value="<?php echo $Patient['height']; ?>" required>
    </div>
   

    <div class="col">
<label class ="text2">Weight</label> 
<input type ="Text" class = "text1" name ="Weight"  placeholder ="weight" value="<?php echo $Patient['weight']; ?>" required>
    </div>

    <div class="col">

<label class ="text2">BP</label> 
<input type ="text" class = "text1" name ="Bp" placeholder ="BP" value="<?php echo $Patient['BP']; ?>" required>
    </div>

  



  
<div class="col">
<label class ="text2">Temperature</label>
<input type ="text" class = "text1" name ="temp" placeholder ="Temparature"value="<?php echo $Patient['Temperature']; ?>"  required>

    </div>

    <div class="col">
<label class ="text2">Pulserate</label> 
<input type ="text" class = "text1" name ="Pulse"  placeholder ="Pulse rate" value="<?php echo $Patient['pulserate']; ?>" required>
    </div>


</div>

<div class="col">
<label class ="text2">Consultation</label> 
<textarea type ="text" class = "text1" name ="Consult" placeholder ="Consultation"  required><?php echo $Patient['Consultation']; ?></textarea>

</div>
<div class="row align-items-start">


<!-- 

<div class="col">
<label class ="text2">Medicine</label> 
<input type ="text" class = "text1" name ="Medicine" placeholder ="Medicine" value="<?php echo $Patient['Med_id']; ?>"  readonly>

</div>

<div class="col">
<label class ="text2">Quantity</label> 
<input type ="text" class = "text1" name ="Quantity" placeholder ="Quantity" value="<?php echo $Patient['Quantity']; ?>" readonly> -->

<!-- </div> -->
<!-- <div class="col">
<label class ="text2">Remark</label> 
<input type ="text" class = "text1" name ="Remark" placeholder ="Remarks" value="<?php echo $Patient['Remarks']; ?>" required>

   
</div> -->




</div>

</div>

</div>
   

<div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="SubmitP" class="btn btn-primary">Update</button>
                </div>
               </form>
            </div>
         </div>
        </div>