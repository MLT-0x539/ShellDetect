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

<!DOCTYPE html>
<htmL>
  <head>
    <meta charset="UTF-8">
    <title> SETUP/INSTALLATION SCRIPT </title>
    <link rel="stylesheet" href="/assets/setup_style.css">
  </head>
  <body>
  <center>
    <h2><u> SETUP INFORMATION: </u></h2>
    <?php echo "<p>Reaktune logging results can be located at $logfile</p><br />"; ?>
    <p>Default language is English</p><br />
    <p>Default language can be changed at the following URL:</p><br />
    <a href="lang_change.html"> URL TO CHANGE LANGUAGE </a><br />
    <h2><u> ADDITIONAL INSTALLATIONS: </u></h2>
    <p>To configure the python script, <a href="python.html"> CLICK HERE </a></p><br />
    <p>To configure the bash log sorter, <a href="log_sorter.html"> CLICK HERE </a></p><br />
  </center>
  </body>
</htmL>
