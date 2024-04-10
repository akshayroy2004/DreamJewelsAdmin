<?php
session_start();
include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/viho/theme/login_one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:47:20 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>Login</title>
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
    .show-hide span.show:before {
      /* content: none !important; */
      color: transparent;
    }
  </style>
  <style>
    .test {
      margin-top: 50px;
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
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0 test">
          <?php
          if (isset($_POST["submitbtn"])) {
            $email = $_POST["email"];
            $passwd = $_POST["passwd"];
            // echo $email;
            // echo $passwd;



            $result = mysqli_query($conn, "select * from admin where email='$email' and password='$passwd'") or die(mysqli_error($conn));
            // print_r($result);
            if (mysqli_num_rows($result) <= 0) {
          ?>
              <div class="alert alert-danger dark" role="alert">
                <p>Please Valid Email Id & Password</p>
              </div>
          <?php
            } else {
              $_SESSION["islogin"] = "yes";
              echo $_SESSION["islogin"];
              if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION["adminid"] = $row["login_id"];
                $_SESSION["adminname"] = $row["username"];
              }
              echo "test123";
              echo "<script>window.location='dashboard.php'</script>";
            }
          }

          ?>
          <div class="login-card">

            <form id="form1" method="post" class="theme-form login-form">
              <h4>Login</h4>
              <h6>Welcome back! Log in to your account.</h6>
              <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input class="form-control" id="email" name="email" type="email" required="" placeholder="Test@gmail.com">
                </div>
              </div>
              <div class="form-group">
                <label for="passwd">Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" id="passwd" name="passwd" type="password" required="" placeholder="*********">
                  <!-- <div class="show-hide"><span class="show"> </span></div> -->
                  <div class="show-hide">
                      <span class="show">Show</span>
                    </div>
                  </div>
                  <div id="passwd-error-wrapper-retype">
                    <label id="passwd-error-retype" class="error" for="retype" style="display: none;">Please re-enter your new password</label>
                  </div>
              </div>
                  <div class="form-group">
                <div class="checkbox">
                  <input id="checkbox1" type="checkbox">
                  <!-- <label class="text-muted" for="checkbox1">Remember password</label> -->
                </div><a class="link" href="forget.php">Forgot password?</a>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" id="submitbtn" name="submitbtn" type="submit">Sign in</button>
              </div>
                </div>
              </div>
              

              <!-- <p>Don't have account?<a class="ms-2" href="signup.php">Create Account</a></p> -->
            </form>
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
    $(this).text(type === 'password' ? 'Show' : 'Hide');
  });

  $("#form1").validate({
    rules: {
      email: {
        required: true
      },
      passwd: {
        required: true,
        minlength: 6
      }
    },
    messages: {
      email: {
        required: "Please enter email"
      },
      passwd: {
        required: "Please enter your password",
        minlength: "Password must be at least 6 characters long"
      }
    },
    errorPlacement: function(error, element) {
      if (element.attr("name") === "email") {
        error.insertAfter(element.closest('.input-group'));
      } else if (element.attr("name") === "passwd") {
        error.insertAfter(element.closest('.input-group'));
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

<!-- Mirrored from admin.pixelstrap.com/viho/theme/login_one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:47:20 GMT -->

</html>