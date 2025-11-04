<?php
error_reporting(0);
$current_date = date("Y-m-d");
$current_time = time();
$datetime = $current_date . $current_time;
$logdate = "echo $datetime";
$logpath = "/result_logz/$logdate/log.html";
$webroot = get_current_user();

include("INIT.php");
getVersionz();

if (!file_exists($logpath) {
  chown($webroot . $logpath);
  mkdir($logpath);
}
else {
throw new Exception($logpath . "file already exist");
}

?>
