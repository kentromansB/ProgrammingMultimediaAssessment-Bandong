<?php 
session_start();
$admin_username = $_SESSION['admin_username'];
error_reporting(0);
require_once('db.php');
if(!$_SESSION['admin_username']){
    exit(header('Location: admin_login.php'));
  }

$query = "SELECT * FROM applicant WHERE  applicant_id=".$_GET['applicant_id'];
            $result = mysqli_query($db,$query) or die(mysqli_error($db));

              while($row = mysqli_fetch_array($result))
              {
                $applicant_id = $row['applicant_id'];
                $applicant_name = $row['applicant_name'];
					  $applicant_address = $row['applicant_address'];
						// $mobile_number = $row['mobile_number'];
						$applicant_number = $row['applicant_number'];
						$applicant_nationality = $row['applicant_nationality'];
						$applicant_sex = $row['applicant_sex'];
						$applicant_status = $row['applicant_status'];
						$applicant_birthplace = $row['applicant_birthplace'];
						$applicant_fathername = $row['applicant_fathername'];
						$applicant_mothername = $row['applicant_mothername'];
						$applicant_spousename = $row['applicant_spousename'];
						$applicant_LCA = $row['applicant_lca'];
						$applicant_EA = $row['applicant_ea'];
						$applicant_bloodtype = $row['applicant_bloodtype'];
						$applicant_eyecolor = $row['applicant_eyecolor'];
						$applicant_emergency_contact = $row['applicant_emergency_contact'];
						$applicant_emergency_contact_no = $row['applicant_emergency_contact_no'];
						$applicant_toa = $row['applicant_toa'];
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
              <a class="nav-link active" href="applicants.php">Applicants List</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                >Edit Profile</a
              >
            </li>
          </ul>
          <hr class="d-sm-none" />
        </div>
        <div class="col-sm-8">
          <h2>Edit Admin Credentials</h2>
          <form method="POST" action="approve.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_name ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_address ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_number ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nationality</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_nationality ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sex/Gender</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_sex ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Civil Status</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_status ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Birthplace</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_birthplace ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Father's Name</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_fathername ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mother's Name</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_mothername ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Spouse's Name</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_spousename ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">License Classification Applied for (LCA)</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_LCA ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Highest Educational Attainment</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_EA ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Blood Type</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_bloodtype ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Eye Color</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_eyecolor ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Emergency Contact</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_emergency_contact ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Emergency Contact Number</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_emergency_contact_no ?>" disabled >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Type of Application</label>
    <input type="name" class="form-control" name="username" value="<?php echo $applicant_toa ?>" disabled >
  </div>
  <div class="form-group">
    <input type="name" class="form-control" name="applicant_id" value="<?php echo $applicant_id ?>"  hidden>
  </div>
        <?php echo '<a  type="button" class="btn btn-xs btn-success" href="approve.php?action=edit & applicant_id='.$applicant_id. '"> Approve </a>'?>
        <?php echo '<a  type="button" class="btn btn-xs btn-danger" href="decline.php?cation=edit & applicant_id='.$applicant_id . '"> Decline </a>'?>
</form>
<br>
        </div>
      </div>
    </div>
  </body>
</html>
