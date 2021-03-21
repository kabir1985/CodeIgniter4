<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Login - Simple Inventory</title>
</head>

<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1> Simple Inventory</h1>
    </div>
    <div class="login-box">
      <form class="login-form" id="login_submit_form" method="post" action="<?php echo site_url('/Dashboard/create') ?>">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
        <div class="form-group">
          <label class="control-label">USERNAME</label>
          <input class="form-control" type="text" id="user_name" placeholder="User Name" autofocus>
        </div>
        <div class="form-group">
          <label class="control-label">PASSWORD</label>
          <input class="form-control" type="password" id="user_password" placeholder="Password">
        </div>
        <div class="form-group btn-container">
          <button type="button" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
        </div>
      </form>
    </div>

  </section>
  <!-- Essential javascripts for application to work-->
  <!-- The javascript plugin to display page loading on top-->
  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-datepicker.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/select2.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="<?php echo base_url('assets/js/plugins/pace.min.js') ?>"></script>


  <script type="text/javascript">
    $(document).ready(function() {

      $("button").on("click", function() {
        //alert("hello");

        var user_name = $("#user_name").val();
        var user_password = $("#user_password").val();

        var login_url = "http://localhost/codeigniter4/Dashboard/create";

        if (user_name != "" && user_password != "") {
          $("button").attr("disabled", "disabled");

          $.ajax({
            url: login_url, // complete url from siteurl/constroller/function
            method: 'POST',
            data: {
              login_data: user_name,
              user_password
            },
            success: function(data) {
              if (data == 1) {
                // location.href = "http://localhost/codeigniter4/Dashboard";
                window.location.href = "Dashboard";
              }
            },
            error: function() {
              if (data == 0) {
                //alert('error');
                window.location.href = "login";
              }
            }
          });
        } else {
          alert('Please fill all the field !');
        }

      });

    });
  </script>
</body>

</html>