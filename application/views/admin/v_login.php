<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/iCheck/square/blue.css' ?>">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div>
      <p><?php echo $this->session->flashdata('msg'); ?></p>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg" style="text-align: center;"> <img width="200px;" src="<?php echo base_url() . 'assets/images/my-logo.png' ?>"></p>
      <!-- <h1 class="login-box-msg">Admin</h1> -->
      <hr />
      <form action="<?php echo site_url() . 'admin/login/auth' ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <div style="justify-content: right; display: flex; padding-top: 5px; padding-bottom: 5px; font-weight: bold; font-size: 13px" for="togglePassword">
            <input style="margin: 3px;" type="checkbox" id="togglePassword"> Show Password
          </div>
        </div>
        <div style="justify-content: left; display: flex;" class="row">
          <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- <div class="col-xs-7 text-right">
            <a href="<?php echo site_url() . 'admin/login/forgot_password' ?>">Forgot Password?</a>
          </div> -->
        </div>
      </form>
      <hr />
      <p>
        <center>Copyright <?php echo date('Y'); ?> by SMP YPMII <br /> All Right Reserved</center>
      </p>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
</body>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js' ?>"></script>
<script>
  $(function() {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');

  togglePassword.addEventListener('change', function() {
    if (togglePassword.checked) {
      passwordInput.setAttribute('type', 'text');
    } else {
      passwordInput.setAttribute('type', 'password');
    }
  });
</script>

</html>