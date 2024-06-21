<div class="modal fade" id="edit_<?php echo $certificate['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update request</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Barangay/Upcert.php" method="post" enctype="multipart/form-data">

                    
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo  $certificate['id']; ?>" readonly>

                         
                         
               
                    <label class ="text2">Purpose</label> 
                    <input class = "text1" name ="purpose" placeholder ="Purpose" value="<?php echo $certificate['Porpose']; ?>"  required>

                


                    <label class ="text2">Request date</label> 
                    <input type ="Date" class = "text1" name="Request" placeholder ="" value="<?php echo $certificate['Requesteddate']; ?>"  required>

                    <label class ="text2">Certificate</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    
                    <select  class = "text1" name ="Cert" placeholder ="Gender"  required>
                    <option ><?php echo  $certificate['Certificate'];?></option> 
                       <option value="Barangay Clearance">Barangay Clearance</option>
                       <option value="Barangay Residency">Barangay Residency</option>
                       <option value="Barangay Indigency">Barangay Indigency</option>
                       <option value="Cutting Tree Permit">Cutting Tree Permit</option>
                    
                      </select>
                   
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name ="Submit1" class="btn btn-primary"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>