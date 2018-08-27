<?php
include "../../database/connect.php";
session_start();
error_reporting(0);
$dun = $_SESSION["dv_user_name"]; //
$password = $_POST['password'];

$pw_protec = mysqli_real_escape_string($link , $password);
$en_pw = md5($pw_protec);


  $dv_s_dcb = "SELECT * FROM `dv_config_base` WHERE dv_config_bypass = '$en_pw' ";
  $dv_q_dcb = mysqli_query($link , $dv_s_dcb);
  $result = mysqli_fetch_array($dv_q_dcb);


  if ($en_pw == "") {
    ?><script langquage='javascript'>
  // window.location="http://localhost/day/database/router.php";
  window.location="<?php echo $site_main."/database/router.php"; ?>";
    </script><?php
  }

  if ($en_pw == $result[1]) {
      $session = $result[1];

      $_SESSION["bp_admin_overall"] = $session;
      $_SESSION["s_type_admin"] = "super_admin";

      if (isset($dun)) {
        ?><script langquage='javascript'>

      window.location="<?php echo $url['base_admin']; ?>config.php";

        </script><?php
      }else {
        ?><script langquage='javascript'>
        window.location="<?php echo $url['base_url']; ?>";

        </script><?php
      }



  }else if($en_pw != $result[1]) {

    ?><script langquage='javascript'>
  // window.location="http://localhost/day/database/router.php";
  window.location="<?php echo $url['router']; ?>router.php";
    </script><?php
  }else {

  }





 ?>
