<?php
include_once("Db_connect/connection.php");

?>


<?php
include_once 'bhwhead.php';


// $statement = $conn->prepare("SELECT * from officials");
// $statement =
?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  <div class="div">
                    <form action="admin/bhimportres.php" method="post" enctype="multipart/form-data">


                    <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"]== "Nofile"){
                                echo "<script> alert('No File Upaloaded');</script>";
                                }
                                
                                if($_GET["error"]== "Noerror"){
                                    echo "<script> alert('Successfuly Uploaded');</script>";
                                    }
                            
                            }
                                ?>
                            <input type="file" class= ""name ="resident">
                     <button type="submit"class="btn btn-success " name="resbot">Upload</button>
                     </form>
</div>
                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
               
    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>



</body>

</html>