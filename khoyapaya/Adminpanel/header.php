<?php
 include_once('config.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- .php -->
  <head>
    <style type="text/css">
      .profile
      { 
        vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>SB Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a href="index.php"><img width="200" height="60" class="logo" src="img_all/logo/1234.png" alt="logo" style="padding: 0px; margin:0px;"></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
       <div id="imgicon">
      <ul class="navbar-nav ml-auto ml-md-0">

        <li class="nav-item dropdown no-arrow mx-1" >
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
              $result = mysqli_query($conn,"SELECT COUNT(*) FROM `appointment_master` WHERE Status=0");
              $ROW=mysqli_fetch_array($result);
              $count=$ROW['COUNT(*)'];
            ?>
            <span class="badge badge-danger"><?php echo $count; ?></span>
            <i class="fas fa-bell fa-fw"></i>
          </a>
        </li>

      <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge badge-danger">7</span>
            <i class="fas fa-envelope fa-fw"></i>
          </a>
        </li>
        <?php  
        if(isset($_SESSION['khoyapaya_login_user'],$_SESSION['user']))
        {
          $user=$_SESSION['user'];
          $email=$_SESSION['khoyapaya_login_user'];
          $result = mysqli_query($conn,"SELECT Profile_Img FROM registration WHERE Email_Id = '$email'");
          while($ROW=mysqli_fetch_array($result))
          {
            echo '<img src="'.$ROW['Profile_Img'].'" class="join-top profile dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
          }
        }
        else
        {
      
          ?>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
        <?php }?>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="admin_profile.php">View Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
    </div>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <!-- <h6 class="dropdown-header">Login Screens:</h6> -->
            <a class="dropdown-item" href="login.php">Login</a>
           <!--  <a class="dropdown-item" href="register.php">Register</a> -->
            <a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
             <a class="dropdown-item" href="index1.php">CRUD</a>
            <a class="dropdown-item" href="addchild.php">Child Registration</a>
            <a class="dropdown-item" href="addevent.php">Event Registration</a>

           <!--  <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item active" href="404.php">404 Page</a>
            <a class="dropdown-item" href="blank.php">Blank Page</a>
          </div> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>
