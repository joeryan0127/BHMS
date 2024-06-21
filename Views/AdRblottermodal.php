<div class="modal fade" id="edit2_<?php echo $Blotter['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blotter Info</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">

                    <form  action="Barangay/updateres.php" method="post" enctype="multipart/form-data">

                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" value="<?php echo $resident['resident_ID']; ?>" readonly>

                         
                    <div class="row align-items-start">
                  

                        <div class="col">
                    <label class ="" >Complainant:</label> 
                    <h6 class = "text2"  ><?php echo $Blotter['complainant']; ?></h6>
                        </div>

                        <div class="col">
                    <label class ="" >Address:</label> 
                    <h6 class = "text2"  ><?php echo $Blotter['adress']; ?></h6>
                        </div>
                        </div>

                        
                        <div class="row align-items-start">
                        <div class="col">
                    <label class ="">Respondent</label> 
                    <h6 class = "text2"> <?php echo $first.' '.$Last ?></h6>
                        </div>

                        <div class="col">
                    <label class ="" >Address:</label> 
                    <h6 class = "text2"  ><?php echo $Purok; ?></h6>
                        </div>

                   
                        </div>

                        <div class="row align-items-start">

                        <div class="col">

<label class ="">Complain date</label> 
<h6 class = "text2"><?php echo $Blotter['date']; ?></h6>

    </div>

                        <div class="col">
                    <label class ="">Complain time</label> 
                    <h6 class = "text2"><?php echo $Blotter['time']; ?></h6>
                        </div>

                        

                        </div>

                    
              
                      
                        <div class="col">

                    <label class ="">Details</label> 
<!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    <h6 class = "text2" > <?php echo $Blotter['details']; ?></h6>

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