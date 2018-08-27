

<?php
include "../../database/connect.php";

$last_pass_get = $_POST['last_pass'];
$last_pass = md5($last_pass_get);
$dv_u_dcb = "UPDATE `dv_config_base` SET `dv_config_bypass` = '$last_pass' WHERE `dv_config_base`.`dv_id_config` = 1;";
$dv_q_dcb = mysqli_query($link , $dv_u_dcb);

if ($dv_q_dcb) {

  ?><script langquage='javascript'>
// window.location="http://localhost/day/_admin/config.php";
window.location="<?php echo $site_main."_admin/config.php"; ?>";
  </script><?php
}else {
  echo "ไม่สามารถเปลื่ยนรหัสผ่านได้";
}

 ?>
