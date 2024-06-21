<div class="modal fade" id="Blotter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Blotter</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                
                <?php
           
                 ?>
                
             


            <div class="group32">
                    <form  action="bhwhealth/addBlotter.php" method="post" enctype="multipart/form-data">


                    <label class ="text2">Complainant </label>            
                    <input type ="text" class = "text1" name= "R_id" Value="<?php echo $first1.' '.$Last1?>" required >

                    <label class ="text2">Address </label>            
                    <input type ="text" class = "text1" name= "Add" Value="<?php echo $Purok?> " required >


                    <label class ="text2">Respondent</label>            
                    <!-- <input type ="text" class = "text1" name= "Respondent" placeholder ="Respondent" required> -->

                    <?php

                    $statement =$conn->prepare("SELECT * from resident where Remark=''");
                    $statement->execute();
                    $house=$statement->fetchAll()?>

                    <input type = "text" name="brw" list="brw" class="text1"  placeholder ="Select Resident" required >
                    <datalist id="brw">

<!-- <option >Select Household</option> -->
                    <?php foreach ($house as $row): ?>
                    <option value=<?= $row['resident_ID']?> ><?= $row['R_firstname']?> <?= $row['R_Lastname']?></option>
                    <?php endforeach ?>

                    </datalist> 



                    <label class ="text2">Schedule Date</label>            
                    <input type ="date" class = "text1" name= "date" placeholder ="date" required>

                    <label class ="text2">Schedule Time</label>            
                    <input type ="time" class = "text1" name= "Time" placeholder ="Time" required>

                    <label class ="text2">Details</label>            
                    <textarea type ="text" class = "text1" name= "Details" placeholder ="Details" required></textarea>


                         
            

                 
                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>