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
include("XDebug_installer.php");
include("XDebug.php");
include("BR.php");
include("chinese.php");
include("french.php");
include("italian.php");
include("russian.php");
include("spanish.php");

$encoded = file_get_contents("shell_detect.db");
$partial_decoded = file_get_contents("partially_decoded_formatted.db");
$fully_decoded = file_get_contents("fully_decoded_formatted.db");
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
      <li><a href="result_sorted_output.html">View real-time detection results</a></li>
      <li><a href="web_control_panel.php">Load web-based control panel</a></li>
      <li><a href="PYexec.php">Execute python shell detection script</a></li>
      <li><a href="BATexec.php">Execute batch result sorting script</a></li>
      <li><a href="BASHexec.php">Execute bash result sorting script</a></li>
      <li><a href="/installers/XDebug_installer.php">Install and configure XDebug</a></li>
      <lI><a href="XDebug.php">Perform Deep Packet Analysis via XDebug</a></li>
    </ul>  
  </body>
</html>
