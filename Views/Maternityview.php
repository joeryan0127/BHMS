<div class="modal fade" id="edit3_<?php echo $Purok['Maternity_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mother Info</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">

                    <form  action="Barangay/updateres.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $Purok['Maternity_id']; ?>" readonly>

                         
                    <div class="row align-items-start">
                 
                   

                        <div class="col">
                    <label class ="">First Name</label> 
                    <h6 class = "text2"> <?php echo $Purok['R_firstname']; ?></h6>
                        </div>
                        <div class="col">

                <label class ="">Middle Name</label> 
                <h6 class = "text2"><?php echo $Purok['R_Middilename']; ?></h6>

                </div>
   
                     <div class="col">
                    <label class ="">Last Name</label> 
                    <h6 class = "text2"><?php echo $Purok['R_Lastname']; ?></h6>
                        </div>
        
                    </div>

                        <div class="row align-items-start">
                        <div class="col">
                    <label class ="">Temparature</label> 
                    <h6 class = "text2" > <?php echo $Purok['temp']; ?></h6>
                        </div>

                        <div class="col">
                    <label class ="">Age</label> 
                    <h6 class = "text2" > <?php echo $Purok['age']; ?></h6>
                        </div>

                        <div class="col">

                        <label class ="">Weight</label> 
                        <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                        <h6 class = "text2" > <?php echo $Purok['Wt']; ?></h6>

                        </div>

                  


                    </div>

                 
            <div class="row align-items-start">
                
            <div class="col">
                    <label class ="">Height</label> 
                    <h6 class = "text2" > <?php echo $Purok['Ht']; ?></h6>
                    </div>

            <div class="col">

<label class ="">Blood Pressure</label> 
<h6 class = "text2" > <?php echo $Purok['Bp']; ?></h6>

    </div>

    <div class="col">

<label class ="">Pulse Rate</label> 
<h6 class = "text2" > <?php echo $Purok['Pr']; ?></h6>

    </div>
</div>
    
    <div class="row align-items-start">
    <div class="col">

<label class ="">EDC</label> 
<h6 class = "text2" > <?php echo $Purok['Edc']; ?></h6>

    </div>


    
    <div class="col">

<label class ="">AOG</label> 
<h6 class = "text2" > <?php echo $Purok['Aog']; ?></h6>

    </div>

    

</div>
               

            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                   
                </div>
               </form>
            </div>
         </div>
        </div>