<div class="modal fade" id="edit_<?php echo $official['Offcial_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Officials</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Barangay/SecOfficialup.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $official['Offcial_id']; ?>" readonly>


                    <label class ="text2">Position</label>            
                    <input type ="text" class = "text1" name= "Pos" id="pos"placeholder ="Position" value="<?php echo $official['Position']; ?>" required>

                    <label class ="text2" >Full Name</label> 
                    <input type ="text" class = "text1" name ="uname" id ="name" placeholder ="Full Name" value="<?php echo  $official['Full_Name']; ?>" required>

                    <label class ="text2">Contact No#</label> 
                    <input class = "text1" name ="contact1" id ="contact"placeholder ="Contact No#" value="<?php echo  $official['Contact_no']; ?>" required>

                    <label class ="text2">Address</label> 
                    <input class = "text1" name ="address" id ="address"placeholder ="Address" value="<?php echo  $official['Address']; ?>" required>

                 
                    <label class ="text2">Start Term</label> 
                    <input type ="Date" class = "text1" name="Start1" id="start" placeholder ="Start Term:" value="<?php echo  $official['Start_Term']; ?>" required>

                    <label class ="text2">End Term</label> 
                    <input type ="Date" class = "text1" name ="end1" id="end" placeholder ="Firstname" value="<?php echo  $official['End_Term']; ?>" required>
                    
                   
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name ="submit3"class="btn btn-primary"> Update</button>
                </div>
               </form>
            </div>
         </div>
        </div>

   

