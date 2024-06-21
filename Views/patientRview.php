<div class="modal fade" id="edit3_<?php echo $Patient['Patient_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Patient Info</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">

                    <form  action="Barangay/updateres.php" method="post" enctype="multipart/form-data">

                    <!-- <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $resident['resident_ID']; ?>" readonly>

                          -->
                    <div class="row align-items-start">
                    <div class="col">
                    <label >Patient_id:</label>            
                    <h6 class ="text2"><?php echo $Patient['Patient_id']; ?></h6>

                        </div>

                        <div class="col">
                    <label class ="" >Bhw ID:</label> 
                    <h6 class = "text2"  ><?php echo $Patient['A_id']; ?></h6>
                        </div>

                        <div class="col">
                    <label class ="">Purok ID</label> 
                    <h6 class = "text2"> <?php echo $Patient['P_id']; ?></h6>
                        </div>

                        </div>

                        <div class="row align-items-start">
                    <div class="col">

                    <label class ="">First name</label> 
                    <h6 class = "text2"><?php echo $Patient['fname']; ?></h6>

                        </div>
                      
                        <div class="col">
                    <label class ="">Middle name</label> 
                    <h6 class = "text2"><?php echo $Patient['Mname']; ?></h6>
                        </div>

                        <div class="col">
                    <label class ="">Last name</label> 
                    <h6 class = "text2" > <?php echo $Patient['Lname']; ?></h6>
                        </div>

                    </div>

                    <div class="row align-items-start">
                    <div class="col">

                    <label class ="">Gender</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    <h6 class = "text2" > <?php echo $Patient['gender']; ?></h6>
                   
                        </div>
                      
                        <div class="col">
                    <label class ="">Age</label> 
                    <h6 class = "text2" > <?php echo $Patient['Age']; ?></h6>
               
                        </div>
                        <div class="col">
                    <label class ="">Height</label> 
                    <h6 class = "text2" > <?php echo $Patient['height']; ?></h6>
                    </div>

                        <div class="col">
                    <label class ="">Weight</label> 
                    <h6 class = "text2" > <?php echo $Patient['weight']; ?></h6>
                    </div>
                   
            </div>

            <div class="row align-items-start">
                    <div class="col">

                    <label class ="">BP</label> 
                    <h6 class = "text2" > <?php echo $Patient['BP']; ?></h6>
               
                        </div>
                      
                        <div class="col">
                    <label class ="">Temperature</label> 
                    <h6 class = "text2" > <?php echo $Patient['Temperature']; ?></h6>
         
                        </div>

                        <div class="col">
                    <label class ="">Pulserate</label> 
                    <h6 class = "text2" > <?php echo $Patient['pulserate']; ?></h6>
                    </div>
                   
            </div>

            <div class="row align-items-start">
                    <div class="col">

                    <label class ="">Date</label> 
                    <h6 class = "text2" > <?php echo $Patient['Date']; ?></h6>
             
                        </div>
                        <div class="col">

<label class ="">Consultation</label> 
<h6 class = "text2" > <?php echo $Patient['Consultation']; ?></h6>

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