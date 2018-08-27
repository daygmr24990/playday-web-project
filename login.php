
 <meta charset="utf-8">
 <title>Login Form</title>


 <style type="text/css">
body {
           background: #ddd url(../../../day/file_include/login_admin_include/images/bg-login-user.jpg) repeat top left !important ;

}
</style>

<center>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="file_include/login_admin_include/css/style.css" />
		<script src="file_include/js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body class="focused-form animated-content">



        <div class="container" id="login-form">
	         <div class="row">
             <div class="col-md-4 col-md-offset-4">
	              <div class="panel panel-default">
                  <div class="panel-body">
			               <section class="main">
				                   <form action="function/index/sql/get_user_check.php" class="form-1" method="post" style="width: 300px !important; margin: 100px auto 110px !important; left: -500px !important; top: 120px !important; ">
						                       <p class="field">
							                              <input type="text" name="username" placeholder="Username"> <i class="icon-lock icon-large"></i>
					                         </p>
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

</center>



<script type="text/javascript" src="file_include/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="file_include/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="file_include/plugins/velocityjs/velocity.ui.min.js"></script>
<script type="text/javascript" src="file_include/js/application.js"></script>
