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
  <title>Update Category</title>
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
    .justify-right {
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
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <h3>Update Category</h3>
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                  <li class="breadcrumb-item">Form Builder</li>
                  <li class="breadcrumb-item active">Form Builder 2</li>
                </ol> -->
                <div class="justify-right">
                  <a href="viewcat.php"><button class="btn btn-primary">Back</button></a>
                </div>
              </div>
              <div class="col-sm-6">
                <!-- Bookmark Start-->

                <!-- Bookmark Ends-->
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="form-builder">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Update Category</h5>
                  </div>
                  <div class="card-body form-builder">
                    <div class="form-builder-column">
                      <div class="row">





                        <?php
                        if (isset($_POST["updatebtn"])) {
                          // echo "yes";
                          $catname = $_POST["txtname"];
                          // $img = "abc.jpg";
                          $uid = $_GET["updateid"];

                          $oldimg = $_POST["oldimg"];
                          $newimg="";
                          // image insert

                          if(empty($_FILES["img"]["name"]))
                          {
                            $newimg = $oldimg;
                            echo $newimg;
                          }
                          else
                          {
                            unlink("uploads/category/".$oldimg);
                            $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                            $filename = time() . random_int(1111, 9999) . "." . $ext;
                            move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/category/" . $filename);
                            echo $filename;
                            $newimg = $filename;
                            echo $newimg;
                          }

                          
                          $sql = mysqli_query($conn,"select * from category where cat_name='$catname'");
                          if($row = mysqli_num_rows($sql)==0)
                          {
                            
                          $result = mysqli_query($conn, "update category set cat_name='$catname',cat_img='$newimg' where cat_id='$uid'") or die(mysqli_error($conn));
                          if ($result == true) {
                            echo "yes";
                            echo "<script>window.location='viewcat.php'</script>";
                        ?>

                            <div class="alert alert-primary dark" role="alert">
                              <p>Data update Successfully!</p>

                            </div>
                            

                        <?php
                          }
                           else {
                            echo "error";
                          }
                          }
                          else{
                            ?>
                             <div class="alert alert-primary dark" role="alert">
                                <p>Data AllReady!</p>
                              </div>
                          <?php
                          }
                         
                        }
                        ?>
                        <div class="col-lg-12 col-xl-12">
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
                              <?php


                              if ($_GET["updateid"]) {
                                $uid = $_GET["updateid"];
                                // echo $uid;

                                $result = mysqli_query($conn, "select * from category where cat_id='$uid'") or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                  <form id="form1" method="post" enctype="multipart/form-data">
                                    <div class="mb-3 draggable">
                                      <label for="txtname">Category Name</label>
                                      <input class="form-control btn-square" value="<?php echo $row["cat_name"];?>" name="txtname" id="txtname" type="text" placeholder="Enter Category Name">

                                    </div>
                                    <input class="form-control btn-square" name="oldimg" id="oldimg" type="hidden" value="<?php echo $row["cat_img"]; ?>"  placeholder="valid image">
                                    <div class="mb-3 draggable">
                                      <label for="img">Category Image</label>
                                      <input class="form-control btn-square" name="img" id="img" type="file" placeholder="valid image">
                                      <img src="uploads/category/<?php echo $row["cat_img"]; ?>" height="100px" width="100px" alt="">

                                    </div>
                                    <br>
                                    <div>
                                      <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                                    </div>

                                  </form>
                              <?php
                                }
                              }
                              ?>

                            </div>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
              txtname:
              {
                required:true
              },
              // img:{
              //   required:true,
              //   accept:"image/jpg,image/jpeg,image/png,image/gif",
              // },
            },
            messages:
            {
              txtname:
              {
                required:"Please Enter Catagory Name"
              },
              // img:
              // {
              //   required:"Please select img",
              //   accept:"please select only image"
              // },
            }
          });
      });

  </script>
  <!-- login js-->
  <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/form-builder-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:03:20 GMT -->

</html>