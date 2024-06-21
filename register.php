<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb.css" rel="stylesheet">


</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">

                    <img src="Pic/nagaakunggarbo.png" class="reg1">

                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" action="includes/signupadmin.inc.php" method="post">
                           <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"]== "Passmismatch"){
                                echo "<script> alert('Password Dont Match');</script>";
                                }
                                if($_GET["error"]== "Usernameistaken"){
                                    echo "<script> alert('User Name is Taken');</script>";
                                    }
                                    // if($_GET["error"]== "number"){
                                    //     echo "<script> alert('Password must be 8-16 characters long, containing one Uppercase And one lowercase Character');</script>";
                                    //     }
                                        if($_GET["error"]== "notlowercaase"){
                                            echo "<script> alert('Password must be 8-16 characters long, containing one Uppercase And one lowercase Character');</script>";
                                            }
                                            if($_GET["error"]== "not8"){
                                                echo "<script> alert('Password must be 8-16 characters long, containing one Uppercase And one lowercase Character');</script>";
                                                }
                            }
                                ?>

                                <!-- <div class="form-group row"> -->

                                <div class="form-group">
                                <select name="type" class="form-control radius" id="type">
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>
                                <option value="BHW">BHW</option>
                                <option value="Nurse">Nurse</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                     name="FN"  placeholder="Full Name"required>
                                </div>
                                    <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div> -->
                                <!-- </div> -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                      name="UN"  placeholder="User Name" required>
                                </div>
                              
                                    <!-- <label>Password must be 8 character and have upper and lower case character </label>
                                -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name ="pass" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="Rpass" placeholder="Repeat Password" required>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                      name="Code"  placeholder="Authentication Code" required>
                                </div> -->

                              


                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                    Request Creation Account
                                    </button>
                                <hr>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="index.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- authentication -->
   
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>