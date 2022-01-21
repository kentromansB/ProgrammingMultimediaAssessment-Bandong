<?php 
session_start();
$username = $_SESSION['username'];
error_reporting(0);
require_once('db.php');
if(!$_SESSION['username']){
  exit(header('Location: login.php'));
}

              
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LOVE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      .img {
        height: 200px;
        background: #ffffff;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
      <a class="navbar-brand" href="index.html">LOVE</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
    </li>
        </ul>
      </div>
    </nav>

    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-sm-4">
          <h2>LTO</h2>
          <div class="fakeimg">
            <image src="assets/lto.png" width="200px"></image>
          </div>

          <ul class="nav nav-pills flex-column">
            <br />
            <li class="nav-item">
              <a class="nav-link" href="main.php">Online Form</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="edit_user_profile.php"
                >Edit Profile</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index_login.php">Start-up Love</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="services_login.php">Services Offered</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts_login.php">Contact Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="technology_login.php">Technology Stack</a>
            </li>
          </ul>
          <hr class="d-sm-none" />
        </div>
        <div class="col-sm-8">
        <h2>Contact Us</h2>
        <h2>Services Offered</h2>
          <video width="700" height="360" controls>
        <source src="assets/LOVE.mp4" type="video/mp4">
        </video>
          <br />
          <h5>
          ● Student Permit <br>
          ● Non-Professional Driver’s License<br>
          ● Professional Driver’s License<br>
          ● Renewal of Driver’s License
          </h5>
          <br />
        </div>
      </div>
    </div>
  </body>
</html>
