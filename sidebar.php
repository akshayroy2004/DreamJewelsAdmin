<header class="main-nav">
  <nav>
    <div class="main-navbar">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="mainnav">
        <ul class="nav-menu custom-scrollbar h-100">
          <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>

          <li class="dropdown"><a href="dashboard.php" class="nav-link menu-title"><i data-feather="home"></i><span>Dashboard</span></a>

          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="airplay"></i><span>Master</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="viewtype.php">Type</a></li>
              <li><a href="viewcarat.php">Carat</a></li>
              <li><a href="viewshape.php">Shape</a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="gitlab"></i><span>Jewellery</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="viewcat.php">Category</a></li>
              <li><a href="viewsubcat.php">SubCategory</a></li>
              <li><a href="viewjewl.php">Jewellery</a></li>

            </ul>
          </li>

          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="shopping-cart"></i><span>Customer Order</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="vieworder.php">All Order</a></li>
              <li><a href="viewdetails.php">Order Details</a></li>
              <li><a href="viewcart.php">Cart</a></li>

            </ul>
          </li>
          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="map-pin"></i><span>Locations</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="viewstate.php">State</a></li>
              <li><a href="viewcity.php">City</a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="star"></i><span>Reviews</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="viewreview.php">All Reviews</a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="edit"></i></i><span>Articles</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="viewarticles.php">All articles</a></li>
              <li><a href="viewcomment.php">All comments</a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="command"></i><span>Utility</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="viewoffer.php">Offers</a></li>
              <li><a href="viewfaq.php">Faq</a></li>
              <li><a href="viewfeedback.php">Feedback</a></li>
              <li><a href="viewgallery.php">Gallery</a></li>
              <li><a href="viewuser.php">User</a></li>

            </ul>
          </li>

          <?php

          $id = $_SESSION["adminid"];
          // echo $id;
          $result = mysqli_query($conn, "select * from admin where login_id='$id'") or die(mysqli_error($conn));
          $row = mysqli_fetch_assoc($result);

          // echo "yes";
          // echo $row["type"];
          if ($row["type"] == " super") {
            // echo "yes1";
          ?>
            <li class="dropdown"><a href="signup.php" class="nav-link menu-title"><i data-feather="users"></i><span>Create Account</span></a>
            </li>

          <?php
          } else {
            // echo "no";
          ?>
            <li></li>
          <?php
          }

          ?>


          <li class="dropdown"><a class="nav-link menu-title"><i data-feather="users"></i><span>My Account</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="changepassword.php">Change Password</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="logout.php">log out</a></li>

            </ul>
          </li>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
  </nav>
</header>