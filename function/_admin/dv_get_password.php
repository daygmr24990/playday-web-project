<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<?php
include "../../database/connect.php";

$pass = $_POST['passcheck'];

$en_pass = md5($pass);

$sql_s_dcp = "SELECT * FROM `dv_code_pass` WHERE Us_Admin_id = '1' ";
$qy_sd = mysqli_query($link , $sql_s_dcp);
$result = mysqli_fetch_array($qy_sd);

if ($en_pass == $result[3]) {


?><script langquage='javascript'>
// window.location="http://localhost/day/_admin/config.php";
window.location="<?php echo $site_main."_admin/config.php"; ?>";


</script><?php

}else {

}




 ?>
