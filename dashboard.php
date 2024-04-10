<?php
// echo "demo";
include 'checksession.php'; ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/viho/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 07:52:33 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>jewellery Shop</title>
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
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vector-map.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <style>
    th {
      padding-right: 20px !important;
    }
    .img{
      border-radius: 100px;
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
  <!-- page-wrapper Start       -->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include 'header.php'; ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
      <!-- Page Sidebar Start-->
      <?php include 'sidebar.php'; ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <!-- Container-fluid starts-->

        
        <div class="container-fluid dashboard-default-sec">
          <div class="row">
            

            <div class="col-xl-3 col-md-3 col-sm-3 box-col-3 des-xl-25 rate-sec">
              <div class="card income-card card-primary">
                <div class="card-body text-center">
                  <div class="round-box">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                      <g>
                        <g>
                          <img class="img" src="img/order3.jpg" alt="" height="80px" width="80px">
                          
                          <!-- <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path> -->
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                        </g>
                      </g>
                    </svg>
                  </div>

                  <?php
                  $result = mysqli_query($conn, "select * from tbl_order");
                  $row = mysqli_num_rows($result);
                  ?>
                  <h5><?php echo $row; ?></h5>
                  <p>Total Order</p>
                  
                  <div class="parrten">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                         
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"> </path>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3 box-col-3 des-xl-25 rate-sec">
              <div class="card income-card card-secondary">
                <div class="card-body text-center">
                  <div class="round-box">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                      <g>
                        <g>
                          <!-- <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path> -->
                          <img class="img" src="img/review3.webp" alt="" height="80px" width="80px">
                        </g>
                      </g>
                    </svg>
                  </div>
                  <?php
                  $result = mysqli_query($conn, "select * from tbl_review");
                  $row = mysqli_num_rows($result);
                  ?>
                  <h5><?php echo $row; ?></h5>
                  <p>Total Review</p>
                  <div class="parrten">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                         
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3 box-col-3 des-xl-25 rate-sec">
              <div class="card income-card card-primary">
                <div class="card-body text-center">
                  <div class="round-box">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                      <g>
                        <g>
                          <!-- <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path> -->
                          <img class="img" src="img/user2.png" alt="" height="80px" width="80px">
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <?php
                  $result = mysqli_query($conn, "select * from user");
                  $row = mysqli_num_rows($result);
                  ?>
                  <h5><?php echo $row; ?></h5>
                  <p>Table User</p>
                  <div class="parrten">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                        
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"> </path>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3 box-col-3 des-xl-25 rate-sec">
              <div class="card income-card card-primary">
                <div class="card-body text-center">
                  <div class="round-box">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                      <g>
                        <g>
                          <!-- <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path> -->
                         <img class="img" src="img/jewel.jpg" alt="" height="80px" width="80px">
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <?php
                  $result = mysqli_query($conn, "select * from Jewellery");
                  $row = mysqli_num_rows($result);
                  ?>
                  <h5><?php echo $row; ?></h5>
                  <p>Table Jewellery</p>
                  <div class="parrten">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                        
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"> </path>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
           

            
            <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <h2>Order Report</h2>
                  <div class="chart-container">
                      <canvas id="chart" style="height: 300px;"></canvas>
                  </div>

                  </div>
              </div>
            </div>

            <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <h2>User Report</h2>
                  <div class="chart-container">
                      <canvas id="chart2" style="height: 300px;"></canvas>
                  </div>

                  </div>
              </div>
            </div>
           

            <div class="col-sm-12">
              <h3>View Order</h3>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <thead>
                              <tr>
                                <th>Order_id</th>
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
                                <th>Action</th>
                              </tr>
                            </thead>
                          </thead>
                          <tbody>
                            <?php
                            $count = 1;
                            $result = mysqli_query($conn, "select * from tbl_order as o left join user as u on o.user_id=u.user_id left join tbl_city as c on o.city_id=c.city_id left join tbl_offer as of on o.offer_id=of.offer_id") or die(mysqli_error($conn));
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
          </div>

        </div>
      </div>
       <!-- footer start-->
       <
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
  <script src="assets/js/chart/chartist/chartist.js"></script>
  <script src="assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
  <script src="assets/js/chart/knob/knob.min.js"></script>
  <script src="assets/js/chart/knob/knob-chart.js"></script>
  <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="assets/js/prism/prism.min.js"></script>
  <script src="assets/js/clipboard/clipboard.min.js"></script>
  <script src="assets/js/counter/jquery.waypoints.min.js"></script>
  <script src="assets/js/counter/jquery.counterup.min.js"></script>
  <script src="assets/js/counter/counter-custom.js"></script>
  <script src="assets/js/custom-card/custom-card.js"></script>
  <script src="assets/js/notify/bootstrap-notify.min.js"></script>
  <script src="assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
  <script src="assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
  <script src="assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
  <script src="assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
  <script src="assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
  <script src="assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
  <script src="assets/js/dashboard/default.js"></script>
  <script src="assets/js/notify/index.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
  <script src='assets/js//chart.min.js'></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
  <script>
    var data = {
  labels: [
    <?php
    $start_date = new DateTime('2023-10-01');
    $current_date = new DateTime();
    $interval = new DateInterval('P1M');
    $date_period = new DatePeriod($start_date, $interval, $current_date);
    foreach ($date_period as $month)
    {
      echo '"'.$month->format('M Y').'"'.",";
    }
    ?>
  ],
  datasets: [{
    label: "Orders",
    backgroundColor: "rgba(0, 121, 107, 1)",
    borderColor: "rgba(0, 121, 107, 1)",
    borderWidth: 2,
    hoverBackgroundColor: "rgba(0, 121, 107, 1)",
    hoverBorderColor: "rgba(0, 121, 107, 1)",
    data: [
      <?php
       $start_date = new DateTime('2023-10-01');
    $current_date = new DateTime();
    $interval = new DateInterval('P1M');
    $date_period = new DatePeriod($start_date, $interval, $current_date);
    foreach ($date_period as $month)
    {
      $targetMonth = $month->format('M');
      $targetYear = $month->format('Y');

        $result = mysqli_query($conn,"SELECT COUNT(*) as total_orders
        FROM tbl_order
        WHERE DATE_FORMAT(order_date_time, '%b') = '$targetMonth'
        AND YEAR(order_date_time) = $targetYear");
        while($row=mysqli_fetch_assoc($result))
        {
          echo $row["total_orders"].",";
        }
    }
      ?>
    ],
  }]
};

var options = {
  maintainAspectRatio: false,
  scales: {
    y: {
      stacked: true,
      grid: {
        display: true,
        color: "rgba(255,99,132,0.2)"
      }
    },
    x: {
      grid: {
        display: false
      }
    }
  }
};

new Chart('chart', {
  type: 'bar',
  options: options,
  data: data
});

var data = {
  labels: [
    <?php
    $start_date = new DateTime('2023-10-01');
    $current_date = new DateTime();
    $interval = new DateInterval('P1M');
    $date_period = new DatePeriod($start_date, $interval, $current_date);
    foreach ($date_period as $month)
    {
      echo '"'.$month->format('M Y').'"'.",";
    }
    ?>
  ],
  datasets: [{
    label: "Users",
    backgroundColor: "rgba(0, 121, 107, 1)",
    borderColor: "rgba(0, 121, 107, 1)",
    borderWidth: 2,
    hoverBackgroundColor: "rgba(0, 121, 107, 1)",
    hoverBorderColor: "rgba(0, 121, 107, 1)",
    data: [
      <?php
       $start_date = new DateTime('2023-10-01');
    $current_date = new DateTime();
    $interval = new DateInterval('P1M');
    $date_period = new DatePeriod($start_date, $interval, $current_date);
    foreach ($date_period as $month)
    {
      $targetMonth = $month->format('M');
      $targetYear = $month->format('Y');

        $result = mysqli_query($conn,"SELECT COUNT(*) as total_users
        FROM user
        WHERE DATE_FORMAT(reg_date_time, '%b') = '$targetMonth'
        AND YEAR(reg_date_time) = $targetYear");
        while($row=mysqli_fetch_assoc($result))
        {
          echo $row["total_users"].",";
        }
    }
      ?>
    ],
  }]
};

var options = {
  maintainAspectRatio: false,
  scales: {
    y: {
      stacked: true,
      grid: {
        display: true,
        color: "rgba(255,99,132,0.2)"
      }
    },
    x: {
      grid: {
        display: false
      }
    }
  }
};

new Chart('chart2', {
  type: 'bar',
  options: options,
  data: data
});
  </script>
  <!-- <script src="assets/js/theme-customizer/customizer.js"></script> -->
  <!-- login js-->
  <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 07:52:33 GMT -->

</html>