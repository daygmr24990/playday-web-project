<?php

$message = "ว่าไงบอทเดย์ สวัดดี วันนี้เราอัปเดทไรไปมั่ง";
$database = array("สวัดดี","วันนี้","การมา");
// $find = "สวัดดี";
for ($i=0; $i < count($database) ; $i++) {


if(strpos($message, $database[$i] )) {
  echo "พบ $database[$i] ในข้อความ $message <br>";

}else {
  echo "ไม่พบ $database[$i] ในข้อความ $message";
}

}
 ?>
