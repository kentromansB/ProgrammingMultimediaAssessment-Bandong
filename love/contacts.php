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
              <a class="nav-link active" href="contacts.php">Contact Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="technology.php">Technology Stack</a>
            </li>
          </ul>
          <hr class="d-sm-none" />
        </div>
        <div class="col-sm-8">
          <h2>Contact Us</h2>
          <div class="fakeimg"><image src="assets/ecoland.png"></image></div>
          <br />
          <h5> Location: Quezon Blvd, Poblacion District, Davao City, 8000 Davao del Sur</h5>
          <h5> Map : <a href="https://www.google.com/search?q=lto%20davao&sa=X&ved=2ahUKEwiDiv_59sH1AhWSNaYKHR79BocQvS56BAgSECE&biw=1920&bih=937&dpr=1&tbs=lf:1,lf_ui:4&tbm=lcl&rflfq=1&num=10&rldimm=10455096938269248773&lqi=CglsdG8gZGF2YW8iA4gBAUil4tXL5YCAgAhaFRAAGAEiCWx0byBkYXZhbyoECAIQAJIBEWdvdmVybm1lbnRfb2ZmaWNlqgELEAEqByIDbHRvKAA&rlst=f#rlfi=hd:;si:10455096938269248773,l,CglsdG8gZGF2YW8iA4gBAUil4tXL5YCAgAhaFRAAGAEiCWx0byBkYXZhbyoECAIQAJIBEWdvdmVybm1lbnRfb2ZmaWNlqgELEAEqByIDbHRvKAA;mv:[[7.067126522050358,125.62112311954091],[7.050473804759371,125.5889366113622],null,[7.058800238320229,125.60502986545156],16]" target="_blank"> Link </a></h5>
          <h5> Via Email</h4>
          <h6> ltomailbox@lto.gov.ph </h3>
          <h5> Via Phone</h4>
          <h6> (082) 226 4141 </h3>
          
          <br />
        </div>
      </div>
    </div>
  </body>
</html>
