<?php 
session_start();
$username = $_SESSION['username'];
error_reporting(0);
require_once('db.php');

              
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
              <a class="nav-link" href="services.php">Services Offered</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Contact Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="technology.php">Technology Stack</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="edit_user_profile"
                >Edit Profile</a
              >
            </li>
          </ul>
          <hr class="d-sm-none" />
        </div>
        <div class="col-sm-8">
          <h2>Fill Out Form</h2>
          <form method="POST" action="edit_user.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="name" class="form-control" name="applicant_name" value="<?php echo $i ?>"  >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Recent Address</label>
    <input type="name" class="form-control" name="applicant_address" value="<?php echo $c ?>" required>
  </div>
     <div class="form-group">
         <label for="exampleInputEmail1">Applicant Number<div class="d-sm-none">
         <input type="number" class="form-control" name="applicant_number" value="<?php echo $c ?>" required>
    </div></label>
    <input type="number" class="form-control" name="applicant_number" value="<?php echo $d ?>" required>
  </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Applicant Nationality</label>
    <input type="name" class="form-control" name="applicant_nationality" value="<?php echo $b ?>" required>
  </div>
  <div class="form-group">
  <label for="sel1">Sex:</label>
  <select class="form-control" id="sel1">
    <option>Male</option>
    <option>Female</option>
  </select>
</div>
<div class="form-group">
  <label for="sel1">Civil Status:</label>
  <select class="form-control" id="sel1">
    <option>Single</option>
    <option>Married</option>
    <option>Widowed</option>
    <option>Separated</option>
  </select>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Recent Address</label>
    <input type="name" class="form-control" name="applicant_address" value="<?php echo $c ?>" required>
  </div>
     <div class="form-group">
         <label for="exampleInputEmail1">Applicant Number<div class="d-sm-none">
         <input type="number" class="form-control" name="applicant_number" value="<?php echo $c ?>" required>
    </div></label>
    <input type="number" class="form-control" name="applicant_number" value="<?php echo $d ?>" required>
  </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Applicant Nationality</label>
    <input type="name" class="form-control" name="applicant_nationality" value="<?php echo $b ?>" required>
  </div>
  <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
      </div>
    </div>
  </body>
</html>
