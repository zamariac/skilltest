<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <header>
      <nav class="navbar navbar-inverse  navbar-fixed-top">
          <label class="navbar-toggle" id="js-navbar-toggle" for="chkToggle">
              <i class="fa fa-bars"></i>
          </label>
          <div class="logo-wrapper">
              <img class="logo" src="<?php bloginfo('template_url');?>/images/sawyer-logo.png">
          </div>  
          <div class="main-menu">
            <div class="menu-links">
              <input type="checkbox" id="chkToggle"></input> 
              <ul class="main-nav" id="js-menu">
                  <li>
                    <a href="#" class="nav-links">About Us</a>
                  </li>
                  <li>
                    <a href="#" class="nav-links">Amenities</a>
                  </li>
                  <li>
                    <a href="#" class="nav-links">Gallery</a>
                  </li>
                  <li>
                    <a href="#" class="nav-links">Floor Plans</a>
                  </li>
                  <li>
                    <a href="#" class="nav-links">Neighborhood</a>
                  </li>
                  <li>
                    <a href="#" class="nav-links">Contact Us</a>
                  </li>
                  <li>
                    <a href="#" class="nav-links button">Schedule Tour</a>
                  </li>
              </ul> 
              </div>  
        </div>
       </nav>
</header>