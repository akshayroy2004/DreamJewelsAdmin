<?php include 'checksession.php'; ?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/form-builder-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:03:12 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Profile Page</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <style>
      .justify-right{
        text-align: right;
      }
    </style>
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <!-- <div class="theme-loader">    
        <div class="loader-p"></div>
      </div> -->
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
    <?php include 'header.php'; ?>
    
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <?php include 'sidebar.php'; ?>
        <!-- Page Sidebar Ends-->
                <section>
    <div class="container-fluid p-0">
      <div class="row m-0">
      
        <div class="col-12 p-0">


    


        <?php

                        if(isset($_POST["submitbtn"])){
                          $name = $_POST["name"];
                          $username = $_POST["username"];
                          $email = $_POST["email"];
                          $id = $_SESSION["adminid"];
                           $result = mysqli_query($conn,"update admin set name='$name',username='$username',email='$email' where login_id='$id'") or die(mysqli_error($conn));
                          if($result == true) {
                        ?>


                            <div class="alert alert-primary dark" role="alert">
                              <p>Data Updated Successfully!</p>
                            </div>

                        <?php
                        echo "<script>window.location='dashboard.php'</script>";
                          } else {
                            ?>
                            <div class="alert alert-danger dark" role="alert">
                            <p>This is a danger alert—check it out!</p>
                          </div>
                          <?php
                          }
                        
                        }
                          ?>
          <div class="login-card">



          <?php 
           $id = $_SESSION["adminid"];

           $result = mysqli_query($conn,"select * from admin where login_id='$id'");
           while($row = mysqli_fetch_assoc($result))
           {
          ?>
         
            <form id="form1" method="post" class="theme-form login-form">
              <h4>Create your profile</h4>
              <h6>Enter your personal details to create profile</h6>
              <div class="form-group">
                <label for="name">Name</label>
                <div class="small-group">
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" value="<?php echo $row["name"] ?>" name="name" id="name" type="text" required="" placeholder="Fist Name">
                  </div>

                </div>
              </div>
              <div class="form-group">
                <label for="username">User Name</label>
                <div class="small-group">
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" value="<?php echo $row["username"] ?>" name="username" id="username" type="text" required="" placeholder="Fist Name">
                  </div>

                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <div class="small-group">
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" name="email" id="email" value="<?php echo $row["email"] ?>" type="text" required="" placeholder="Fist Name">
                  </div>

                </div>


              </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" id="submitbtn" name="submitbtn" type="submit">Update Profile</button>
                </div>
            </form>

            <?php 

}
?>
          </div>
        </div>
      </div>
    </div>
  </section>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php include 'footer.php' ?>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/jquery.ui.min.js"></script>
    <script src="assets/js/form-builder/form-builder-2/beautifyhtml.js"></script>
    <script src="assets/js/form-builder/form-builder-2/form-builder-2.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/additional-methods.js"></script>
  <script>

      $(document).ready(function(){
          $("#form1").validate({
            rules:
            {
              name:
              {
                required:true
              },
              username:
              {
                required:true
              },
              email:{
                required:true
               
              },
            },
            messages:
            {
              name:
              {
                required:"Please enter name"
              },
              username:
              {
                required:"Please enter username"
              },
              email:{
                required:"Please enter email"   
              },
            }
          });
      });

  </script>
    <!-- <script src="assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/form-builder-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:03:20 GMT -->
</html>