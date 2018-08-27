<?php
include "../../database/connect.php";
$bypass = $_POST['bypass'];
$en_bypass = md5($bypass);



$sql_s_dcb = "SELECT * FROM dv_config_base";
$dv_qy = mysqli_query($link , $sql_s_dcb);

$result = mysqli_fetch_array($dv_qy);

if ($result[0] == '1') {
  ?><script langquage='javascript'>
// window.location="http://localhost/day/_admin/config.php";
window.location="<?php echo $site_main."_admin/config.php"; ?>";
  </script><?php
}else if($result[0] == '') {


$sql_i_dcb = "INSERT INTO `dv_config_base` (`dv_id_config`, `dv_config_bypass`) VALUES (1, '$en_bypass')";
$dv_qy = mysqli_query($link , $sql_i_dcb);

// $id = mysqli_insert_id($link);

?><script langquage='javascript'>
// window.location="http://localhost/day/_admin/config.php";
window.location="<?php echo $site_main."_admin/config.php"; ?>";
</script><?php


}else {

}

 ?>
