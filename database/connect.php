<?php

$url['set_name_web'] = "http://localhost";

$url['base_url']     =  $url['set_name_web']."/day";
$url['base_admin']   =  $url['set_name_web']."/day/_admin/";
$url['base_file']    =  $url['set_name_web']."/day/file_include/";
$url['router']       =  $url['set_name_web']."/day/database/";
$url['func']     =  $url['set_name_web']."/day/function/";

$conndb = "";


$link = mysqli_connect("localhost", "root", "adminday@9030", "devfication_db");

mysqli_set_charset($link,"utf8");

?>
