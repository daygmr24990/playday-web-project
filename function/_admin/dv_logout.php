<?php
session_start(); //to ensure you are using same session

error_reporting(0);


unset($_SESSION["bp_admin_overall"]);

if (isset($_SESSION["bp_admin_overall"]) == "") {
  ?><script langquage='javascript'>
  window.location="http://localhost/day/home/";
  </script><?php
}else {
echo "55";
}



?>
