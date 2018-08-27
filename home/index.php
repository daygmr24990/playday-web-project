<?php
session_start();
error_reporting(0);
include "../function/bot/text_process.php";
include "../database/connect.php";

$s_type_user = $_SESSION["s_type_user"];
$session_type_user = $_SESSION["type_user"];
$session_status_login_user = $_SESSION["dv_login_user"];
$bp_admin_overall = $_SESSION["bp_admin_overall"];
$dun = $_SESSION["dv_user_name"];

if (!$dun) {
  ?><script langquage='javascript'>
window.location="<?php echo $url['base_url']; ?>";
  </script><?php
}else {


 ?>
<html lang="th">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home</title>
    <!-- Bootstrap core CSS -->
    <link href="../file_include/login_user_include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../file_include/css/menu_select_sys/css/style6.css" />
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
    <!-- Custom styles for this template -->
    <link href="../file_include/login_user_include/css/blog-home.css" rel="stylesheet">

  </head>

  <body>




    <!-- Navigation -->
    <?php include "menu/navbar.php"; ?>


  <div class="row">
<div class="col-md-8">
      <div class="container" style="padding : 20px">
        <div class="row">

          <?php //กรอบ 1 ?>
        <div class="card mb-4">
          <div class="container" style="padding : 20px">
            <div class="card-body">
              <div class="col-md-12">

              </div>
            </div>
              <div class="card-body">
                <div class="col-md-12">
                </div>
              </div>
        </div>
          </div>

          <?php //กรอบ 2 ?>
          <div class="card mb-4">
            <form action="index.php" method="post">
            <div class="card-body">
              <h2 class="card-title">ทางลัดสั่งงาน</h2>
              <input style="width:200px" type="text" name="text" value="">
            </div>
            <div class="card-body">
            <button type="submit" class="btn btn-default">สั่งโลด</button>
            </div>
          </form>
        </div>
          <?php if ($_POST) {?>
              <img src="test.jpg" style="height : 150px; width : 150px; padding : 10px;"></img>
            <?php } ?>

          <?php //กรอบ 3 ?>
          <div class="card mb-4">
            <div class="container" style="padding : 0px">

              <?php $text = $_POST['text']; ?>
              <?php if ($_POST) {





               ?>
              <div class="card-body">
                  <h2 class="card-title">ตอบกลับ</h2>

                  <textarea disabled class="form-control"  rows="2" style="padding : 10px; " ><?php echo text_process($text , $link ) ?></textarea>
              </div>
                <div class="card-body">
                  <div class="col-md-12">

                  </div>
                </div>
  <?php } ?>
                <br>
          </div>
        </div>
        </div>
      </div>
    </div>



</div>



<!--
<div class="ca-content">
    <h2 class="ca-main">เลือกระบบ</h2>
</div> -->


    <div class="container" style="padding : 20px">
      <div class="row">
        <div class="content">
            <ul class="ca-menu">
                <li>
                    <a href="#">
                        <span class="ca-icon">H</span>
                        <div class="ca-content">
                            <h2 class="ca-main">การทำงาน</h2>
                            <!-- <h3 class="ca-sub">Personalized to your needs</h3> -->
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ca-icon">F</span>
                        <div class="ca-content">
                            <h2 class="ca-main">บันทึกประจำวัน</h2>
                            <!-- <h3 class="ca-sub">Advanced use of technology</h3> -->
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ca-icon">N</span>
                        <div class="ca-content">
                            <h2 class="ca-main">สุขภาพ</h2>
                            <!-- <h3 class="ca-sub">Understanding visually</h3> -->
                        </div>
                    </a>
                </li>
                <?php if ($s_type_user == "super_admin") {
                  ?>
                  <li>
                      <a href="http://localhost/day/_admin/">
                          <span class="ca-icon">K</span>
                          <div class="ca-content">
                              <h2 class="ca-main">ผู้ดูแลระบบ</h2>
                              <h3 class="ca-sub">Professionals in action</h3>
                          </div>
                      </a>
                  </li>

                  <?php
                }else {

                } ?>

                <li>
                    <a href="#">
                        <span class="ca-icon">L</span>
                        <div class="ca-content">
                            <h2 class="ca-main">ยังคิดไม่ออก</h2>
                            <h3 class="ca-sub">เอาไว้ก่อน</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
      </div>
    </div>
    <br>
    <?php include "menu/footer.php"; ?>



<?php } ?>
    <!-- Bootstrap core JavaScript -->
    <script src="../file_include/login_user_include/jquery/jquery.min.js"></script>
    <script src="../file_include/login_user_include/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
