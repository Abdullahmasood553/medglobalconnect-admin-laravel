<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Medglobabl Connect Admin Panel| Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/square/blue.css') }}">

    

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>MedGlobal</b>Connect</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="../../index2.html" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->



    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
