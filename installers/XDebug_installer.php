<!DOCTYPE html>
<html>
<head>
  <title>XDebug installer</title>
</head>
<body>
  <h2><u> XDebug instllation script: </u></h2>
  <p><b>NOTE:</b> In order to install XDebug automatically, you will need to input your sudo password.</p><br />
  <p>Personally I would recommend avoiding this, and manualluy installing XDebug instead.</p><br />
  <p>For manual installation, follow <a href="XDebug_manual.html">these instructions</a></p><br />
  <p>If you cannot figure out how to install it manually, then inputting your sudo pass is your only option/</p><br />
  <form action="XDebug_installer.php" method="POST">
 Sudo credentials for authentication: <input type="text" name="sudopass"> <br />
<input type="submit">
</form>

<?php 
  userInput = $_POST['sudopass'];
  if (isset($userInput)) {
    system("su " . $userInput);   // LOL.. 
    }
  else {
    echo "<b><p>Sudo password not inputted</p></b>";
  }
?>

</body>
</html>

  
