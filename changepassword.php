<?php include 'checksession.php' ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/viho/theme/forget-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:47:49 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>Change Password Page</title>
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
  <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <style>
    .show-hide span.show:before {
      /* content: none !important; */
      color: transparent;
    }
  </style>
</head>

<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <section>
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">
          <div class="login-card">
            <div class="login-main">
              <?php
              if (isset($_POST["submitbtn"])) {
                $old = $_POST["old"];

                $new = $_POST["new"];

                $retype = $_POST["retype"];


                $id = $_SESSION["adminid"];

                $result = mysqli_query($conn, "select * from admin where login_id='$id' and password='$old'");
                if ($row = mysqli_num_rows($result)) {

                  $result = mysqli_query($conn, "update admin set password='$new' where login_id='$id'");

                  if ($result == 1) {
                    echo "<script>window.location='signin.php'</script>";
                  } else {
              ?>
                    <div class="alert alert-danger dark" role="alert">
                      <p>Please Valid old Password</p>
                    </div>
                <?php
                  }
                } else
                ?>
                <?php {
                ?>

                  <div class="alert alert-danger dark" role="alert">
                    <p>Please Valid Old Password and New Password</p>
                  </div>
              <?php

              }
            }
              ?>
              <form id="form1" method="post" class="theme-form login-form">
                <h4 class="mb-3">Reset Your Password</h4>
                <h6>Create Your Password</h6>
                <div class="form-group">
                  <label>Old Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="old" id="old" required="" placeholder="*********">
                    <div class="show-hide">
                      <span class="show">Show</span>
                    </div>
                  </div>
                  <div id="passwd-error-wrapper-old">
                    <label id="passwd-error-old" class="error" for="old" style="display: none;">Please enter your old password</label>
                  </div>
                </div>
                <div class="form-group">
                  <label>New Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="new" id="new" required="" placeholder="*********">
                    <div class="show-hide">
                      <span class="show">Show</span>
                    </div>
                  </div>
                  <div id="passwd-error-wrapper-new">
                    <label id="passwd-error-new" class="error" for="new" style="display: none;">Please enter a new password</label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Retype Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="retype" id="retype" required="" placeholder="*********">
                  </div>
                  <div id="passwd-error-wrapper-retype">
                    <label id="passwd-error-retype" class="error" for="retype" style="display: none;">Please re-enter your new password</label>
                  </div>
                </div>
                <div class="form-group d-flex">
                  <button class="btn btn-primary btn-block" name="submitbtn" id="submitbtn" type="submit">Done</button>
                  <a class="btn btn-primary" href="dashboard.php">Back</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- page-wrapper end-->
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
  <script src="assets/js/sweet-alert/sweetalert.min.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/additional-methods.js"></script>
  <script>
    $(document).ready(function() {
      $(".show-hide .show").on('click', function() {
        var $pwd = $(this).closest('.input-group').find('input');
        var type = $pwd.attr('type') === 'password' ? 'text' : 'password';
        $pwd.attr('type', type);
        $(this).text(type === 'password' ? 'Show' : 'Hide'); // Toggle button text between "Show" and "Hide"
      });
      // Form validation
      $('#form1').validate({
        rules: {
          old: {
            required: true,
            minlength: 6
          },
          new: {
            required: true,
            minlength: 6
          },
          retype: {
            required: true,
            equalTo: "#new"
          }
        },
        messages: {
          old: {
            required: "Please enter your old password",
            minlength: "Password must be at least 6 characters long"
          },
          new: {
            required: "Please enter a new password",
            minlength: "Password must be at least 6 characters long"
          },
          retype: {
            required: "Please re-enter your new password",
            equalTo: "Passwords do not match"
          }
        },
        errorPlacement: function(error, element) {
          if (element.attr("name") == "old") {
            error.appendTo($("#passwd-error-wrapper-old"));
          } else if (element.attr("name") == "new") {
            error.appendTo($("#passwd-error-wrapper-new"));
          } else if (element.attr("name") == "retype") {
            error.appendTo($("#passwd-error-wrapper-retype"));
          } else {
            error.insertAfter(element); // Fallback if element not found
          }
        }
      });
    });
  </script>

  <!-- login js-->
  <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/forget-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:47:49 GMT -->

</html>