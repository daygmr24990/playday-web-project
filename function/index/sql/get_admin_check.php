<?php
include "../../../database/connect.php";
session_start();
$password = $_POST['password'];

if ($password == "") {

  ?><script langquage='javascript'>
window.location="http://localhost/day/login.php";
  </script><?php
}

$en_pw = md5($password);

$dv_s_dcb = "SELECT * FROM `dv_config_base` WHERE dv_id_config = '1' ";
$dv_q_dcb = mysqli_query($link , $dv_s_dcb);

$result = mysqli_fetch_array($dv_q_dcb);


if ($en_pw == $result[1]) {
    $session = $result[1];

    $_SESSION["bp_admin_overall"] = $session;
    $_SESSION["type_user"] = "super_admin";

  ?><script langquage='javascript'>

window.location="http://localhost/day/_admin/config.php";
  </script><?php
}else if($en_pw != $result[1]) {

  ?><script langquage='javascript'>
window.location="http://localhost/day/";
  </script><?php
}else {

}
 ?>
