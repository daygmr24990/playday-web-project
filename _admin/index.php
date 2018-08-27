<?php
include "../database/connect.php";
session_start();
error_reporting(0);

$bp_admin_overall = $_SESSION["bp_admin_overall"]; // pass admin
$dun = $_SESSION["dv_user_name"];
$dv_us = $_SESSION["dv_user_name"];
$s_type_user = $_SESSION["s_type_user"];

if (!isset($bp_admin_overall)) {
  ?>
  <script langquage='javascript'>
  window.location="http://localhost/day/database/router.php";
  </script>
  <?php
}else {
  ?>
  <script langquage='javascript'>
  window.location="http://localhost/day/_admin/config.php";
  </script>
  <?php
}

$sql = "SELECT dv_user_overall.dv_us_id ,dv_user_overall.dv_user_name , dv_code_pass.Us_Admin_id , dv_code_pass.status, dv_code_pass.dv_sp_admin
FROM dv_user_overall
LEFT JOIN dv_code_pass on dv_user_overall.dv_us_id = dv_code_pass.Us_Admin_id
WHERE
dv_code_pass.status = '1'
AND
dv_user_overall.dv_user_name = '$dun';
";

$query = mysqli_query($link ,$sql);

foreach ($query as $key => $data) {
$admin = $data['dv_sp_admin'];
$status = $data['status'];
$dv_user_name = $data['dv_user_name'];


}

// $_SESSION["dv_user_name_db"] = "$dv_user_name";
$_SESSION["status_db"] = "$status";


if ($admin == 'super_admin' AND isset($bp_admin_overall)) {


?>
<script langquage='javascript'>
window.location="http://localhost/day/_admin/config.php";
</script>
<?php

}else if ($admin == '' AND  !isset($bp_admin_overall)) {
  ?>

  <script langquage='javascript'>
window.location="http://localhost/day/database/router.php";
  </script>

  <?php
}

 ?>
