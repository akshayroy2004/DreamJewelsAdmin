<!-- <?php include 'checksession.php'; ?> -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/viho/theme/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:47:48 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>Sign up</title>
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
    .login-form .btn {
      margin: 20px;
    }

    .show-hide span.show:before {
      /* content: none !important; */
      color: transparent;
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
  <section>
    <div class="container-fluid p-0">
      <div class="row m-0">

        <div class="col-12 p-0">
          <?php
          if (isset($_POST["submitbtn"])) {
            $name = $_POST["name"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $passwd = $_POST["pass"];
            $type = $_POST["type"];

            $sql = mysqli_query($conn, "select * from admin where email='$email'");
            if ($row = mysqli_num_rows($sql) == 0) {
              $result = mysqli_query($conn, "insert into admin (name,username,email,password,type) values ('$name','$username','$email','$passwd','$type')") or die(mysqli_error($conn));
              if ($result == true) {
          ?>

                <div class="alert alert-primary dark" role="alert">
                  <p>Data Inserted Successfully!</p>
                  echo "<script>
                    window.location = 'signin.php'
                  </script>";
                </div>

              <?php
              } else {
              ?>
                <div class="alert alert-danger dark" role="alert">
                  <p>This is a danger alert—check it out!</p>
                </div>
              <?php
              }
            } else {
              ?>
              <div class="alert alert-primary dark" role="alert">
                <p>Data AllReady!</p>
              </div>
          <?php
            }
          }

          ?>

          <div class="login-card">

            <form id="form1" method="post" class="theme-form login-form">
              <h4>Create your account</h4>
              <h6>Enter your personal details to create account</h6>
              <div class="form-group">
                <label>Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" type="text" name="name" id="name" required="" placeholder="Fist Name">
                 
                </div>
                <div id="passwd-error-wrapper-retype">
                  <label id="passwd-error-retype" class="error" for="retype" style="display: none;">Please enter your name</label>
                </div>
              </div>
              <div class="form-group">
                <label>User Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" type="text" name="username" id="username" required="" placeholder="Fist Name">
                 
                </div>
                <div id="passwd-error-wrapper-retype">
                  <label id="passwd-error-retype" class="error" for="retype" style="display: none;">Please enter your Email</label>
                </div>
              </div>
              <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" type="email" name="email" id="email" required="" placeholder="Enter Email">
                 
                </div>
                <div id="passwd-error-wrapper-retype">
                  <label id="passwd-error-retype" class="error" for="retype" style="display: none;">Please enter your Email</label>
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" type="password" name="pass" id="pass" required="" placeholder="*********">
                  <div class="show-hide">
                    <span class="show">Show</span>
                  </div>
                </div>
                <div id="passwd-error-wrapper-retype">
                  <label id="passwd-error-retype" class="error" for="retype" style="display: none;">Please enter your password</label>
                </div>
              </div>
              <div class="mb-3 draggable">
                <label for="type">Type</label>

                <select class="form-select" name="type" id="type" required="">
                  <option value="">Please Select Type</option>
                  <option value="super">Super</option>
                  <option value="sub">Sub</option>

                </select>
              </div>
              <div class="form-group d-flex">
                <button class="btn btn-primary btn-block" id="submitbtn" name="submitbtn" type="submit">Sign Up</button>
                <a class="btn btn-primary" href="dashboard.php">Back</a>
              </div>

              <p>Already have an account?<a class="ms-2" href="signin.php">Login</a></p>
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
      $("#form1").validate({
        rules: {
          name: {
            required: true
          },
          username: {
            required: true
          },
          email: {
            required: true

          },
          pass: {
            required: true
          },
          type: {
            required: true
          },
        },
        messages: {
          name: {
            required: "Please Select Name"
          },
          username: {
            required: "Please Select Username"
          },
          email: {
            required: "Please Select Email"

          },
          pass: {
            required: "Please Select Password"
          },
          type: {
            required: "Please Select Type id"
          }
        },
        errorPlacement: function(error, element) {
          if (element.attr("name") === "name") {
            error.insertAfter(element.closest('.input-group'));
          } else if (element.attr("name") === "username") {
            error.insertAfter(element.closest('.input-group'));
          } else if (element.attr("name") === "email") {
            error.insertAfter(element.closest('.input-group'));
          } else if (element.attr("name") === "pass") {
            error.insertAfter(element.closest('.input-group'));
          } else if (element.attr("name") === "type") {
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

<!-- Mirrored from admin.pixelstrap.com/viho/theme/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:47:48 GMT -->

</html>