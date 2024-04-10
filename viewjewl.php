<?php include 'checksession.php'; ?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:24:23 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>View Jewellery</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">
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
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
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
                  <h3>View Jewellery</h3>
                  <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Basic Init</li>
                  </ol> -->
                  <div class="justify-right">
                  <a href="addjewl.php"><button class="btn btn-primary" >Add</button></a>
                  
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <!-- <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div> -->
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Wrnning</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">  Are u sure you want to delete!</div>
                          <div class="modal-footer">
                          <form method="post">
                          <input type="hidden" name="deleteid" id="deleteid">
                          <input type="hidden" name="deleteimg1" id="deleteimg1">
                          <input type="hidden" name="deleteimg2" id="deleteimg2">
                          <input type="hidden" name="deleteimg3" id="deleteimg3">
                          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">No</button>
                          <button class="btn btn-secondary" id="deletebtn" name="deletebtn" type="submit">Yes</button>
                        </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- <div class="card-header">
                    <h5>Zero Configuration</h5><span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span>
                  </div> -->
                  <?php 
              
               if(isset($_POST["deletebtn"]))
               {
                $id = $_POST["deleteid"];
                echo $id;
                $img1 = $_POST["deleteimg1"];
                unlink("uploads/jewl/".$img1);
                $img2 = $_POST["deleteimg2"];
                unlink("uploads/jewl/".$img2);
                $img3 = $_POST["deleteimg3"];
                unlink("uploads/jewl/".$img3);

                $result = mysqli_query($conn,"delete from jewellery where jewellery_id='$id'");

                if($result)
                {
                  echo "<script>window.location='viewjewl.php'</script>";
                }
                else
                {
                  echo "error";
                }




               }
              
              ?>


<?php 

               if(isset($_POST["btnactive"]))
               {
                $isactive = $_POST["isactive"];
               $id = $_POST["dataid"];

              //  echo $isactive;
              //  echo $id;

               $result = mysqli_query($conn,"update jewellery set isactive='$isactive' where jewellery_id='$id'");
               }


?>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Subcat Name</th>
                            <th>Type Name</th>
                            <!-- <th>Carat Nmae</th>
                            <th>Shape Name</th> -->
                            <!-- <th>Title</th> -->
                            <!-- <th>Description</th>
                            <th>Price</th>
                            
                            <th>usertype</th>
                            <th>Spacification</th> -->
                           
                            <th>Is Active</th>
                            <!-- <th>img</th>
                            <th>img1</th>
                            <th>img2</th>-->
                            <!-- <th>video url</th> -->
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $count = 1;
                            $result = mysqli_query($conn,"select * from jewellery as j left join subcategory as sub on j.subcat_id=sub.subcat_id left join type as t on j.type_id=t.type_id left join carat as c on j.carat_id=c.carat_id left join shape as s on j.shape_id=s.shape_id") or die (mysqli_error($conn));
                            
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                <tr>
                                <td><?php echo $count++; ?></td>
                            <td><?php echo $row["subcat_name"]; ?></td>
                            <td><?php echo $row["type_name"]; ?></td>
                            <!-- <td><?php echo $row["carat_name"]; ?></td>
                            <td><?php echo $row["shape_name"]; ?></td> -->
                            <!-- <td><?php echo $row["title"]; ?></td> -->
                            <!-- <td><?php echo $row["description"]; ?></td>
                            <td><?php echo $row["price"]; ?></td>
                            
                            <td><?php echo $row["usertype"]; ?></td>
                            <td><?php echo $row["specification"]; ?></td>
                             -->
                            <!-- <td><?php echo $row["isactive"]; ?></td> -->


                              <td>

                              <?php 
                              
                                if($row["isactive"] == "yes")
                                {

                                  ?>

                                   <form method="post">
                                   <button type="submit" class="btn btn-primary" name="btnactive">Yes</button>
                                    <input type="hidden" name="isactive" value="no">
                                    <input type="hidden" name="dataid" value="<?php echo $row["jewellery_id"];?>">
                                   </form>

                                  <?php


                                }
                                else
                                {
                                  ?>

                                  <form method="post">
                                  <button type="submit" class="btn btn-danger" name="btnactive">No</button>
                                  <input type="hidden" name="isactive" value="yes">
                                  <input type="hidden" name="dataid" value="<?php echo $row["jewellery_id"];?>">
                                  </form>

                                <?php

                                }
                              
                              ?>


                              </td>


                            <!-- <td><?php echo $row["img1"]; ?></td> -->
                            <!-- <td><img src="uploads/jewl/<?php echo $row["img1"]; ?>" height="100px" width="100px" alt=""></td> -->
                            <!-- <td><?php echo $row["img2"]; ?></td> -->
                            <!-- <td><img src="uploads/jewl/<?php echo $row["img2"]; ?>" height="100px" width="100px" alt=""></td> -->
                            <!-- <td><?php echo $row["img3"]; ?></td> -->
                            <!-- <td><img src="uploads/jewl/<?php echo $row["img3"]; ?>" height="100px" width="100px" alt=""></td> -->
                            <!-- <td><?php echo $row["video_url"]; ?></td> -->
                            <!-- <td><video src="video/hand_moving_a_mouse (1080p).mp4" controls height="150px" width="150px"></video></td>
                            <td> -->
                              <td>
                            <a href="viewdatajwell.php?viewid=<?php echo $row["jewellery_id"]?>"><button class="btn btn-primary" >View</button></a>
                            <a href="updatejewl.php?updateid=<?php echo $row["jewellery_id"]?>"><button class="btn btn-secondary" >Update</button></a>
                            <button type="submit" class="btndelete" data-id="<?php echo $row["jewellery_id"]; ?>" data-img1="<?php echo $row["img1"]; ?>" data-img2="<?php echo $row["img2"]; ?>" data-img3="<?php echo $row["img3"]; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

                            </td>
                            <!-- <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td> -->
                          </tr>
                         
                                <?php
                            }
                          ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
 
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php include 'footer.php'; ?>
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
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
    <script>
  
  $(document).ready(function() {
  $(document).on('click',".btndelete", function() {
      var id = $(this).attr("data-id");
      $("#deleteid").val(id);
      var img1 = $(this).attr("data-img1");
      $("#deleteimg1").val(img1);
      var img2 = $(this).attr("data-img2");
      $("#deleteimg2").val(img2);
      var img3 = $(this).attr("data-img3");
      $("#deleteimg3").val(img3);
  });
});
</script>
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:24:25 GMT -->
</html>