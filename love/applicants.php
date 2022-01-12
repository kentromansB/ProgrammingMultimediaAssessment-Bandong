<?php 
session_start();
$admin_username = $_SESSION['admin_username'];
error_reporting(0);
require_once('db.php');

$query = "SELECT * FROM   admin WHERE  admin_username='$admin_username'";
            $result = mysqli_query($db,$query) or die(mysqli_error($db));

              while($row = mysqli_fetch_array($result))
              {
                $zz= $row['user_id'];
                $i= $row['admin_username'];
                $a=$row['admin_password'];
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
              <a class="nav-link" href="guests.php">Guest List</a>
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
          
          <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Applicant List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Applicant Name
                      </th> 
                      <th>
                        
                      </th>
                    </thead>
                    <tbody>
                  <?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"love");
	$q="select count(*) \"total\"  from applicant";
	$ros=mysqli_query($link,$q);
	$row=mysqli_fetch_array($ros);
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
  $k=($page_cur-1)*$dis;
  $query = 'SELECT * FROM applicant';
  $result = mysqli_query($db,$query) or die (mysqli_error($db));
	
  
    if(mysqli_num_rows($result) == 0)
    {
       
    }
    else
    {
        while($row=mysqli_fetch_assoc($result))
        {
            
          
          echo '<tr>';
          echo ' <td>'. $row['applicant_name'].'</td>';

    
            

        }
        }   
            
    
	
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	
     echo '<script>
             function deleteFunc() {
               var txt;
               if (confirm("Are you sure to delete?")) {
                
               } else {
                 
               }
               document.getElementById("demo").innerHTML = txt;
             }
             </script>';
     
?>
                   </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
