<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> XDebug WebCP </title>
  </head>
  <body>
    <center>
    <h2><u>XDebug WebCP:</u></h2>
    </center>
    <form action="XDebug.php">
     <input type="checkbox" id="checkInstall" name="checkInstall" value="checkInstall">
     <label for="checkInstall"> Check if XDebug is installed properly</label><br>
     <input type="checkbox" id="runxdebug" name="runxdebug" value="runxdebug">
     <label for="vehicle2"> Run XDebug launcher</label><br>
     <input type="submit" value="Submit">
    </form>

<?php
error_reporting(0);
$checkInstall = $_POST['checkInstall'];
$runxdebug = $_POST['runxdebug'];

if (isset($_POST['submit'];)) {
  if (!empty($checkInstall) && isset($checkInstall)) {
    if (function_exists('xdebug_get_code_coverage')) {
       echo "<h4>XDebug has been installed successfully!</h4>";
      }

  else {
       echo "<h4><b>ERROR:</b> XDebug is not installed!</h4><br />";
       echo "<p>To run the XDebug installer, visit the <a href='/installers/XDebug_installer.php'>following URL</a></p><br />";
      }
   }

 else if (!empty($runxdebug) && isset($runxdebug)) {
       echo "<p><b>Launching XDebug interface!</b></p>";
       header('Location: /XDebug_fullWebUI.php');
    }
 }
?>

  </body>
</html>
