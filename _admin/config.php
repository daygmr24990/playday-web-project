

<?php
include "../database/connect.php";
session_start();
error_reporting(0);




$bp_admin_overall = $_SESSION["bp_admin_overall"];

$status_db_sent = $_SESSION["status_db"];
// $dv_user_name_sent = $_SESSION["dv_user_name_db"];
$s_type_user = $_SESSION["s_type_user"];

if ($s_type_user === "user" ) {

?><script langquage='javascript'>
window.location="<?php echo $url['base_url']; ?>/home";
</script><?php
}

if (!isset($bp_admin_overall) ) {
  ?><script langquage='javascript'>
  window.location="<?php echo $url['base_url']; ?>";
  </script><?php
}else {


?>






<html lang="th">
<head>
    <meta charset="utf-8">
    <title>sss</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="../file_include/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="../file_include/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="../file_include/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="../file_include/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="../file_include/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->


    </head>

    <body class="animated-content">

                    <?php include "menu/navber.php"; ?>

        <div id="wrapper">
            <div id="layout-static">

                <div class="static-sidebar-wrapper sidebar-default">
                      <?php include "menu/menu.php"; ?>
                </div>

                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">

                            </ol>
                            <div class="container-fluid">

<div data-widget-group="group1">
	<div class="row">
		<div class="col-sm-12">

			<div class="panel panel-midnightblue" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>ตั้งค่าการเข้าถึง</h2>

					<div class="options">
						<ul class="nav nav-tabs">


			            </ul>
					</div>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="../function/_admin/dv_insert_bypass.php" method="post">
								<div class="form-group">
                  <?php $dv_s_dcb = "SELECT * FROM `dv_config_base` WHERE dv_id_config = '1' ";
                        $dv_q_dcb = mysqli_query($link , $dv_s_dcb);
                        $result = mysqli_fetch_array($dv_q_dcb);

                  ?>
                  <?php if ($result[0] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="col-md-2 control-label">รหัสเดิม</label>
                      <div class="col-md-8">
                        <div class="input-group">
                          <input disabled type="text" id="hidepass" value="<?php echo $result[1] ?>" class="form-control">
                          <span class="input-group-btn">

                            <a data-toggle="modal" href="#myModal" class="btn btn-default">เปลื่ยนรหัสผ่าน</a>




                          </span>
                        </div>
                      </div>


                    </div>


                    <?php
                  }else {
                    ?>

                    <label for="focusedinput" class="col-sm-2 control-label">ตั้งค่า ByPass Admin</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  id="focusedinput" placeholder="" name="bypass">

                    </div>


                    <?php
                  } ?>

								</div>





						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<button type="submit" class="btn-primary btn">Submit</button>
							<button class="btn-default btn">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			</form>



                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
              <?php include "menu/footer.php"; ?>

                </div>
            </div>
        </div>

    <?php include "menu/function.php";


 ?>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title"></h2>
      </div>
      <div class="modal-body">
        <form action="../function/_admin/dv_update_bypass.php" method="post">

        <h2>เปลื่ยนรหัสผ่าน <input type="password" name="last_pass" ></h2>

      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>
</div>
</div>
</div>








<?php
}
 ?>

<script>
function hide() {
    var x = document.getElementById("hidepass");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

    </body>
</html>





<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../file_include/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="../file_include/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="../file_include/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="../file_include/js/enquire.min.js"></script> 									<!-- Load Enquire -->
<script type="text/javascript" src="../file_include/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="../file_include/plugins/velocityjs/velocity.ui.min.js"></script>
<script type="text/javascript" src="../file_include/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->
<script type="text/javascript" src="../file_include/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="../file_include/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->
<script type="text/javascript" src="../file_include/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->
<script type="text/javascript" src="../file_include/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->
<script type="text/javascript" src="../file_include/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
<script type="text/javascript" src="../file_include/js/application.js"></script>
<script type="text/javascript" src="../file_include/demo/demo.js"></script>
<script type="text/javascript" src="../file_include/demo/demo-switcher.js"></script>
