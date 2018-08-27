
<?php
session_start();
error_reporting(0);



$s_type_user = $_SESSION["s_type_user"];
$bp_admin_overall = $_SESSION["bp_admin_overall"];


if (!isset($bp_admin_overall) AND $s_type_user != "super_admin") {
  ?><script langquage='javascript'>

  </script><?php
}
 ?>


<html lang="en">
    <head>

    <style type="text/css">
body {
              background: #ddd url(../../../day/file_include/login_admin_include/images/bg2.jpg) repeat top left !important ;
}
</style>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="../file_include/login_admin_include/css/style.css" />
		<script src="../file_include/modernizr.custom.63321.js"></script>

    </head>
    <body class="focused-form animated-content">



        <div class="container" id="login-form">
           <div class="row">
             <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                     <section class="main">
                           <form action="../function/database/get_admin_check.php" class="form-1" method="post" >

                                   <p class="field">
                                            <input type="password" name="password" placeholder="ใส่ Pass"> <i class="icon-lock icon-large"></i>
                                   </p>
                                   <p class="submit">
                                           <button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
                                   </p>
                  </div>
                            </form>
                      </section>
                  </div>
                </div>
             </div>
        </div>




    </body>
</html>


<script type="text/javascript" src="../file_include/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="../file_include/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="../file_include/plugins/velocityjs/velocity.ui.min.js"></script>
<script type="text/javascript" src="../file_include/js/application.js"></script>
