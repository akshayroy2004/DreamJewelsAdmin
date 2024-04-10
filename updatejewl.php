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
  <title>Update Jewellary</title>
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
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <h3>Update Jewellary</h3>
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                  <li class="breadcrumb-item">Form Builder</li>
                  <li class="breadcrumb-item active">Form Builder 2</li>
                </ol> -->
                <div class="justify-right">
                  <a href="viewjewl.php"><button class="btn btn-primary" >Back</button></a>
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
                    <h5>Update Jewellary</h5>
                  </div>
                  <div class="card-body form-builder">
                    <div class="form-builder-column">
                      <div class="row">
                        <?php
                        if(isset($_POST["updatebtn"])){
                          $subcatid = $_POST["txtsubcatid"];
                          $title = $_POST["txttitle"];
                          $desc = $_POST["txtdesc"];
                          $price = $_POST["price"];
                          $type=$_POST["type"];
                          $usertyp = $_POST["usertype"];
                          $space = $_POST["specification"];
                          $caratid = $_POST["carat"];
                          $shapeid = $_POST["shape"];
                          $isactive = $_POST["radio1"];
                          $oldimg = $_POST["oldimg"];
                          $newimg="";
                          if(empty($_FILES["img"]["name"]))
                          {
                            $newimg = $oldimg;
                            echo $newimg;
                          }
                          else{
                            // $img1 = "abc.jpg";
                          unlink("uploads/jewl/".$oldimg);
                          $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                          $filename = time() . random_int(1111, 9999) . "." . $ext;
                          move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/jewl/" .$filename);
                          $newimg = $filename;
                          }

                          $oldimg1 = $_POST["oldimg1"];
                          $newimg1="";
                          if(empty($_FILES["img2"]["name"]))
                          {
                            $newimg1 = $oldimg1;
                            echo $newimg1;
                          }
                          else{
                            // $img2 = "abc.jpg";
                            unlink("uploads/jewl/".$oldimg1);
                            $ext = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION);
                            $filename1 = time() . random_int(1111, 9999) . "." . $ext;
                            move_uploaded_file($_FILES["img2"]["tmp_name"], "uploads/jewl/" .$filename1);
                            $newimg1 = $filename1;
                          }

                          $oldimg2 = $_POST["oldimg2"];
                          $newimg2="";
                          if(empty($_FILES["img3"]["name"]))
                          {
                            $newimg2 = $oldimg2;
                            echo $newimg2;
                          }
                          else{
                            // $img3 = "abc.jpg";
                            unlink("uploads/jewl/".$oldimg2);
                            $ext = pathinfo($_FILES["img3"]["name"], PATHINFO_EXTENSION);
                            $filename2 = time() . random_int(1111, 9999) . "." . $ext;
                            move_uploaded_file($_FILES["img3"]["tmp_name"], "uploads/jewl/" .$filename2);
                            $newimg2 = $filename2;
                          }
                        
                          
                          // $vidurl = $_POST["videourl"];
                          $oldvideo = $_POST["oldvideo"];
                          $newvideo="";
                          if(empty($_FILES["videourl"]["name"]))
                          {
                            $newvideo = $oldvideo;
                            echo $newvideo;
                          }
                          else{
                            // $img3 = "abc.jpg";
                            unlink("video/".$oldimg2);
                            $ext = pathinfo($_FILES["videourl"]["name"], PATHINFO_EXTENSION);
                            $filename3 = time() . random_int(1111, 9999) . "." . $ext;
                            move_uploaded_file($_FILES["videourl"]["tmp_name"], "video/" .$filename3);
                            $newvideo = $filename3;
                          }

                          $uid=$_GET["updateid"];

                        

                          $result = mysqli_query($conn,"update jewellery set subcat_id='$subcatid',title='$title',description='$desc',price='$price',type_id='$type',usertype='$usertyp',specification='$space',carat_id='$caratid',shape_id='$shapeid',isactive='$isactive',img1='$newimg',img2='$newimg1',img3='$newimg2',video_url='$filename3' where jewellery_id='$uid'") or die(mysqli_error($conn));
                          if($result == true) {
                            echo "yes";
                            echo "<script>window.location='viewjewl.php'</script>";
                        ?>

                            <div class="alert alert-primary dark" role="alert">
                              <p>Data Updated Successfully!</p>
                            </div>
                            
                        <?php
                          } else {
                            echo "error";
                          }
                        }
                    
                        ?>
                        <div class="col-lg-12 col-xl-12">
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">

                              <?php
                              if($_GET["updateid"]){
                                $uid=$_GET["updateid"];
                                $result = mysqli_query($conn, "select * from jewellery where jewellery_id='$uid'") or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                   <form id="form1" method="post" enctype="multipart/form-data">
                              <div class="mb-3 draggable">
                                  <label for="txtsubcatid">SubCategory Name</label>
                                  <select class="form-control btn-square" name="txtsubcatid" id="txtsubcatid" placeholder="Please Enter subcategory name">
                                    <option value="">Please Select SubCategory name</option>
                                    <?php
                                    $count = 1;
                                    $result = mysqli_query($conn, "select * from subcategory") or die(mysqli_error($conn));
                                    while ($row4 = mysqli_fetch_assoc($result)) {
                                    ?>
                                      <option <?php if($row4["subcat_id"]==$row["subcat_id"]){ ?> selected <?php } ?> value="<?php echo $row4["subcat_id"]; ?>"><?php echo $row4["subcat_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                  </select>
                              
                                </div>
                                <div class="mb-3 draggable">
                                  <label for="type">Type Name</label>
                                   <select class="form-control btn-square" name="type" id="type" placeholder="Please Enter TypeName">
                                    <option value="">Please Select Type name</option>
                                    <?php
                                    $count = 1;
                                    $result = mysqli_query($conn, "select * from type") or die(mysqli_error($conn));
                                    while ($row3 = mysqli_fetch_assoc($result)) {
                                    ?>
                                      <option <?php if($row3["type_id"]==$row["type_id"]){ ?> selected <?php } ?> value="<?php echo $row3["type_id"]; ?>"><?php echo $row3["type_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                  </select>
                                  
                                </div>
                                <div class="mb-3 draggable">
                                  <label for="carat">Carat Name</label>
                                <select class="form-control btn-square" name="carat" id="carat" placeholder="Please Enter Carat Name">
                                    <option value="">Please Select Carat name</option>
                                    <?php
                                    $count = 1;
                                    $result = mysqli_query($conn, "select * from carat") or die(mysqli_error($conn));
                                    while ($row2 = mysqli_fetch_assoc($result)) {
                                    ?>
                                      <option <?php if($row2["carat_id"]==$row["carat_id"]){ ?> selected <?php } ?>  value="<?php echo $row2["carat_id"]; ?>"><?php echo $row2["carat_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                  </select>
                                
                                </div>
                                <div class="mb-3 draggable">
                                  <label for="shape">Shape Name</label>
                                 <select class="form-control btn-square" name="shape" id="shape" placeholder="Please Enter Shape Name">
                                    <option value="">Please Select Shape name</option>
                                    <?php
                                    $count = 1;
                                    $result = mysqli_query($conn, "select * from shape") or die(mysqli_error($conn));
                                    while ($row1 = mysqli_fetch_assoc($result)) {
                                    ?>
                                      <option <?php if($row1["shape_id"]==$row["shape_id"]){ ?> selected <?php } ?> value="<?php echo $row1["shape_id"]; ?>"><?php echo $row1["shape_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                  </select>
                                </div>
                                <div>
                                <div class="mb-3 draggable">
                                  <label for="txttitle">Title</label>
                                  <input class="form-control btn-square" value="<?php echo $row["title"] ?>" name="txttitle" id="txttitle" type="text" placeholder="Please Enter Title">

                                </div>

                                <div class="mb-3 draggable">
                                  <label for="txtdesc">Description</label>
                                  <input class="form-control btn-square" value="<?php echo $row["description"]; ?>"  name="txtdesc" id="txtdesc" type="text" placeholder="Please Enter Description">
                                </div>
                                <div class="mb-3 draggable">
                                  <label for="price">price</label>
                                  <input class="form-control btn-square" value="<?php echo $row["price"]; ?>" name="price" id="price" type="number" placeholder="Please Enter Price">
                                </div>
                               
                               
                                <div class="mb-3 draggable">
                                  <label for="usertype">User Type</label>
                                  <select class="form-select" value="<?php echo $row["usertype"]; ?>"  name="usertype" id="usertype" required="" placeholder="Please Enter UserType Name">
                                  <option value="">Please Select Type</option>
                                    <option  value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="children">Children</option>
                                  </select>

                                </div>
                                <div class="mb-3 draggable">
                                  <label for="specification">Specification</label>
                                  <input class="form-control btn-square" value="<?php echo $row["specification"]; ?>" name="specification" id="specification" type="text" placeholder="Please Enter Specification">
                                </div>

                               
                                  <label for="radio1">Is Active</label>
                                </div>

                                <div class="radio radio-theme">
                                    <input id="radioinline1" value="<?php echo $row["isactive"]; ?>" checked type="radio" name="radio1" value="yes">
                                            <label for="radioinline1">yes</label>
                                            <input id="radioinline2" type="radio" name="radio1" value="yes">
                                            <label for="radioinline2">no</label>
                                
                                 </div>
                                 <input class="form-control btn-square" name="oldimg" id="oldimg" type="hidden" value="<?php echo $row["img1"]; ?>"placeholder="valid image">
                                <div class="mb-3 draggable">
                                  <label for="img">Jewellary Image1</label>
                                  <input class="form-control btn-square" name="img" id="img" type="file" placeholder="valid image">
                                  <img src="uploads/jewl/<?php echo $row["img1"]; ?>" height="100px" width="100px" alt="">
                                </div>
                                <input class="form-control btn-square" name="oldimg1" id="oldimg1" type="hidden" value="<?php echo $row["img2"]; ?>"placeholder="valid image">
                                <div class="mb-3 draggable">
                                  <label for="img2">Jewellary Image2</label>
                                  <input class="form-control btn-square" name="img2" id="img2" type="file" placeholder="valid image">
                                  <img src="uploads/jewl/<?php echo $row["img2"]; ?>" height="100px" width="100px" alt="">
                                </div>
                                <input class="form-control btn-square" name="oldimg2" id="oldimg2" type="hidden" value="<?php echo $row["img3"]; ?>"placeholder="valid image">
                                <div class="mb-3 draggable">
                                  <label for="img3">Jewellary Image3</label>
                                  <input class="form-control btn-square" name="img3" id="img3" type="file" placeholder="valid image">
                                  <img src="uploads/jewl/<?php echo $row["img3"]; ?>" height="100px" width="100px" alt="">
                                </div>
                                <input class="form-control btn-square" name="oldvideo" id="oldvideo" type="hidden" value="<?php echo $row["video_url"]; ?>">
                                <div class="mb-3 draggable">
                                  <label for="videourl">Video url</label>
                                  <input class="form-control btn-square" name="videourl" id="videourl" type="file">
                                  <!-- <img src="video/<?php echo $row["video_url"]; ?>" height="100px" width="100px" alt=""> -->
                                  <video src="video/<?php echo $row["video_url"]; ?>" controls height="100px" width="100px" alt="">></video>
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
              txtsubcatid:
              {
                required:true
              },
              txttitle:
              {
                required:true
              },
              txtdesc:{
                required:true
              },
              price:{
                required:true
              },
              type:{
                required:true
              },
              usertype:{
                required:true
              },
              specification:{
                required:true
              },
              carat:{
                required:true
              },
              shape:{
                required:true
              },
              radio1:{
                required:true
              },
              // img:{
              //   required:true,
               
              // },
              // img2:{
              //   required:true,
                
              // },
              // img3:{
              //   required:true,
                
              // },
              videourl:{
                required:true,
              }

            },
            messages:
            {
              txtsubcatid:
              {
                required: "Please select subcategory"
              },
              txttitle:
              {
                required: "Please Enter title"
              },
              txtdesc:{
                required:"Please Enter description"
              },
              price:{
                required:"Please Enter price"
              },
              type:{
                required:"Please select type"
              },
              usertype:{
                required:"Please select usertype"
              },
              specification:{
                required:"Please Enter specification"
              },
              carat:{
                required:"Please select caratname"
              },
              shape:{
                required:"Please select shapename"
              },
              radio1:{
                required:"Please select any one"
              },
              // img:{
              //   required:"please select image",
                
              // },
              // img2:{
              //   required:"please select image",
                
              // },
              // img3:{
              //   required:"please select image",
                
              // },
              videourl:{
                required:"Please Select Video Url",
              }
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