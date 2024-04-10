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
  <title>View Order</title>
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
              <div class="col-sm-6">
                <h3>View Order</h3>
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                  <li class="breadcrumb-item">Tables</li>
                  <li class="breadcrumb-item">Data Tables</li>
                  <li class="breadcrumb-item active">Basic Init</li>
                </ol> -->

              </div>
              <div class="col-sm-6">

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
              
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="display" id="basic-1">

                      <thead>
                        <tr>
                          <th>#</th>
                          <th>User Name</th>
                          <!-- <th>Totle payment</th> -->
                          <!-- <th>Address</th> -->
                          <!-- <th>Landmark</th> -->
                          <!-- <th>Pincode</th> -->
                          <th>City Name</th>
                          <!-- <th>Transaction Number</th> -->
                          <th>Status</th>
                          <!-- <th>Order date_time</th>
                            <th>Delivery date_time</th> -->
                          <th>Offer Name</th>
                          <th>Discount</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count = 1;
                        $result = mysqli_query($conn, "select *,o.discount as odiscount from tbl_order as o left join user as u on o.user_id=u.user_id left join tbl_city as c on o.city_id=c.city_id left join tbl_offer as of on o.offer_id=of.offer_id") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <!-- <td><?php echo $row["total_payment"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["landmark"]; ?></td>
                            <td><?php echo $row["pincode"]; ?></td> -->
                            <td><?php echo $row["city_name"]; ?></td>
                            <!-- <td><?php echo $row["t_number"]; ?></td> -->
                            <td><?php echo $row["status"]; ?></td>
                            <!-- <td><?php echo $row["order_date_time"]; ?></td>
                            <td><?php echo $row["delivery_date_time"]; ?></td> -->
                            <td><?php echo $row["title"]; ?></td>
                            <td><?php echo $row["odiscount"]; ?></td>
                            <td>
                              <a href="viewdataorder.php?viewid=<?php echo $row["order_id"] ?>"><button class="btn btn-primary">View</button></a>
                              <!-- <button type="submit" class="btndelete" data-id="<?php echo $row["order_id"]; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button> -->

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