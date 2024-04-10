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
    <title>View Type</title>
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
                  <h3>View Type</h3>
                  <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Basic Init</li>
                  </ol> -->
                  <div class="justify-right">
                  <a href="addtype.php"><button class="btn btn-primary" >Add</button></a>
                 
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
                          <form  method="post">
                          <input type="hidden" name="deleteid" id="deleteid">
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

                $result = mysqli_query($conn,"delete from type where type_id='$id'");

                if($result)
                {
                  echo "<script>window.location='viewtype.php'</script>";
                }
                else
                {
                  echo "error";
                }

               }
              
              ?>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Type Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $count = 1;
                            $result = mysqli_query($conn,"select * from type") or die (mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                <tr>
                                <td><?php echo $count++; ?></td>
                            <td><?php echo $row["type_name"]; ?></td>
                            <td>
                            <a href="updatetype.php?updateid=<?php echo $row["type_id"];?>"><button class="btn btn-secondary" >Update</button></a>
                            <!-- <button type="submit" class="btndelete" data-id="<?php echo $row["type_id"]; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button> -->
                            <button type="button" class="btndelete" data-id="<?php echo $row["type_id"]; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                            </td>
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
  });
});
</script>
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 08:24:25 GMT -->
</html>