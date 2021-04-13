<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HOME PAGE</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b159818ddd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container-fluid" id="n0">
      <div class="row" id="navigation">
        <div class="col-md-2" id="logo">
          <a href="#"><img src="images/logo3.jpg" class="logo-img" alt=""></a>
        </div>
        <div class="col-md-10" id="menu">
          <ul class="nav">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">About Us</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">About ElysiumPro</a>
                <a href="#" class="dropdown-item">Why ElysiumPro</a>
                <a href="#" class="dropdown-item">Our Team</a>
                <a href="#" class="dropdown-item">Achievement</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Services</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Campus Traning</a>
                <a href="#" class="dropdown-item">Engineegin Project</a>
                <a href="#" class="dropdown-item">Acadmic Project</a>
                <a href="#" class="dropdown-item">Student Project</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Project Training</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Methodology</a>
                <a href="#" class="dropdown-item">Domain</a>
                <a href="#" class="dropdown-item">Project Tital</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Publication</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Paper Writting</a>
                <a href="#" class="dropdown-item">Plagiatisum Check</a>
                <a href="#" class="dropdown-item">Confrunce Service</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Support</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Apointment Booking</a>
                <a href="#" class="dropdown-item">Blog</a>
              </div>
            </li>
            <li class="nav-item drop"><a href="#" class="nav-link a">Contact Us</a></li>
            <li class="nav-item bar-icon"><a href="#" class="nav-link" onclick="openNav()"><i class="fas fa-bars"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link n" id="search"><i class="fas fa-search"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link n">Student Login <i class="fas fa-lock"></i></a></li>
           </ul>
         </div>
      </div>
    </div>

    <!-- SCROLL NAVBAR -->
    <div class="container-fluid" id="n1">
      <div class="row" id="navigation">
        <div class="col-md-2" id="logo">
          <a href="#"><img src="images/logo3.jpg" class="logo-img" alt=""></a>
        </div>
        <div class="col-md-10" id="menu">
          <ul class="nav">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">About Us</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">About ElysiumPro</a>
                <a href="#" class="dropdown-item">Why ElysiumPro</a>
                <a href="#" class="dropdown-item">Our Team</a>
                <a href="#" class="dropdown-item">Achievement</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Services</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Campus Traning</a>
                <a href="#" class="dropdown-item">Engineegin Project</a>
                <a href="#" class="dropdown-item">Acadmic Project</a>
                <a href="#" class="dropdown-item">Student Project</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Project Training</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Methodology</a>
                <a href="#" class="dropdown-item">Domain</a>
                <a href="#" class="dropdown-item">Project Tital</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Publication</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Paper Writting</a>
                <a href="#" class="dropdown-item">Plagiatisum Check</a>
                <a href="#" class="dropdown-item">Confrunce Service</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle a">Support</a>
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">Apointment Booking</a>
                <a href="#" class="dropdown-item">Blog</a>
              </div>
            </li>
            <li class="nav-item"><a href="#" class="nav-link a">Contact Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link" id="search"><i class="fas fa-search"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link">Student Login <i class="fas fa-lock"></i></a></li>
           </ul>
         </div>
      </div>
    </div>

    <!-- SIDE NAVBAR -->
    <div id="sidebar">
      <h2 id="close" onclick="closeNav()">X</h2>
      <a href="#" class="dropdown-link">About Us<i class="fas fa-chevron-down"></i></a>
        <div class="dropdown-content" >
          <a href="#" class="dropdown-item">About ElysiumPro</a>
          <a href="#" class="dropdown-item">Why ElysiumPro</a>
          <a href="#" class="dropdown-item">Our Team</a>
          <a href="#" class="dropdown-item">Achievement</a>
        </div>
      <a href="#" class="dropdown-link">Services<i class="fas fa-chevron-down"></i></a>
        <div class="dropdown-content" >
          <a href="#" class="dropdown-item">Campus Traning</a>
          <a href="#" class="dropdown-item">Engineegin Project</a>
          <a href="#" class="dropdown-item">Acadmic Project</a>
          <a href="#" class="dropdown-item">Student Project</a>
        </div>
      <a href="#" class="dropdown-link">Project Training<i class="fas fa-chevron-down"></i></a>
      <div class="dropdown-content">
        <a href="#" class="dropdown-item">Methodology</a>
        <a href="#" class="dropdown-item">Domain</a>
        <a href="#" class="dropdown-item">Project Tital</a>
      </div>
      <a href="#" class="dropdown-link">Publication<i class="fas fa-chevron-down"></i></a>
      <div class="dropdown-content">
        <a href="#" class="dropdown-item">Paper Writting</a>
        <a href="#" class="dropdown-item">Plagiatisum Check</a>
        <a href="#" class="dropdown-item">Confrunce Service</a>
      </div>
      <a href="#" class="dropdown-link">Support<i class="fas fa-chevron-down"></i></a>
      <div class="dropdown-content">
        <a href="#" class="dropdown-item">Apointment Booking</a>
        <a href="#" class="dropdown-item">Blog</a>
      </div>
      <a href="#" class="dropdown-link">Contact Us</a>
    </div>
  </body>
</html>
