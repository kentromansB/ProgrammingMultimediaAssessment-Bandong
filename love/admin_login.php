<?php
$db = mysqli_connect('localhost','root','');
mysqli_select_db($db,'love');
if(isset($_POST['submit'])){
    $admin_username=$_POST['admin_username'];
    $admin_password=$_POST['admin_password'];
    
    $query = mysqli_query($db,"SELECT * from admin where  admin_username='$admin_username' AND  admin_password='$admin_password'");
    $admin_username = stripslashes($admin_username);
    $admin_password = stripslashes($admin_password);
    $admin_username =mysqli_real_escape_string($db,$_POST['admin_username']);
    $admin_password =mysqli_real_escape_string($db,$_POST['admin_password']);

    $result=mysqli_num_rows($query);
    session_start();

    if($result > 0){
        $_SESSION['admin_username'] = $admin_username;
     echo "<script> window.alert('Welcome Admin'); </script>";
     header('location:applicants.php');       
}
else{
    echo "<script> window.alert('Invalid Login Credentials'); </script>";
}
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
          <a class="nav-link active" href="signup.php">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
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
              <a class="nav-link active" href="index.php">Start-up Love</a>
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
                href="https://lto.gov.ph/lto-forms/file/1162-application-for-student-driver-s-permit-driver-s-license-conductor-s-license-apl.html"
                >Online Form</a
              >
            </li>
          </ul>
          <hr class="d-sm-none" />
        </div>
        <div class="col-sm-8">
          <h2>Sign In</h2>
          <form method="POST" action="#">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="name" class="form-control" name="admin_username" placeholder="Enter username" required>
  </div>
  <div class="form-group">
      <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="admin_password" placeholder="Password">
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
</form>
        </div>
      </div>
    </div>
  </body>
</html>
