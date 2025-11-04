<?php
error_reporting(0);

include("INIT.php");
include("SETUP.php");
include("config.php");
include("shell_detect.php");
include("size_readable.php");
include("FUBAR_encoded.php");
include("shell_detect.ini");
include("shell_detect.db");
include("web_control_panel.php");
include("PYexec.php");
include("BATexec.php");
include("BASHexec.php");
include("BR.php");
include("chinese.php");
include("french.php");
include("italian.php");
include("russian.php");
include("spanish.php");

$encoded = file_get_contents("shell_detect.db");
$decoded = file_get_contents("partially_decoded_formatted.db");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> ShellDetect - v1.7 </title>
    <script src="display_iframe.js">
    <script src="live_output.js">
    <link rel="stylesheet" href="/assets/index_primary.css">
    <link rel="stylesheet" href="live_output.css">
  </head>
  <body>
  <h2><u> ShellDetect - v1.7 </u></h2>
    <ul>
      <li><a href="shell_detect.php">Load primary shell detection script</a></li>
      <li><a href="/documentation/list.html">View documentation</a></li>
      <li><a href="SETUP.php">Load primary setup script</a></li>
      <li><a href="INIT.php">Load primary initialization script</a></li>
      <li><a href="lang_change.php">Change default written language</a></li>
      <li><a href="config.php">Customize tool configuration settings</a></li>
      <li><a href="/result_logz/">View logfiles</a></li>
      <li><a href="PYexec.php">Execute python shell detection script</a></li>
      <li><a href="BATexec.php">Execute batch result sorting script</a></li>
      <li><a href="BASHexec.php">Execute bash result sorting script</a></li>
    </ul>  
  </body>
</html>
