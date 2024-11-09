<?php 
session_start(); 
// If user is already logged in, redirect to the appropriate page
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background: url(image/bdms3.jpg) no-repeat center;
      background-size: cover;
      min-height: 0;
      height: 650px;
    }
    .login-form {
      width: calc(100% - 20px);
      max-height: 650px;
      max-width: 450px;
      background-color: white;
    }
  </style>
</head>
<?php $title="Bloodbank | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>
  <div class="container cont">
    <?php require 'message.php'; ?>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
        <div class="card rounded">
          <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#receivers">User</a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane container active" id="receivers">
              <!-- Updated action to login.php -->
              <form action="ulogin.php" method="post" class="login-form">
                <label class="text-muted font-weight-bold">Username</label>
                <input type="text" name="rname" placeholder="Username" class="form-control mb-4">
                <label class="text-muted font-weight-bold">Password</label>
                <input type="password" name="rpassword" placeholder="Password" class="form-control mb-4">
                <input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>
