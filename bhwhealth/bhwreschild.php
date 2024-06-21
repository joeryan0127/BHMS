<div class="modal fade" id="Children" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Baby</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="bhwhealth/addchild.php" method="post" enctype="multipart/form-data">


                    <label class ="text2">Resident ID</label>            
                    <input type ="text" class = "text1" name= "R_id" Value="<?php echo  $last_id ?>" readonly>




                         
            

                    
                    <label class ="text2">Mother</label>            
                    <!-- <input type ="text" class = "text1" name= "Parent" placeholder ="Parent" required> -->
                    <?php

        $statement =$conn->prepare("SELECT * from maternity INNER JOIN resident on maternity.resident_ID = resident.resident_ID ");
        $statement->execute();
        $house=$statement->fetchAll()?>

        <input type = "text" name="browres" list="browres" class="text1"  placeholder ="Select Household" required >
        <datalist id="browres">

<!-- <option >Select Household</option> -->
        <?php foreach ($house as $row): ?>
        <option value=<?= $row['Maternity_id'] ?> ><?= $row['R_firstname']?><?= $row['R_Lastname']?> </option>
        <?php endforeach ?>

        </datalist>  

                   
                    <label class ="text2">Weight</label>            
                    <input type ="text" class = "text1" name= "Weight" placeholder ="Weight" required>
                   
                    <label class ="text2">Height</label>            
                    <input type ="text" class = "text1" name= "Height" placeholder ="Height" required>
           
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