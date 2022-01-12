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
          <a class="nav-link" href="signup.php">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_login.php">Admin Login</a>
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
              <a class="nav-link" href="index.php">Start-up Love</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services Offered</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Contact Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="technology.php">Technology Stack</a>
            </li>
            
          </ul>
          <hr class="d-sm-none" />
        </div>
        <div class="col-sm-4">
          <h2>Technolody Used</h2>
          <div class="fakeimg"><image src="assets/php.png" width="200"></image></div>
          <div class="fakeimg"><image src="assets/xampp.svg" width="240"></image></div>
          <div class="fakeimg"><image src="assets/bootstrap.png" width="200"></image></div>
          <br />
          <h5>
          ● Php<br>
          ● Xampp<br>
          ● Bootstrap 4<br>
          
          </h5>
          <br />
        </div>
      </div>
    </div>
  </body>
</html>
