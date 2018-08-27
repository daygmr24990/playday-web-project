<?php
include "../../../database/connect.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$us_protec = mysqli_real_escape_string($link , $username);
$pw_protec = mysqli_real_escape_string($link , $password);



$dv_s_duo = "SELECT *
FROM `dv_user_overall`
LEFT JOIN dv_code_pass on `dv_user_overall`.`dv_us_id` = `dv_code_pass`.`Us_Admin_id`
WHERE dv_user_name = '$us_protec' AND dv_pass = '$pw_protec' ";

$dv_q_duo = mysqli_query($link , $dv_s_duo);

$result = mysqli_fetch_array($dv_q_duo);
$dun_db = $result['dv_user_name'];
$dp_db = $result['dv_pass'];
$dp_type = $result['dv_sp_admin'];

if ($us_protec == $dun_db AND $pw_protec == $dp_db) {

    $_SESSION["dv_user_name"] = "$dun_db";
    $_SESSION["dv_login_user"] = "1";
    $_SESSION["s_type_user"] = "$dp_type";

    ?><script langquage='javascript'>
  window.location="http://localhost/day/home";
    </script><?php
}else {
  ?><script langquage='javascript'>
  window.location="http://localhost/day";
  </script><?php
}
 ?>
