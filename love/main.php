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
              <a class="nav-link active" href="main.php">Online Form</a>
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
              <a class="nav-link" href="services_login.php">Services Offered</a>
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
          <h2>Fill Out Form</h2>
  <form method="POST" action="transac_applicant.php?action=add">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="name" class="form-control" name="applicant_name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Recent Address</label>
    <input type="name" class="form-control" name="applicant_address"  required>
  </div>
     <div class="form-group">
         <label for="exampleInputEmail1">Applicant Number</label>         
         <input type="number" class="form-control" name="applicant_number"  required >
    </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Applicant Nationality</label>
    <input type="name" class="form-control" name="applicant_nationality" required>
  </div>
  <div class="form-group">
  <label for="sel1">Sex:</label>
  <select class="form-control" name="applicant_sex">
    <option>Male</option>
    <option>Female</option>
  </select>
</div>
<div class="form-group">
  <label for="sel1">Civil Status:</label>
  <select class="form-control" name="applicant_status">
    <option>Single</option>
    <option>Married</option>
    <option>Widowed</option>
    <option>Separated</option>
  </select>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Birthplace</label>
    <input type="name" class="form-control" name="applicant_birthplace" value="" required>
  </div>
     <div class="form-group">
         <label for="exampleInputEmail1">Fathers Name</label>
         <input type="name" class="form-control" name="applicant_fathername" value="" required>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Mothers Name</label>
         <input type="name" class="form-control" name="applicant_mothername" value="" required>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Spouse Name</label>
         <input type="name" class="form-control" name="applicant_spousename" value="" required>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">License Classification Applied For (LCA)</label>
         <select class="form-control" name="applicant_LCA">
    <option>Student-Drivers Permit</option>
    <option>Driver's License</option>
    <option>Conductor's License</option>
  </select>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Highest Educational Attainment</label>
         <select class="form-control" name="applicant_EA">
    <option>PostGraduate</option>
    <option>College</option>
    <option>High School</option>
    <option>Elementary</option>
  </select>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Blood Type</label>
         <select class="form-control" name="applicant_bloodtype">
    <option>A</option>
    <option>B</option>
    <option>AB</option>
    <option>O</option>
  </select>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Eye Color</label>
         <input type="name" class="form-control" name="applicant_eyecolor" value="" required>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Emergency Contact</label>
         <input type="name" class="form-control" name="applicant_emergency_contact" value="" required>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Emergency Contact Number</label>
         <input type="name" class="form-control" name="applicant_emergency_contact_no" value="" required>
    </div>
    <div class="form-group">
         <label for="exampleInputEmail1">Type Of Application</label>
         <select class="form-control" name="applicant_toa">
    <option>New</option>
    <option>Renewal</option>
    <option>Conversion of Foreign DL</option>
    <option>Additional Code or Category</option>
    <option>Change of DL Classification</option>
    <option>Expired DL with Valid DL</option>
    <option>Duplicate</option>
    <option>DROP/ADD Category or Removal of Driving Condition</option>
    <option>Change Address</option>
    <option>Change Civil Status</option>
    <option>Change Name</option>
    <option>Change Birth Date</option>
    <option>Others</option>
    <option>Enhancement of DL</option>
    <option>Change of Clutch Type</option>
  </select>
    </div>
  <div class="form-group">
        <input type="submit" class="btn btn-primary">
  </div>
</form>
        </div>
      </div>
    </div>
  </body>
</html>
