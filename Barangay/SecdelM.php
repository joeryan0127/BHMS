

<div class="modal fade" id="edit5_<?php echo $resident['resident_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              
                <div class="modal-body">

                <form  action="Barangay/Secdelres.php" method="post" enctype="multipart/form-data">

                <input type ="hidden" class = "text1" name= "id1" id="id1" value="<?php echo $resident['resident_ID']; ?>"  readonly>



             <center>   DO YOU WANT TO DELETE THIS DATA?</center>
           
            </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name ="del">Delete</button>
                </div>

                </form>
            </div>
        </div>
    </div>